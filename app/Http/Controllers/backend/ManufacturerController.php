<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\ManufacturerRequest;
use App\models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManufacturerController extends AbstractController
{

    public function __construct(Manufacturer $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $manufacturers = $this->model->all();
        return View('backend.manufacturer.index' , compact('manufacturers'));
    }


    public function add(){

        return view('backend.manufacturer.add');

    }

    public function create(ManufacturerRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('ManufacturerIndex');
    }

    public function edit($id){

        $manufacturer = $this->model->find($id);
        return view('backend.manufacturer.edit', compact('manufacturer'));
    }

    public function update($id, ManufacturerRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('ManufacturerIndex');
    }

    public function delete($id){
	    $model=$this->model->find($id);
	    $products=$model->Product;
//	    dd($products);
		if(!$products->isEmpty())
		{   foreach ($products as $product)
			{
				$product->Product_document()->delete();
				$product->Accessory()->delete();
			}

		}
	    $model->Product()->delete();
	  //  dd($model->Product);
        $this->deleteIfExists($id);

        return redirect()->route('ManufacturerIndex');
    }

    public function view($id){

        $manufacture = $this->model->find($id);
        return view('backend.manufacturer.view', compact('manufacture'));

    }

}
