<?php

namespace App\Http\Controllers\frontend;
use App\models\Aboutus;
use App\models\City;
use App\models\Entity;
use App\models\Contactus;
use App\models\Product;
use App\models\Product_category;
use App\models\Slider;
use App\models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutoclinicController extends Controller
{
    public function index()
    {
        $lang      =\Request::segment(1);
		$entity_id =1;
        $entitys   = Entity::find($entity_id);
        $producsts   = $entitys->Product()->paginate(6);
		$sliders=Slider::where('entity_id',$entity_id)->get();
		$aboutus=Aboutus::where('entity_id',$entity_id)->first();
		$team=Team::where('entity_id',$entity_id)->first();
		$cities=City::all();
        return view('frontend.'.$lang.'.autoclinic',compact('entity_id','sliders','aboutus','team','cities','producsts'));
        
    }
    public function addcontactus(Request $request)
    {
    	Contactus::create($request->all());
    	return back();
    }





}