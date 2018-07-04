@extends('layout.adminmaster')

@section('title','Products')
@section('page_header','Products')
@section('page_header_desc','Products Here')
@section('curreny_page','Products')

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Products</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddProduct')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($products->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>

                            <th class="text-center">English Name</th>
                            <th class="text-center">Arabic Name</th>
                            <th class="text-center">price</th>
                            <th class="text-center"> Accessories</th>
                            <th class="text-center">Documents</th>
                            <th class="text-center">options</th>
                            <th class="text-center"></th>

                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($products as $product)
                            <tr>

                                <td class="text-center">{{ $product->name_en }}</td>
                                <td class="text-center">{{ $product->name_ar }}</td>
                                <td class="text-center">{{ $product->price }}</td>
                                <td class="text-center"><a href="{{ route('AccessoryIndex', $product->id) }}" class="btn btn-xs btn-warning"><i class="fa fa-file-image-o"> Accessories</i></a></td>
                                <td class="text-center">

                                <a href="{{ route('ProductdocIndex', $product->id) }}" class="btn btn-xs btn-primary"><i class="fa fa-file-pdf-o"></i> Documents</a>
                                    
                                </td>

                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('ViewProduct',$product->id)}}"><i class='fa fa-eye'>View</i></a>
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditProduct',$product->id)}}"><i class='fa fa-edit'>Edit</i></a>

                                   
                                     <?php $r = $product->id; ?>


                                    @include('backend.product.delete')


                                </td>
                                <th>
                                    <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('images.view',$product->id)}}"><i class='fa fa-eye'>View Images</i></a>

                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('images.products',$product->id)}}"><i class='fa fa-edit'>Add Images</i></a>

                                </th>
                            </tr>
                        @endforeach

                        </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
@endsection
