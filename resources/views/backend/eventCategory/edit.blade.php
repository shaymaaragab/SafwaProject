@extends('layout.adminmaster')
@section('title','Edit Event Category')
@section('page_header','Edit Event Category')
@section('page_header_desc','Edit Event Category Here')
@section('curreny_page','Edit Event Category')
@section('main-content')
 <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit Event category</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('EventcategoryIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
            {{ Form::model($eventCategory, ['route' => ['UpdateEventCat' , $eventCategory->id], 'class' => 'form', 'method' => 'PUT']) }}
            @include('backend.eventCategory.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop





