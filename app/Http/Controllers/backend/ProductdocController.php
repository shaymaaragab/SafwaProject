<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\ProductDocumentRequest;
use App\models\Product;
use App\models\Product_document;
use App\Http\Controllers\AbstractController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductdocController extends AbstractController
{
    public function __construct(Product_document $model)
    {
        parent::__construct($model);
    }
    public function index($pro_id){
        $documents = $this->model->where('product_id','=',$pro_id)->get();
        return View('backend.productdocument.index' , compact('documents','pro_id'));
    }


    public function add($pro_id){
        return view('backend.productdocument.add',compact('product','pro_id'));
    }

    public function create(ProductDocumentRequest $request , $id){
        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('ProductdocIndex',$id);
    }

    public function edit($id){

        $product_document= $this->model->find($id);
        $pro_id = Product_document::where('id','=',$id)->first()->product_id;
        return view('backend.productdocument.edit', compact('product_document','pro_id'));
    }

    public function update($id, ProductDocumentRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        $pro_id = Product_document::where('id','=',$id)->first()->product_id;

        return redirect()->route('ProductdocIndex',$pro_id);
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return back();
    }
}
