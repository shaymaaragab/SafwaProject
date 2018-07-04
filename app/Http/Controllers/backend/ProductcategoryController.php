<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\ProductcategoryRequest;
use App\models\Product_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductcategoryController extends AbstractController
{
    public $cat = "";

    public function __construct(Product_category $model)
    {
        parent::__construct($model);
    }

    public function index($id){
        if($id == 0){
        $product_categorys = $this->model->whereNull('parent_id')->get();
        }elseif($id > 0){
        $product_categorys = $this->model->where('parent_id','=',$id)->get();
        }
        return View('backend.productCategory.index' , compact('product_categorys','id'));
    }


    public function add($parentId){
        if($parentId == 0 ){
            $parentId = NULL;
            $catChain = "Main Category";
        }else{
            $catChain = $this->buildchain($parentId);
        }

        
        $Product_category  = Product_category::pluck('name_en','id');
        // $lastOrder = Product_category::where('parent_id','=',$parentId)->get()->last()->order;
        // $order = $lastOrder + 1 ;
        $add = "addForm";
        return view('backend.productCategory.add',compact('Product_category','parentId','add','catChain'));

    }
    public function getOrderLimit(){
        $parentId = $_POST['id'];
        if($parentId == 0 ){
            $parentId = NULL;
         }
        $order = Product_category::where('parent_id','=',$parentId)->get()->toArray();
        return $order;
    }
    public function buildchain($id){
         $parent_id = Product_category::where('id','=',$id)->first()['parent_id'];
         $this->cat .= Product_category::where('id','=',$id)->first()['name_en'];
        if($parent_id != NULL){
            $this->cat .= " <- ";
           $this->buildchain($parent_id);
        }
  

        return $this->cat;
    }

    public function create(ProductcategoryRequest $request ){
        if( $request['parent_id'] == 0 ){
             $request['parent_id'] = NULL;
        }
        $this->addOrUpdate(null  , $request->all());
        if( $request['parent_id'] == NULL){
             $request['parent_id'] = 0 ;
        }
        return redirect()->route('ProductcategoryIndex', $request['parent_id']);
    }

    public function edit($id){
        $parent_iidd = Product_category::where('id','=',$id)->get()->first()->parent;
        

        $productCategory = $this->model->find($id);
        $Product_category  = Product_category::pluck('name_en','id');
        // $catOrderArray    =  Product_category::where('parent_id','=',$parent_iidd)->get(); 
        return view('backend.productCategory.edit', compact('productCategory' , 'Product_category'));
    }

    public function update($id, ProductcategoryRequest $request)
    {
	    if( $request['parent_id'] == 0 ){
		    $request['parent_id'] = NULL;
	    }
        //  $old_order = Product_category::find($id)->order;

        //  if($old_order > $request['order'] ){
        //     $allcat = Product_category::where('order','<',$old_order)->where('parent_id','=',$id)->get();
        //     //$old_order = "";
            
        // foreach ($allcat as $catorder) {
        //  $catorder->order = $catorder->order+1; 
        //  Product_category::where('id','=',$catorder->id)->update(['order' => $catorder->order]);
        // }

        // }elseif($old_order < $request['order']){
        //     $allcat = Product_category::where('order','>',$old_order)->where('parent_id','=',$id)->get();
        //     //$old_order = ""; 
        //     foreach ($allcat as $catorder) {
        //      $catorder->order = $catorder->order-1; 
        //      dd($catorder->order);
        //      Product_category::where('id','=',$catorder->id)->update(['order' => $catorder->order]);
        //     }
        // }
  
        $this->addOrUpdate($id, $request->all());
	    if( $request['parent_id'] == NULL){
		    $request['parent_id'] = 0 ;
	    }
        return redirect()->route('ProductcategoryIndex', $request['parent_id']);
    }

    public function delete($id){
	    $pc=Product_category::find($id);
	    $this->delete_by_id($id);

        return back();
    }
	public function delete_by_id($id)
	{
//		echo $id;
		$category=Product_category::find($id);
		$products=$category->Product;
//		dd($products);
		if(!$products->isEmpty())
		{   foreach ($products as $product)
		{
			$product->Product_document()->delete();
			$product->Accessory()->delete();
		}

		}
		$category->Product()->delete();
		$category->delete();
		$cats=Product_category::where('parent_id',$id)->get();
		foreach ($cats as $Child)
		{
			$this->delete_by_id($Child->id);
		}
	}

}