@extends('layout.adminmaster')
@section('title','Edit Service')
@section('page_header','Edit Service')
@section('page_header_desc','Edit Service Here')
@section('curreny_page','Edit Service')
@section('main-content')
 <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit Content</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('ServiceIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
            {{ Form::model($service, ['route' => ['UpdateService' , $service->id], 'class' => 'form', 'method' => 'PUT']) }}
            @include('backend.service.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop





