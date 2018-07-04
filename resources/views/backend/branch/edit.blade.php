@extends('layout.adminmaster')
@section('title','Edit Branch')
@section('page_header','Edit Branch')
@section('page_header_desc','Edit Branch Here')
@section('curreny_page','Edit Branch')
@section('main-content')
<div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit Member</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('BranchIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search"> 
            {{ Form::model($branch, ['route' => ['UpdateBranch' , $branch->id], 'class' => 'form', 'method' => 'PUT']) }}
            @include('backend.branch.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop





