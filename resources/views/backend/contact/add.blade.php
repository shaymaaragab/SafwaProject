@extends('layout.adminmaster')
@section('title',' Add Contact')
@section('page_header','Add Contact')
@section('page_header_desc','Add Contact Here')
@section('curreny_page','Add Contact')
@section('main-content')

<div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Add Member</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('ContactIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">  
            {{ Form::open(['route' => 'CreateContact', 'class' => 'form', 'role' => 'form' , 'files' => true ]) }}
            @include('backend.contact.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop


