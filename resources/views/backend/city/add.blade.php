@extends('layout.adminmaster')
@section('title',' Add City')
@section('page_header','Add City')
@section('page_header_desc','Add City Here')
@section('curreny_page','Add City')
@section('main-content')


    <div class="page-content">
        <div class="col-md-12">
            {{ Form::open(['route' => 'CreateCity', 'class' => 'form', 'role' => 'form']) }}
            @include('backend.city.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop


