<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;
use App\models\Blog;

class SearchController extends Controller
{
    public function index(Request $request){
        $lang=\Request::segment(1);
    	$req = $request->all();
    	$word = $req['search'];
        // products
    	$res = Product::where('name_en','LIKE', "%$word%")
    	->orWhere('name_ar','LIKE', "%$word%")
    	->orWhere('shortcontent_en','LIKE', "%$word%")
        ->orWhere('shortcontent_ar','LIKE', "%$word%")
        ->orWhere('fullcontent_ar','LIKE', "%$word%")
    	->orWhere('fullcontent_en','LIKE', "%$word%")
    	->get();

    	// blogs

    	$res2 = Blog::where('title_en','LIKE', "%$word%")
    	->orWhere('title_ar','LIKE', "%$word%")
    	->orWhere('content_en','LIKE', "%$word%")
    	->orWhere('content_ar','LIKE', "%$word%")
    	->get();
         return View('frontend.'.$lang.'.search' , compact('res','res2'));

    } 
}
