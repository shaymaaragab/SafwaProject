<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\ContactRequest;
use App\models\Contact;
use App\models\Entity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends AbstractController
{

    public function __construct(Contact $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $contacts = $this->model->all();
        return View('backend.contact.index' , compact('contacts'));
    }


    public function add(){
        $entity  = Entity::pluck('name','id');
        return view('backend.contact.add',compact('entity'));

    }

    public function create(ContactRequest $request){
        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('ContactIndex');
    }

    public function edit($id){

        $contact = $this->model->find($id);
        $entity  = Entity::pluck('name','id');
        return view('backend.contact.edit', compact('contact','entity'));
    }

    public function update($id, ContactRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('ContactIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('ContactIndex');
    }

}
