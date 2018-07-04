@extends('layout.adminmaster')
@section('title','Edit Media')
@section('page_header','Edit Media')
@section('page_header_desc','Edit Media Here')
@section('curreny_page','Edit Media')
@section('main-content')
    <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit Media</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('MediaIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
            {{ Form::model($media, ['route' => ['UpdateMedia' , $media->id], 'class' => 'form', 'method' => 'PUT' , 'files' => true ]) }}

            @include('backend.media.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop





