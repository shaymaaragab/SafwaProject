<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\AbstractController;
use App\models\Aboutus;
use App\models\Contactus;
use App\models\City;
use App\models\Team;
use Illuminate\Http\Request;
use App\Mail\ContactusMail;
use Illuminate\Support\Facades\Mail;


class AboutusController extends AbstractController
{
    public function __construct(Contactus $model)
    {
        parent::__construct($model);
    }


    public function mobilityAboutus(){
	    $lang=\Request::segment(1);
      $aboutus = Aboutus::find('3');
      $teams = Team::all();
      $cities = City::all();
        return View('frontend.'.$lang.'.mobilityAboutus' , compact('aboutus','teams','cities'));
    }

    public function homemobilityContactus(Request $request){
        $this->addOrUpdate(null  , $request->all());

        // Mail::to('a.sameh@fastkood.com')->send(new ContactusMail( $request->all()));
//        dd('AS');

        return redirect()->back();

    }


}
