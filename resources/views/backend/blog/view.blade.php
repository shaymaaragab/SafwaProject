@extends('layout.adminmaster')
@section('title',' View Blog')
@section('page_header','View Blog')
@section('page_header_desc','View Blog Here')
@section('curreny_page','View Blog')
@section('main-content')


   <div class="row">
       <div class="container">
           <div class="col-md-1"></div>
           <div class="col-md-10">
               <div class="panel panel-info">
                   <div class="panel-heading">
                       View Blog Details
                   </div>
                   <div class="panel-body">
                       <div class="img" style="padding-left: 20px">
                           <img class="img-rounded" src="{{asset($blog->img)}}" width="100px" height="100px">
                       </div>
                       <div class="content">
                           <strong>User Name :</strong><p>{{auth()->user()->name}}</p>
                           <strong>Title In English :</strong><p>{{ $blog->title_en}}</p>
                           <strong>Title In Arabic :</strong><p> {{$blog->title_ar}} </p>
                           <strong>Content In English :</strong><p>{!! $blog->content_en !!}</p>
                           <strong>Content In Arabic :</strong><p>{!! $blog->content_ar !!}</p>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-1"></div>
       </div>
   </div>

@stop

