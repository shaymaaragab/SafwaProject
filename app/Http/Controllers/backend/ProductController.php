<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\AbstractController;
use App\Http\Requests\ProductRequest;
use App\models\Currency;
use App\models\Entity;
use App\models\Manufacturer;
use App\models\Product;

use App\models\Product_category;
use App\models\Product_images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends AbstractController
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
    public function index(){

        $products = $this->model->all();
        return View('backend.product.index' , compact('products'));
    }


    public function add(){
        $manufacturers=Manufacturer::pluck('name_en','id');
        $currencys=Currency::pluck('currency','id');
        $entitys=Entity::pluck('name','id');

        $caregory=Product_category::all();

	    $product_categorys=[];
        foreach ($caregory as $product_category)
        {
        	if($product_category->Product_category->isEmpty()){
		        $product_categorys[$product_category->id]=$product_category->name_en;
	        }
        }
        
        foreach ($product_categorys as $key => $value) {
            $product_categorys[$key]= self::getChainName($key,$value);
        }

        // return $product_categorys;

        return view('backend.product.add',compact('manufacturers','currencys','entitys','product_categorys'));

    }
    public function getChainName($key,$name){
        if(Product_category::find($key)->parent()->first()){
            $parent = Product_category::find($key)->parent()->first();
            $name = $parent->name_en." -> ".$name;
            if($parent->parent()->first()){
                return self::getChainName($parent->id,$name);
            }else{
                return $name;
            }
        }else{
            return $name;            
        }
    }
    public function create(ProductRequest $request){
    	$input=$request->all();
	    $entity=$request['entity_id'];

	    unset($input['entity_id']);
	    $product=$this->addOrUpdate(null, $input);
	    $product->entity()->sync($entity);


        return redirect()->route('ProductIndex');
    }

    public function edit($id){

        $product= $this->model->find($id);
        $manufacturers=Manufacturer::pluck('name_en','id');
        $currencys=Currency::pluck('currency','id');
        $entitys=Entity::pluck('name','id');
//        $product_categorys=Product_category::pluck('name_en','id');
	    $entitys_product=$product->entity;
	    //dd($entitys_product[0]->id);
	   $caregory=Product_category::all();

        $product_categorys=[];
        foreach ($caregory as $product_category)
        {
            if($product_category->Product_category->isEmpty()){
                $product_categorys[$product_category->id]=$product_category->name_en;
            }
        }
        
        foreach ($product_categorys as $key => $value) {
            $product_categorys[$key]= self::getChainName($key,$value);
        }
        return view('backend.product.edit', compact('product','manufacturers','currencys','entitys','product_categorys','entitys_product'));
    }

    public function update($id, ProductRequest $request)
    {

	    $input=$request->all();
	    $entity=$request['entity_id'];

	    unset($input['entity_id']);
	    $this->addOrUpdate($id, $input);
	    $product=Product::find($id);
	    $product->entity()->sync($entity);

	    return redirect()->route('ProductIndex');
    }

    public function delete($id){
	    $product=Product::find($id);

	    $product->Product_document()->delete();
	    $product->Accessory()->delete();
	    $product->Product_image()->delete();
    	$this->deleteIfExists($id);


        return redirect()->route('ProductIndex');
    }

    public function view($id){

        $product = $this->model->find($id);
        return view('backend.product.view', compact('product'));

    }
    public function images($id)
    {
		$product=$this->model->find($id);
	    return view('backend.product.images', compact('product'));

    }
	public function images_view($id)
	{
		$product=Product::find($id);
		$images=$product->Product_image;
		return view('backend.product.imagesview', compact('product','images'));

	}

}
