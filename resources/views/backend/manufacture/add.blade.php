@extends('layout.adminmaster')
@section('title',' Add Manufacture')
@section('page_header','Add Manufacture')
@section('page_header_desc','Add Manufacture Here')
@section('curreny_page','Add Manufacture')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            {{ Form::open(['route' => 'CreateManufacture', 'class' => 'form','role' => 'form']) }}
            @include('backend.manufacture.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop


