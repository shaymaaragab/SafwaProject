@extends('layout.adminmaster')
@section('title','Product Document')
@section('page_header','Product Document')
@section('page_header_desc','Product Document Here')
@section('curreny_page','Product Document')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Product Document</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddProductdoc',$pro_id)}}"><i class="fa fa-plus"></i> add new</a>
                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($documents->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">English Name</th>
                            <th class="text-center">Arabic Name</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">File</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($documents as $document)
                            <tr>
                                <td class="text-center">{{ $document->id }}</td>
                                <td class="text-center">{{ $document->name_en }}</td>
                                <td class="text-center">{{ $document->name_ar }}</td>
                                <td class="text-center">{{ $document->Product->name_en }}</td>
                                <td class="text-center"><a href="{{url('/').$document->img}}" download><i class="fa fa-download"></i></a></td>



                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditProductdoc',$document->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                   

                                     <?php $r = $document->id; ?>

                                    @include('backend.productdocument.delete')


                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
@endsection
