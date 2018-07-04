<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\AbstractController;
use App\models\Contactus;
use Illuminate\Http\Request;
use App\models\Contact;
use App\models\Branch;
use App\models\City;
use App\models\Team;
use App\Mail\ContactusMail;
use Illuminate\Support\Facades\Mail;


class ContactusController extends AbstractController
{
    public function __construct(Contactus $model)
    {
        parent::__construct($model);
    }

    public function index(){
        $lang=\Request::segment(1);
        $contacts = Contact::all();
        $branches = Branch::all();
        $cities   = City::all();
        $teams    = Team::all();
            return View('frontend.'.$lang.'.contactus',compact('contacts','branches' , 'cities','teams'));

    }

    public function homemobilityContactus(Request $request){
           dd($request->all()); 
        $this->addOrUpdate(null  , $request->all());

        // Mail::to('a.sameh@fastkood.com')->send(new ContactusMail($request->all()));

        return redirect()->back();

    }
}