@extends('layout.adminmaster')
@section('title',' Add Album')
@section('page_header','Add Album')
@section('page_header_desc','Add Album Here')
@section('curreny_page','Add Album')
@section('main-content')

 <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Add Album</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('AlbumIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
        {{ Form::open(['route' => 'CreateAlbum', 'class' => 'form', 'role' => 'form']) }}
        @include('backend.album.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
        {{ Form::close() }}
        </table>
    </div>
</div>
@stop


