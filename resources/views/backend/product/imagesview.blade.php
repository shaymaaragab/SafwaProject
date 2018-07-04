@extends('layout.adminmaster')
@section('title',' View Product Images')
@section('page_header','View Product Images')
@section('page_header_desc','View Product Images Here')
@section('curreny_page','View Images Product')
@section('main-content')


    <div class="row">
        <div class="col-md-12">

        <div class="pull-right"><a class='btn btn-primary '  href="{{route('images.products',$product->id)}}"><i class="fa fa-plus"></i> Add New Image</a></div>

        </div>
    </div>
    <br>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="thumbnail">

                    <img src="{{asset($image->img)}}" alt="Lights" style="width:100%;height: 200px;">
                    <div class="caption " style="text-align: center">
                        <a class="btn btn-danger" href="{{route('uploadremove',$image->id)}}">Delete</a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>

@stop

