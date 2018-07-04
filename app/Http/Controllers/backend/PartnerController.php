<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\PartnerRequest;
use App\models\Partners;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends AbstractController
{

    public function __construct(Partners $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $partners = $this->model->all();
        return View('backend.partner.index' , compact('partners'));
    }


    public function add(){

        return view('backend.partner.add');

    }

    public function create(PartnerRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('PartnerIndex');
    }

    public function edit($id){

        $partner = $this->model->find($id);
        return view('backend.partner.edit', compact('partner'));
    }

    public function update($id, PartnerRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('PartnerIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('PartnerIndex');
    }

}