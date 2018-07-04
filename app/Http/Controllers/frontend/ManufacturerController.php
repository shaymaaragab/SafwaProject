<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;
use App\models\Product_category;
use App\models\Manufacturer;

class ManufacturerController extends Controller
{
	public $sortedCats;
	public $a;
	public $ret_en;
	public $ret_ar;
  public $manf_id;
  public $lists;
	public function index(){
		$lang=\Request::segment(1);
		$manufacturer = Manufacturer::paginate(8);
		return view('frontend.'.$lang.'.manufacturer',compact('manufacturer'));
	}
	public function showManft($manf_id,$cat_id){
       $this->manf_id = $manf_id;
		   $lang=\Request::segment(1);
       $manufacturer = Manufacturer::find($manf_id);

       $products = Product::where('manufacturer_id',$this->manf_id)->get();
       if($products->count() == 0){
        $treee ="";
        $treee_ar ="";
        $products ="";
        $mainCat ="";

        return View('frontend.'.$lang.'.manufactinner',compact('treee','manufacturer','treee_ar','products','mainCat'));       
       }
          self::trees($manf_id);
          for($i=0 ; $i < count($this->sortedCats) ; $i++){
              $this->lists[] = array_reverse($this->sortedCats[$i]); 
          }

         self::buildtree($this->lists);     
         self::buildTreeHtml($this->a);
         self::buildTreeHtmlAr($this->a);

          if(isset($this->a[$cat_id])){
          $mainCat = $this->a[$cat_id];
          $products = [];
         }else{
          $products = Product::where('catproduct_id',$cat_id)->paginate(9);
          $mainCat = [];
         }

        $treee = $this->ret_en;
        $treee_ar = $this->ret_ar;
    		return View('frontend.'.$lang.'.manufactinner',compact('treee','manufacturer','treee_ar','products','mainCat'));
	}

  public function trees($manf_id){
       $products = Product::where('manufacturer_id',$manf_id)->get();

       if($products->count() > 0){
        $arrayName=0;
        foreach ($products as $product) {
           $cat = $product->Product_category;
           self::buildCatChain($cat,$arrayName);
           $arrayName=$arrayName+1;
         } 
       }
       
   }


  public function buildtree($lists){
      foreach ($lists as $list) {
          for($i=0;$i<(count($list)-1);$i++) {
              $this->a[$list[$i]][] = $list[$i+1];
              $this->a[$list[$i]] = array_unique($this->a[$list[$i]]);
          }
      }
  }
 public function buildCatChain($cat,$arrayName){
           $this->sortedCats[$arrayName][] = $cat->id;
           if(isset($cat->parent)){
               self::buildCatChain($cat->parent,$arrayName);
           }else{
            $this->sortedCats[$arrayName][] = 0;
           }   
   }

   function buildTreeHtml($a,$parent=0){
    foreach ($a[$parent] as $item) {

      $collapseDiv = "<div class='collapse' id='T".$item."'>";
      // if there is no childs then don't collapse
      if(!isset($a[$item])){
        $collapseDiv = '';
      }
    $this->ret_en .= "<ul style='list-style: none; padding:15px; margin-bottom: 0px;' class='sidebar-menu'>
    ";

    if(isset($a[$item])){
       $itemName = Product_category::find($item)->name_en;
      
      $this->ret_en .= '<li style="cursor: pointer;" onclick="downup('.$item.')" data-toggle="collapse" data-target="#T'.$item.'">';
        
        $this->ret_en .=' '.$itemName;

        $this->ret_en  .='<i id="l'.$item.'" onclick="downup('.$item.')" style="font-size: 20px;float: right;" class="fa fa-angle-left"  data-toggle="collapse" data-target="#T'.$item.'"> <input type="hidden" id="input'.$item.'" value="left" > </i>';

        $this->ret_en .='</li>';
      
      
      $this->ret_en .= $collapseDiv;
        self::buildTreeHtml($a,$item);

    }else{
      $itemName = Product_category::find($item)->name_en;
      $url = route('Manufacturerinner',[$this->manf_id, $item]);
    $this->ret_en .="<li ><a ma href='".$url."' style='padding:8px'>".$itemName."</a></li>";     
    }

    $this->ret_en .= '</ul>';
      }
        $this->ret_en .= '</div>';
  }





function buildTreeHtmlAr($a,$parent=0){
    foreach ($a[$parent] as $item) {

      $collapseDiv = "<div class='collapse' id='T".$item."'>";
      // if there is no childs then don't collapse
      if(!isset($a[$item])){
        $collapseDiv = '';
      }
    $this->ret_ar .= "<ul style='list-style: none; padding:15px; margin-bottom: 0px;'  class='sidebar-menu'>";

    if(isset($a[$item])){
      $itemName = Product_category::find($item)->name_ar;
      
       $this->ret_ar .= '<li style="cursor: pointer;" onclick="downup('.$item.')" data-toggle="collapse" data-target="#T'.$item.'">';
        
        $this->ret_ar .=' '. $itemName;

        $this->ret_ar  .='<i id="l'.$item.'" onclick="downup('.$item.')" style="font-size: 20px;float: left;" class="fa fa-angle-left"  data-toggle="collapse" data-target="#T'.$item.'"> <input type="hidden" id="input'.$item.'" value="left" > </i>';
        $this->ret_ar .='</li>';
        
      $this->ret_ar .= $collapseDiv;
        self::buildTreeHtmlAr($a,$item);

    }else{
      $itemName = Product_category::find($item)->name_ar;
      $url = route('Manufacturerinner',[$this->manf_id, $item]);
    $this->ret_ar .="<li><a href='".$url."' style='padding:8px'>".$itemName."</a></li>";      
    }

    $this->ret_ar .= '</ul>';
      }
  $this->ret_ar .= '</div>';
  }

  public function productinner($pro_id){
        $lang=\Request::segment(1);
        
    $product   = Product::find($pro_id);
    $slider    = Product_images::where('product_id',$pro_id)->get();
    $docs      = Product_document::where('product_id',$pro_id)->get();
    $accessory = Accessory::where('product_id',$pro_id)->get();

    return view('frontend.'.$lang.'.productinner' , compact('product','slider','docs' ,'accessory'));

  }
}
