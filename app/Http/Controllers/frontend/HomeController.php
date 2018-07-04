<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;
use App\models\Media;
use App\models\Blog;
use App\models\Manufacturer;
use App\models\Partners;
use App\models\City;
use App\models\Team;
use App\models\Slider;


class HomeController extends Controller
{
    public function index(){
    	// products

	    $lang=\Request::segment(1);
    	$products = Product::orderBy('id','DESC')->take(3)->get();
    	$main_product = Product::orderBy('id','DESC')->take(3)->get()->first();
    	// Media

    	$mediaimage = Media::WHERE('flag','=','0')->orderBy('id','DESC')->take(6)->get();
    	$main_media_image = Media::WHERE('flag','=','0')->orderBy('id','DESC')->take(6)->get()->first();


    	// Video
    		$mediavideo = Media::WHERE('flag','=','1')->orderBy('id','DESC')->take(3)->get();

    	//Blogs
         $blogs = Blog::orderBy('id','DESC')->take(3)->get();

         // manufacturers

         $manufacturers = Manufacturer::all();

         //partners

         $partners =  Partners::all();

         // contact us

         $cities  = City::all(); 
         $teams   = Team::all();
         $sliders=Slider::where('entity_id','3')->get();

       	return View('frontend.'.$lang.'.home',compact('products' , 'main_media_image','mediaimage','media_product' , 'mediavideo' , 'blogs' , 'manufacturers' , 'partners','cities' , 'teams','sliders'));

    }
}