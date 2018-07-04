@extends('layout.adminmaster')
@section('title') Users Management @endsection
@section('page_header') Users Management @endsection
@section('page_header_desc') Users Management Here @endsection
@section('curreny_page') Users Management @endsection
@section('main-content')

<div id="formModal" class="modal fade" role="dialog" table="users">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center" style="font-weight: bold;">Add New User</h4>
    </div>
    <form action="savenewuser" method="post" enctype="multipart/form-data">
         {!! csrf_field() !!}
 
    <div class="modal-body">
        <div id="loading" style="display: none;" class="alert alert-warning text-center">  Wait Please .... <i class="fa fa-spinner fa-spin"></i></div>
        <div id="success" style="display: none;" class="alert alert-success text-center">  &nbsp; Success process . <i class="fa fa-check"></i></div>
        <div id="error" style="display: none;" class="alert alert-danger text-center">  &nbsp; Fail process. <i class="fa fa-times"></i></div>
        <div id="formBody">
            <div class="form-group">
                <h4>User name</h4>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <h4>User Email</h4>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <h4>Phone Number</h4>
                <input type="text" name="mobile" class="form-control" >
            </div>

            <input type="hidden" name="type" value="1">

             <div class="form-group">
                <h4>Job</h4>
                <input type="text" name="job" class="form-control">
            </div>

            <div class="form-group">
                <h4>Image</h4>
                <span style="color: red;">(size: 45 * 45 , Type: jpeg , jpg , png)</span>
                <input type="file" name="logo" class="form-control">
            </div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
    </div>
    </form>
</div>

</div>
</div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Users List</h5>
                    <div class="ibox-tools pull-right">
                        
                        <button style="margin-left: 5px;" data-toggle="modal" data-target="#formModal" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add New</button>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="box-body table-responsive no-padding">
                      
                  <table class="table table-hover" id="unittable_search">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">User Name</th>
                            <th class="text-center">mobile</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">job</th>

                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody id="list">
                    <?php $m = 1 ;?>
                    @foreach($users as $r)
                     <tr>
                     <td class="text-center">{{ $m }}</td>
                     <td class="text-center">{{ $r['name'] }}</td>
                     <td class="text-center">{{ $r['mobile'] }}</td>
                     <td class="text-center">{{ $r['email'] }}</td>
                     <td class="text-center"><img src="{{ url('/')}}/{{$r['logo'] }}" style="width: 50px; height: 50px;"></td>
                     <td class="text-center">{{ $r['job'] }}</td>
                     <td class="text-center">
                     	@include('backend.user_con.deleteConfirmation')
                     </td>

                    <?php $m = $m + 1 ;?>

                     </tr>
                    @endforeach
                        
                     </tbody>
            </table>
            
        </div>

    </div>
</div>
</div>
</div>


@endsection