<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\AbstractController;
use App\models\Event;
use Illuminate\Http\Request;

class EventController extends AbstractController
{
    public function __construct(Event $model)
    {
        parent::__construct($model);
    }


    public function index(){
        $lang=\Request::segment(1);
        $events = $this->model->orderBy('date','desc')->paginate(3);
        return view('frontend.'.$lang.'.event',compact('events'));
        
    }

    public function innerevent($id){
        $lang=\Request::segment(1);
        $event = Event::where('id','=',$id)->get()->first();
        return view('frontend.'.$lang.'.event_inner',compact('event'));
    }


}
