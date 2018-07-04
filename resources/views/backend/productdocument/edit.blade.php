@extends('layout.adminmaster')
@section('title','Edit Product Document')
@section('page_header','Edit Product Document')
@section('page_header_desc','Edit Product Document Here')
@section('curreny_page','Edit Product Document')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            {{ Form::model($product_document, ['route' => ['UpdateProductdoc' , $product_document->id], 'files'=>'true','class' => 'form', 'method' => 'PUT']) }}
            @include('backend.productdocument.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop





