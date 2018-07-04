@extends('layout.adminmaster')
@section('title','Edit Album')
@section('page_header','Edit Album')
@section('page_header_desc','Edit Album Here')
@section('curreny_page','Edit Album')
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
        {{ Form::model($album, ['route' => ['UpdateAlbum' , $album->id], 'class' => 'form', 'method' => 'PUT']) }}
        @include('backend.album.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
        {{ Form::close() }}
        </table>
    </div>
</div>
@stop





