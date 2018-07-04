<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\MediaRequest;
use App\models\Media;
use App\models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends AbstractController
{

    public function __construct(Media $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $medias = $this->model->all();
        return View('backend.media.index' , compact('medias'));
    }


    public function add(){

        $album = Album::pluck('name_en','id');
        return view('backend.media.add' , compact('album'));

    }


    public function create(MediaRequest $request){
	    $input=$request->all();
    	if($input['flag']!=1)
	    {
		    $input['src']=$this->uploadimage($input['img']);
		    unset($input['img']);
	    }
	    Media::create($input);
//        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('MediaIndex');
    }
	public function uploadimage($file){
		$extention = $file->getClientOriginalExtension();
		$md5       = MD5($file->getClientOriginalName());
		$filename  = date('D-M-Y')."_".$md5.".".$extention;
		$path      = public_path('uploads/');

		$file->move($path , $filename);

		return '/uploads/'.$filename;
	}

    public function edit($id){

        $media = $this->model->find($id);
        $album = Album::pluck('name_en','id');

        return view('backend.media.edit', compact('media','album'));
    }

    public function update($id, MediaRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('MediaIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('MediaIndex');
    }

}
