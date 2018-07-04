@extends('layout.adminmaster')
@section('title','Branches')
@section('page_header','Branches')
@section('page_header_desc','Branches Here')
@section('curreny_page','Branches')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Branches</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddBranch')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($branches->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Address In English</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone </th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($branches as $branch)
                            <tr>
                                <td class="text-center">{{ $branch->id }}</td>
                                <td class="text-center">{{ $branch->name_en }}</td>
                                <td class="text-center">{{ $branch->address_en }}</td>
                                <td class="text-center">{{ $branch->email }}</td>
                                <td class="text-center">{{ $branch->phone1 }}</td>
                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditBranch',$branch->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                
                                     <?php $r = $branch->id; ?>

                                    @include('backend.branch.delete')


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
