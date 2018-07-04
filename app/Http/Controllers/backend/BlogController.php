<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\BlogRequest;
use App\models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends AbstractController
{

    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }

    public function index(){
//dd();
        $blogs = $this->model->all();
        return View('backend.blog.index' , compact('blogs'));
    }


    public function add(){

        return view('backend.blog.add');

    }

    public function create(BlogRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('BlogIndex');
    }

    public function edit($id){

        $blog = $this->model->find($id);
        return view('backend.blog.edit', compact('blog'));
    }

    public function update($id, BlogRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('BlogIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('BlogIndex');
    }

    public function view($id){

        $blog = $this->model->find($id);
        return view('backend.blog.view', compact('blog'));

    }
}
