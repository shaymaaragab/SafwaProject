<?php

namespace App\Http\Controllers;

use App\Exceptions\InternalErrorException;
use App\Exceptions\UnauthorizedException;
use Illuminate\Database\Eloquent\Model;
use Flashy;
use Illuminate\Database\Eloquent\Relations\HasMany;

abstract class AbstractController extends Controller
{

    protected $model;
    protected $related;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /*
     * Normal section add edit delete
     */

   public function addOrUpdate($id, $request_array)
    {
        if(!empty($request_array['img'])){$request_array['img'] = $this->uploadimage($request_array['img']);}
        
        if ($id == null) {
            return $this->createNew($request_array);
        }
        return $this->updateExist($id, $request_array);
    }
    public function uploadimage($file){
        $extention = $file->getClientOriginalExtension();
        $md5       = MD5($file->getClientOriginalName());
        $filename  = date('D-M-Y')."_".$md5.".".$extention;
        $path      = public_path('uploads/');
        
        $file->move($path , $filename);
        
        return '/uploads/'.$filename;
    }

    public function getConvert( $AllDate ,$key , $val )
    {
        $AllTypes = [];

        foreach ($AllDate as $Date) {
                $AllTypes[$Date->$key] = $Date->$val;
        }
        return $AllTypes;
    }

    protected function createNew($request_array)
    {   

        try {
            $this->doneMessage();
            return $this->model->create($request_array);
        } catch (\Exception $e) {

            return $this->catchExceptions($e);
        }
    }

    protected function updateExist($id, $request_array)
    {
        try {
            $this->doneMessage();
            $this->model = $this->model->find($id);
            return $this->model->update($request_array);
        } catch (\Exception $e) {
            return $this->catchExceptions($e);
        }
    }


    public function deleteIfExists($id)
    {
        try {
            $this->doneMessage('Deleted Successfully.');
            return $this->model->find($id)->delete();
        } catch (\Exception $e) {
            return $this->catchExceptions($e);
        }
    }


    public function forceDelete($id)
    {
        try {
            $this->model = $this->model->find($id);
            return $this->model->forceDelete();
        } catch (\Exception $e) {
            return $this->catchExceptions($e);
        }

    }

    /*
     * relation section
     */

    public function save($id = null, $request_array, $relationName = '', $relationId = null, $relationArray = [])
    {
        if (count($relationArray) > 0 && $relationName != '') {
            $this->addRelationShip($relationName);
            $this->addOrUpdateRelation($relationId, $relationArray);
            return $this->addOrUpdate($id, $request_array)->with($relationName);
        }
        return $this->model = $this->addOrUpdate($id, $request_array);
    }

    public function saveRelationWithModel($relationName, $id, $request)
    {
        $this->addRelationShip($relationName);
        return $this->addOrUpdateRelation($id, $request);
    }

    public function addRelationShip($relation)
    {
        if (method_exists($this->model, $relation)) {
            $this->related = $this->model->{$relation}();
            if ($this->related instanceof HasMany) {
                $this->getHasManyModel();
            }
        }
    }

    public function getHasManyModel()
    {
        return $this->related = $this->related->getQuery()->getModel();
    }

    public function addOrUpdateRelation($id = null, $request_array)
    {
        if ($id == null) {
            return $this->createRelation($request_array);
        }
        return $this->updateRelation($id, $request_array);
    }

    public function createRelation($request_array)
    {
        try {
            return $this->related->create($request_array);
        } catch (\Exception $e) {
            return $this->catchExceptions($e);
        }

    }

    public function updateRelation($id, $request_array)
    {
        try {
            return $this->related->find($id)->update($request_array);
        } catch (\Exception $e) {
            return $this->catchExceptions($e);
        }
    }


    protected function getRelationType($relation)
    {
        return $this->model->getRelation($relation);
    }


    /*
     * helper sections
     */

    public function rArray($index, $array)
    {
        unset($array[$index]);
        return $array;
    }

    public function aArray($value, $array, $index = 0)
    {
        $array[$index] = $value;
        return $array;
    }


    public function catchExceptions($exception)
    {
        if ($exception instanceof UnauthorizedException) {
            $this->errorMessage('Unauthorized Error Occurred !');
            return redirect()->route('Dashboard');
        } elseif ($exception instanceof InternalErrorException) {
            $this->errorMessage('Internal Error Occurred !');
            return redirect()->back();
        }
        $this->errorMessage('An Error Occurred !');
        return redirect()->back();
    }

    protected function doneMessage($message = "This process done success .")
    {
        return Flashy::success($message);
    }

    protected function errorMessage($message = "This process not complete .")
    {
        return Flashy::error($message);
    }


}