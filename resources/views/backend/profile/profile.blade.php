@extends('layout.adminmaster')

@section('title','Change Password')
@section('page_header','Change Password')
@section('page_header_desc','Change Password')
@section('curreny_page','Change Password')

@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <form action="{{route('changepassword')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group has-float-label col-sm-12">
                        <label for="password">Password <span class="asterisk">*</span></label>
                        <input name="password" type="password" value="{{old('password')}}" placeholder="Enter Password" class ='form-control'>
                       <small class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</small>
                    </div>
                    <div class="form-group col-sm-12 submit">
                        <input type="submit" class="btn btn-primary" value="Change" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
