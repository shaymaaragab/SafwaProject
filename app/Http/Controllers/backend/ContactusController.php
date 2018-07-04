<?php

namespace App\Http\Controllers\backend;

use App\models\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;

class ContactusController extends Controller
{
    public function index()
    {
	    $contactus=Contactus::all();
	    return view('backend.contactus.index',compact('contactus'));
    }
    public function view($id)
    {
	    $contactus=Contactus::find($id);
		return view('backend.contactus.view',compact('contactus'));
    }

    public function ExportContactus(){
        $contactus=Contactus::select('name','email','disabiltytype','age','weight','phone','msg')->get();
        Excel::create('Export Contacts Data' , function($excel) use($contactus){
        $excel->sheet('sheet',function($sheet) use($contactus) {
            $sheet->fromArray($contactus);
        });

        })->export('xlsx');
        }
    public function delete($id)
    {
	    Contactus::destroy($id);
	    return back();
    }
}
