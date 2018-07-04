<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\EventcategoryRequest;
use App\models\Event_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventcategoryController extends AbstractController
{

    public function __construct(Event_category $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $event_categorys = $this->model->all();
        return View('backend.eventcategory.index' , compact('event_categorys'));
    }


    public function add(){

        return view('backend.eventcategory.add');

    }

    public function create(EventcategoryRequest $request){
        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('EventcategoryIndex');
    }

    public function edit($id){

        $eventCategory = $this->model->find($id);
        return view('backend.eventcategory.edit', compact('eventCategory'));
    }

    public function update($id, EventcategoryRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('EventcategoryIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('EventcategoryIndex');
    }

}
