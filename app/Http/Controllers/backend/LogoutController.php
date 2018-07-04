<?php

namespace App\Http\Controllers\backend;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\models\Product_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogoutController extends Controller {
	use AuthenticatesUsers;

	public function signout( Request $request ) {

		$this->guard()->logout();

		$request->session()->flush();

		$request->session()->regenerate();

		return redirect( '/' );
	}
	public  function profile()
	{
		return view('backend.profile.profile');
	}
	public  function order()
	{
		$i=1;
		$parent_id='';
		$Product_category = Product_category::where('parent_id',null)->get();
		foreach ($Product_category as $p ) {
			$p->order = $i;
			$i++;
			$p->save();
		}
		$Product_category = Product_category::where('parent_id','!=',null)->get();
		foreach ($Product_category as $p ) {
			
			if($parent_id == $p->parent_id){
				$p->order = $i;
				$p->update();	
				$i++;
			}else{
				$i =1 ;
				$p->order = $i;
				$p->save();	
				$i++;
			}
			$parent_id = $p->parent_id;	
			 
		}
		return $Product_category;
	}
	public function changepassword(Request $request)
	{
		$input=$request->all();
		 $user=auth()->user();
		$user->password=bcrypt($input['password']);
		$user->save();
		return redirect('admin');
	}
}
