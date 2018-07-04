@extends('layout.adminmaster')
@section('title','Cities')
@section('page_header','Cities')
@section('page_header_desc','Cities Here')
@section('curreny_page','Cities')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Cities</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddCity')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($cities->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Name In Arabic</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($cities as $city)
                            <tr>
                                <td class="text-center">{{ $city->id }}</td>
                                <td class="text-center">{{ $city->name_en }}</td>
                                <td class="text-center">{{ $city->name_ar }}</td>


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditCity',$city->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    <a type='button' class='btn btn-danger btn-xs' href="{{route('DeleteCity',$city->id)}}"> Delete </a>

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
