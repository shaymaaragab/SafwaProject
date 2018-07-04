<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\AbstractController;
use App\models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends AbstractController
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }
    public function index()
    {
        
        $lang=\Request::segment(1);
        $blogs=Blog::paginate(5);
        return view('frontend.'.$lang.'.blog',compact('blogs'));
    }
    public function view($id)
    {
        $lang=\Request::segment(1);
        $blog=Blog::find($id);
        return view('frontend.'.$lang.'.blog_inner',compact('blog'));

    }
}
