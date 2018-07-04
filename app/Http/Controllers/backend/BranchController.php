<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\BranchRequest;
use App\models\Branch;
use App\models\Entity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BranchController extends AbstractController
{
    public function __construct(Branch $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $branches = $this->model->all();
        return View('backend.branch.index' , compact('branches'));
    }


    public function add(){

        $entity = $this->getEntity();
        return view('backend.branch.add',compact('entity'));

    }

    public function create(BranchRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('BranchIndex');
    }

    public function edit($id){

        $branch = $this->model->find($id);
        $entity = $this->getEntity();
        return view('backend.branch.edit', compact('branch','entity'));
    }

    public function update($id, BranchRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('BranchIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('BranchIndex');
    }

    public function getEntity(){

        $entity = Entity::all();

        $allEntity = [];

        foreach ($entity as $ent){

            $allEntity[$ent->id]= $ent['name'];
        }
        return $allEntity;
    }

}
