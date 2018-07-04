@extends('layout.adminmaster')
@section('title',' View Job')
@section('page_header','View Job')
@section('page_header_desc','View Job Here')
@section('curreny_page','View Job')
@section('main-content')


    <div class="row">

        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        View Job Details
                    </div>
                    <div class="panel-body">
                        <div class="content">
                            <strong>Title In English :</strong><p>{{ $job->title_en}}</p>
                            <strong>Title In Arabic :</strong><p> {{$job->title_ar}} </p>
                            <strong>Content In English :</strong><p>{!! $job->content_en !!}</p>
                            <strong>Content In Arabic :</strong><p>{!! $job->content_ar !!}</p>
                            <strong>Location :</strong><p>{!! $job->location !!}</p>
                            <strong>Entity Name :</strong><p>{{$job->Entity->name}}</p>
                            <strong>Event Category :</strong><p>{{ $job->Job_category->name_en }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>


    </div>

@stop