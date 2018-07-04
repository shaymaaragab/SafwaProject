@extends('layout.adminmaster')
@section('title','Edit Product Category')
@section('page_header','Edit Product Category')
@section('page_header_desc','Edit Product Category Here')
@section('curreny_page','Edit Product Category')
@section('main-content')

    <div class="page-content">
        <div class="col-md-12">
            {{ Form::model($productCategory, ['route' => ['UpdateProductcategory' , $productCategory->id], 'class' => 'form', 'files' => true ,'method' => 'PUT']) }}
            @include('backend.productCategory.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
        </div>
    </div>
    <script type="text/javascript">
    	
        function getCategoryOrder(id) {

        $.ajax({
                type: "POST",
                url:  '{{route('getOrderLimit')}}',
                data: {_token:'{{csrf_token()}}',id: id },
                success: function(data)
                {
                	alert(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    alert("some error");
                }
            });


    }
    </script>
@stop

