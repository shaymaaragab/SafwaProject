@extends('layout.adminmaster')
@section('title',' View Manufacturer')
@section('page_header','View Manufacturer')
@section('page_header_desc','View Manufacturer Here')
@section('curreny_page','View Manufacturer')
@section('main-content')


    <div class="row">

        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        View Manufacture Details
                    </div>
                    <div class="panel-body">
                        <div class="img" style="padding-left: 20px">
                            <img class="img-rounded" src="{{asset($manufacture->img)}}" width="100px" height="100px">
                        </div>
                        <div class="content">
                            <strong>Name In English :</strong><p>{{ $manufacture->name_en}}</p>
                            <strong>Name In Arabic :</strong><p> {{$manufacture->name_ar}} </p>
                            <strong>Content In English :</strong><p>{!! $manufacture->content_en !!}</p>
                            <strong>Content In Arabic :</strong><p>{!! $manufacture->content_ar !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>

@stop

