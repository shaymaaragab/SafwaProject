<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\AboutusRequest;
use App\models\Aboutus;
use App\models\Entity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends AbstractController
{

    public function __construct(Aboutus $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $aboutus = $this->model->all();
        return View('backend.aboutus.index' , compact('aboutus'));
    }


    public function add(){

        $entity = $this->getEntity();
        return view('backend.aboutus.add',compact('entity'));

    }

    public function create(AboutusRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('AboutusIndex');
    }

    public function edit($id){

        $aboutus = $this->model->find($id);
        $entity = Entity::find($aboutus->entity_id);
       // dd($entity);
        return view('backend.aboutus.edit', compact('aboutus','entity'));
    }

    public function update($id, AboutusRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('AboutusIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('AboutusIndex');
    }

    public function view($id){

        $aboutus = $this->model->find($id);
        return view('backend.aboutus.view', compact('aboutus'));

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
