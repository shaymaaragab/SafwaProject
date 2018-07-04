<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\EventcategoryRequest;
use App\Http\Requests\EventRequest;
use App\models\Event;
use App\models\Event_category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends AbstractController
{
    public function __construct(Event $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $events = $this->model->all();
        return View('backend.event.index' , compact('events'));
    }


    public function add(){

        $eventCategory = $this->getEventCategory();
        return view('backend.event.add',compact('eventCategory'));

    }

    public function create(EventRequest $request){
//	    Carbon::
	    //$request['date'] = Carbon::createFromFormat('Y/m/d', $request['date']);
		//$request['date']=date('Y-m-d',Carbon::$request['date']);
	    //dd($request->all());

	    $this->addOrUpdate(null  , $request->all());
        return redirect()->route('EventIndexes');
    }

    public function edit($id){

        $event = $this->model->find($id);
        $eventCategory = $this->getEventCategory();
        return view('backend.event.edit', compact('event','eventCategory'));
    }

    public function update($id, EventRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('EventIndexes');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('EventIndexes');
    }

    public function view($id){

        $event = $this->model->find($id);
        return view('backend.event.view', compact('event'));

    }

    public function getEventCategory(){

        $eventCats = Event_category::all();

        $allEventCat = [];

        foreach ($eventCats as $eventCat){

            $allEventCat[$eventCat->id]= $eventCat['name_en'];
        }
        return $allEventCat;
    }

}
