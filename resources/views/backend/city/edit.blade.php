@extends('layout.adminmaster')
@section('title','Edit City')
@section('page_header','Edit City')
@section('page_header_desc','Edit City Here')
@section('curreny_page','Edit City')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            {{ Form::model($city, ['route' => ['UpdateCity' , $city->id], 'class' => 'form', 'method' => 'PUT']) }}
            @include('backend.city.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop





