@extends('layout.adminmaster')
@section('title','Edit Accessory')
@section('page_header','Edit Accessory')
@section('page_header_desc','Edit Accessory Here')
@section('curreny_page','Edit Accessory')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            {{ Form::model($accessory, ['route' => ['UpdateAccessory' , $accessory->id], 'files'=>'true','class' => 'form', 'method' => 'PUT']) }}
            @include('backend.accessory.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop





