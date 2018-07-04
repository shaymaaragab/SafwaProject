<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\AlbumRequest;
use App\models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends AbstractController
{

    public function __construct(Album $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $album = $this->model->all();
        return View('backend.album.index' , compact('album'));
    }


    public function add(){

        return view('backend.album.add');

    }

    public function create(AlbumRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('AlbumIndex');
    }

    public function edit($id){

        $album = $this->model->find($id);
        return view('backend.album.edit', compact('album'));
    }

    public function update($id, AlbumRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('AlbumIndex');
    }

    public function delete($id){
    	Album::find($id)->Media()->delete();
        $this->deleteIfExists($id);
        return redirect()->route('AlbumIndex');
    }

}
