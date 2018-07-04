<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\SliderRequest;
use App\models\Slider;
use App\models\Entity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends AbstractController
{

    public function __construct(Slider $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $sliders = $this->model->all();
        return View('backend.slider.index' , compact('sliders'));
    }


    public function add(){

        $entity = Entity::pluck('name','id');

        return view('backend.slider.add',compact('entity'));

    }

    public function create(SliderRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('SliderIndex');
    }

    public function edit($id){

        $slider = $this->model->find($id);
        $entity = Entity::pluck('name','id');

        return view('backend.slider.edit', compact('slider','entity'));
    }

    public function update($id, SliderRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('SliderIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('SliderIndex');
    }

}