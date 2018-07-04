@extends('layout.adminmaster')
@section('title','Teams')
@section('page_header','Teams')
@section('page_header_desc','Teams Here')
@section('curreny_page','Teams')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Teams</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddTeams')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($teams->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Name In Arabic</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($teams as $team)
                            <tr>
                                <td class="text-center">{{ $team->id }}</td>
                                <td class="text-center">{{ $team->name_en }}</td>
                                <td class="text-center">{{ $team->name_ar }}</td>
                                <td class="text-center">{{ $team->email }}</td>


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditTeams',$team->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    
                                     <?php $r = $team->id; ?>

                                    @include('backend.team.delete')


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
