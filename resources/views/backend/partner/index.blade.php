@extends('layout.adminmaster')
@section('title','Partners')
@section('page_header','Partners')
@section('page_header_desc','Partners Here')
@section('curreny_page','Partners')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Partners</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddPartner')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($partners->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">Logo</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($partners as $partner)
                            <tr>
                                <td class="text-center">{{ $partner->id }}</td>
                                <td class="text-center">{{ $partner->name_en }}</td>
                                <td class="text-center">{{ $partner->name_ar }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($partner->img) }}" style="width: 50px; height: 50px;"></td>
                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditPartner',$partner->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                   
                                     <?php $r = $partner->id; ?>

                                    @include('backend.partner.delete')

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
