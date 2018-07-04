<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\CityRequest;
use App\models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends AbstractController
{
    public function __construct(City $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $cities = $this->model->all();
        return View('backend.city.index' , compact('cities'));
    }


    public function add(){

        return view('backend.city.add');

    }

    public function create(CityRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('CityIndex');
    }

    public function edit($id){

        $city = $this->model->find($id);
        return view('backend.city.edit', compact('city'));
    }

    public function update($id, CityRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('CityIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('CityIndex');
    }

}
