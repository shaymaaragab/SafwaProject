@extends('layout.adminmaster')
@section('title','Edit User')
@section('page_header','Edit User')
@section('page_header_desc','Edit User Here')
@section('curreny_page','Edit User')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit User</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;" class="btn btn-primary btn-xs" href="{{route('UserIndex')}}"><i
                                    class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">

                    {{ Form::model($user, ['route' => ['UpdateUser' , $user->id], 'class' => 'form', 'method' => 'PUT' , 'files' => true ]) }}
                    @include('backend.user.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
                    {{ Form::close() }}

                </table>
            </div>
        </div>
@stop





