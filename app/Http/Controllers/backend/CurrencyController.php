<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\CurrencyRequest;
use App\models\Currency;
use App\models\Entity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends AbstractController
{

    public function __construct(Currency $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $currency = $this->model->all();
        return View('backend.currency.index' , compact('currency'));
    }


    public function add(){

        return view('backend.currency.add',compact('entity'));

    }

    public function create(CurrencyRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('CurrencyIndex');
    }

    public function edit($id){

        $currency = $this->model->find($id);
        return view('backend.currency.edit', compact('currency'));
    }

    public function update($id, CurrencyRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('CurrencyIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('CurrencyIndex');
    }

}