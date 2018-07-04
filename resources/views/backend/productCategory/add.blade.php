@extends('layout.adminmaster')
@section('title',' Add Product Category')
@section('page_header','Add Product Category')
@section('page_header_desc','Add Product Category Here')
@section('curreny_page',$catChain)
@section('main-content')

      <div class="page-content">
        <div class="col-md-12">
        <?php
        if($parentId == null){$parentId = 0;}
        ?>
            {{ Form::open(['route' => 'CreateProductcategory','files'=>'true', 'method' => 'post' , 'class' => 'form', 'role' => 'form']) }}
            <input type="hidden" name="parent_id" value="{{ $parentId }}">
            @include('backend.productCategory.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
@stop


