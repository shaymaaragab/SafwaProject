@extends('layout.adminmaster')
@section('title','User')
@section('page_header','User')
@section('page_header_desc','User Here')
@section('curreny_page','User')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">User</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddUser')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($users->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">User Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Mobile</th>
                            <th class="text-center">Job</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">options</th>

                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->name }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->mobile }}</td>
                                <td class="text-center">{{ $user->job }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($user->img) }}" style="width: 50px; height: 50px;"></td>
                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('RestUserPass',$user->id)}}"><i class='fa fa-edit'>Rest password</i></a>

                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditUser',$user->id)}}"><i class='fa fa-edit'>Edit</i></a>

                                    

                                     <?php $r = $user->id; ?>

                                    @include('backend.user.delete')

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
