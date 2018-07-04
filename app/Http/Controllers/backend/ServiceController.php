<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\ServiceRequest;
use App\Service;
use App\models\Entity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ServiceController extends AbstractController
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }

    public function index(){


        $service = $this->model->all();
        return View('backend.service.index' , compact('service'));
    }


    public function add(){

        $entity = $this->getEntity();
        return view('backend.service.add',compact('entity'));

    }

    public function create(ServiceRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('ServiceIndex');
    }

    public function edit($id){

        $service = $this->model->find($id);
        $entity = Entity::find($service->entity_id);
       // dd($entity);
        return view('backend.service.edit', compact('service','entity'));
    }

    public function update($id, ServiceRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('ServiceIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('ServiceIndex');
    }

    public function view($id){

        $service = $this->model->find($id);
        return view('backend.service.view', compact('service'));

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
