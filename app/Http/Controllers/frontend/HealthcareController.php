<?php

namespace App\Http\Controllers\frontend;

use App\models\Aboutus;
use App\models\City;
use App\models\Contactus;
use App\models\Product;
use App\models\Product_category;
use App\models\Slider;
use App\Service;
use App\models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthcareController extends Controller
{
    public function index()
    {
        $lang=\Request::segment(1);
		$entity_id=2;
		$sliders=Slider::where('entity_id',$entity_id)->get();
		$aboutus=Aboutus::where('entity_id',$entity_id)->first();
		$service=Service::where('entity_id',$entity_id)->first();
		$team=Team::where('entity_id',$entity_id)->first();
		$cities=City::all();
    	return view('frontend.'.$lang.'.healthcare',compact('entity_id','sliders','aboutus','team','cities','service'));
        
        
    }
    public function addcontactus(Request $request)
    {
    	Contactus::create($request->all());
    	return back();
    }
    public function tree()
    {

    	$cat=Product_category::all();
//    	dd($cat);
//	   $s= $this->buildTree($cat);
	    $s= $this->recurse($cat);
	echo $s;
    }
	function recurse($categories, $parent = null, $level = 0)
	{
		$ret = '<ul>';
		foreach($categories as $index => $category)
		{
			if($category->parent_id == $parent)
			{
				$ret .= '<li><a href="'.$category->id.'"><p class="Tier' . $level . '">' . $category->name_en . '</p></a>';
				$ret .= $this->recurse($categories, $category->id, $level+1);
				$ret .= '</li>';
			}
		}
		return $ret . '</ul>';
	}
	function buildTree( $elements, $parentId = NULL) {
		$branch = array();

		foreach ($elements as $element) {
			if ($element->parent_id == $parentId) {
				$children = $this->buildTree($elements, $element['id']);
				if ($children) {
					$element['children'] = $children;
				}
				$branch[] = $element;
			}
		}

		return $branch;
	}
}
