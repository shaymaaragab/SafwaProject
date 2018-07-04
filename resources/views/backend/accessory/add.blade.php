@extends('layout.adminmaster')
@section('title',' Add Accessory')
@section('page_header','Add Accessory')
@section('page_header_desc','Add Accessory Here')
@section('curreny_page','Add Accessory')
@section('main-content')


    <div class="page-content">
        <div class="col-md-12">
            {{ Form::open(['route' => 'CreateAccessory','files'=>'true', 'class' => 'form', 'role' => 'form']) }}
            @include('backend.accessory.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop


