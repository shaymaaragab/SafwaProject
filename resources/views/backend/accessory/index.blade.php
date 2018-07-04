@extends('layout.adminmaster')
@section('title','Accessory')
@section('page_header','Accessory')
@section('page_header_desc','Accessory Here')
@section('curreny_page','Accessory')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Accessory</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddAccessory',$pro_id)}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($accessories->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">English Name</th>
                            <th class="text-center">Arabic Name</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">Image</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($accessories as $accessoy)
                            <tr>
                                <td class="text-center">{{ $accessoy->id }}</td>
                                <td class="text-center">{{ $accessoy->name_en }}</td>
                                <td class="text-center">{{ $accessoy->name_ar }}</td>
                                <td class="text-center">{{ $accessoy->Product->name_en }}</td>
                                <td class="text-center"><img alt="" src="{{asset($accessoy->img)}}" width="50px" height="50px"></td>



                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditAccessory',$accessoy->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    
                                    <?php $r = $accessoy->id; ?>

                                    @include('backend.accessory.delete')

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
