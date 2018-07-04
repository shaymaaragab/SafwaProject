<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\AbstractController;
use App\models\Media;
use App\models\Album;
use Illuminate\Http\Request;
class MediaGalleryController extends AbstractController
{
    public function __construct(Media $model)
    {
        parent::__construct($model);
    }


    public function index($id){
        $lang=\Request::segment(1);
        $videos     = $this->model->where('album_id',$id)
        ->where('flag',1)
        ->get();
        $images     = $this->model->where('album_id',$id)
        ->where('flag',0)
        ->get();
        $albumname = Album::find($id);
        return view('frontend.'.$lang.'.mediaGallery',compact('albumname','videos','images'));

    }
}
