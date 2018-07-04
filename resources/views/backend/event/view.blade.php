@extends('layout.adminmaster')
@section('title',' View Event')
@section('page_header','View Event')
@section('page_header_desc','View Event Here')
@section('curreny_page','View Event')
@section('main-content')


    <div class="row">
        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        View View Details
                    </div>
                    <div class="panel-body">
                        <div class="img" style="padding-left: 20px">
                            <img class="img-rounded" src="{{asset($event->img)}}" width="100px" height="100px">
                        </div>
                        <div class="content">
                            <strong>Title In English :</strong><p>{{ $event->title_en}}</p>
                            <strong>Title In Arabic :</strong><p> {{$event->title_ar}} </p>
                            <strong>Content In English :</strong><p>{!! $event->content_en !!}</p>
                            <strong>Content In Arabic :</strong><p>{!! $event->content_ar !!}</p>
                            <strong>Date :</strong><p>{{$event->date}}</p>
                            <strong>Time :</strong><p>{{$event->time}}</p>
                            <strong>Location :</strong><p>{{$event->location}}</p>
                            <strong>Event Category :</strong><p>{{$event->Event_category->name_en}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@stop
