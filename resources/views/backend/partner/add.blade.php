@extends('layout.adminmaster')
@section('title',' Add Partner')
@section('page_header','Add Partner')
@section('page_header_desc','Add Partner Here')
@section('curreny_page','Add Partner')
@section('main-content')
    
     <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Add Partner</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('PartnerIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
            {{ Form::open(['route' => 'CreatePartner', 'class' => 'form', 'role' => 'form' , 'files' => true]) }}
            @include('backend.partner.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop


