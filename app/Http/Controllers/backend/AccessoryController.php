<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\AccessoryRequest;

use App\models\Accessory;
use App\models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccessoryController extends AbstractController
{
    public function __construct(Accessory $model)
    {
        parent::__construct($model);
    }
    public function index($pro_id){
       
        $accessories = $this->model->where('product_id','=',$pro_id)->get();
        return View('backend.accessory.index' , compact('accessories','pro_id'));
    }

    public function add($pro_id){
        $product= Product::pluck('name_en','id');
        return view('backend.accessory.add',compact('product','pro_id'));

    }

    public function create(AccessoryRequest $request){
        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('AccessoryIndex', $request->product_id);
    }

    public function edit($id){
        $pro_id = Accessory::where('id','=',$id)->first()->product_id;

        $accessory= $this->model->find($id);
        $product= Product::pluck('name_en','id');

        return view('backend.accessory.edit', compact('accessory','product','pro_id'));
    }

    public function update($id, AccessoryRequest $request)
    {
        $pro_id = Accessory::where('id','=',$id)->first()->product_id;
        
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('AccessoryIndex',$pro_id);
    }

    public function delete($id){
        $pro_id = Accessory::where('id','=',$id)->first()->product_id;
        
        $this->deleteIfExists($id);
        return redirect()->route('AccessoryIndex',$pro_id);
    }
}
