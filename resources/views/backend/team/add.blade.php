@extends('layout.adminmaster')
@section('title',' Add Team')
@section('page_header','Add Team')
@section('page_header_desc','Add Team Here')
@section('curreny_page','Add Team')
@section('main-content')

<div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Add Team</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('TeamsIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search"> 
        {{ Form::open(['route' => 'CreateTeams', 'class' => 'form', 'role' => 'form']) }}
        @include('backend.team.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
        {{ Form::close() }}
        </table>
    </div>
</div>
@stop


