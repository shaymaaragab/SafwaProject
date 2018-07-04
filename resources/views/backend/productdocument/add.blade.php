@extends('layout.adminmaster')
@section('title',' Add Product Document')
@section('page_header','Add Product Document')
@section('page_header_desc','Add Product Document Here')
@section('curreny_page','Add Product Document')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            {{ Form::open(['route' => ['CreateProductdoc' , $pro_id] , 'files'=>'true', 'class' => 'form', 'role' => 'form']) }}
            @include('backend.productdocument.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop


