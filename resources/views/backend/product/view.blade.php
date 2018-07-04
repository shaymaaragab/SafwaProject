@extends('layout.adminmaster')
@section('title',' View Product')
@section('page_header','View Product')
@section('page_header_desc','View Product Here')
@section('curreny_page','View Product')
@section('main-content')


    <div class="row">

        <div class="container">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        View Product Details
                    </div>
                    <div class="panel-body">
                        <div class="content">
                            <div class="row">
                                <div class="form-group has-float-label col-sm-6">
                                    <strong>Name In English :</strong><p>{{ $product->name_en}}</p>
                                    <strong>Name In Arabic :</strong><p> {{$product->name_ar}} </p>
                                    <strong>Short Content In Arabic :</strong><p> {{$product->shortcontent_ar}} </p>
                                    <strong>Short Content In Arabic :</strong><p> {{$product->shortcontent_ar}} </p>
                                    <strong>Full Content In English :</strong><p>{!! $product->fullcontent_en !!}</p>
                                    <strong>Full Content In Arabic :</strong><p>{!! $product->fullcontent_ar !!}</p>
                                    <strong>Price :</strong><p> {{$product->price}} </p>

                                </div>
                                <div class="form-group has-float-label col-sm-6">
                                    <strong>Model In English :</strong><p> {{$product->model_en}} </p>
                                    <strong>Model In Arabic :</strong><p> {{$product->model_ar}} </p>
                                    <strong>Manufacture :</strong><p> {{$product->Manufacturer->name_en}} </p>
                                    <strong>Currency :</strong><p> {{$product->Currency->currency}} </p>
                                    <strong>Product Category :</strong><p> {{$product->Product_category->name_en}} </p>
                                </div>
                            </div>
                            <div class="row" style="text-align: center">
                                <strong>Video :</strong><p> {!! $product->video!!} </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>

    </div>


@stop