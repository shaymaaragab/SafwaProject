@extends('layout.adminmaster')
@section('title','Manufacturer')
@section('page_header','Manufacturer')
@section('page_header_desc','Manufacturer Here')
@section('curreny_page','Manufacturer')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Manufactures</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddManufacturer')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($manufacturers->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Name In Arabic</th>
                            <th class="text-center">Logo</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($manufacturers as $Manufacture)
                            <tr>
                            <?php
                            $r =  $Manufacture->id;

                            ?>
                                <td class="text-center">{{ $Manufacture->id }}</td>
                                <td class="text-center">{{ $Manufacture->name_en }}</td>
                                <td class="text-center">{{ $Manufacture->name_ar }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($Manufacture->img) }}" style="width: 50px; height: 50px;"></td>

                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('ViewManufacturer',$Manufacture->id)}}"><i class='fa fa-eye'>View</i></a>
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditManufacturer',$Manufacture->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    @include('backend.manufacturer.delete')
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
