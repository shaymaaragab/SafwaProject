<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\AbstractController;
use App\models\Album;
use Illuminate\Http\Request;

class MediaController extends AbstractController
{
    public function __construct(Album $model)
    {
        parent::__construct($model);
    }


    public function index(){
        $lang=\Request::segment(1);
        $albums = $this->model->paginate('6');
        return view('frontend.'.$lang.'.media',compact('albums'));
}
}
