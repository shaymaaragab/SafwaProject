@extends('layout.adminmaster')
@section('title','Edit Partner')
@section('page_header','Edit Partner')
@section('page_header_desc','Edit Partner Here')
@section('curreny_page','Edit Partner')
@section('main-content')

 <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit Partner</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('PartnerIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">

            {{ Form::model($partner, ['route' => ['UpdatePartner' , $partner->id], 'class' => 'form', 'method' => 'PUT' , 'files' => true ]) }}
            @include('backend.partner.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop





