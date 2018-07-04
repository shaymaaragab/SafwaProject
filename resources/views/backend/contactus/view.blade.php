@extends('layout.adminmaster')
@section('title',' Contact Us')
@section('page_header','Contact Us')
@section('page_header_desc','Contact Us Here')
@section('curreny_page','Contact Us')
@section('main-content')


   <div class="row">
       <div class="container">
           <div class="col-md-1"></div>
           <div class="col-md-10">
               <div class="panel panel-info">
                   <div class="panel-heading">
                       View Contact Us
                   </div>
                   <div class="panel-body">
                       {{--<div class="img" style="padding-left: 20px">--}}
                           {{--<img class="img-rounded" src="{{asset($contactus->img)}}" width="100px" height="100px">--}}
                       {{--</div>--}}
                       <div class="content">
                           <strong>Name :</strong><p>{{$contactus->name}}</p>
                           <strong>Email :</strong><p>{{ $contactus->email}}</p>
                           <strong>phone :</strong><p> {{$contactus->phone}} </p>
                           <strong>Message :</strong><p>{{$contactus->msg}}</p>
                           <strong>Source :</strong>
                          @if($contactus->how == 1)
                          <p>Existing customer</p>
                          @elseif($contactus->how == 2)
                          <p>another customer <br> ({{ $contactus->namehow }})</p>
                          @elseif($contactus->how == 3)
                          <p>Web search</p>
                          @elseif($contactus->how == 4)
                          <p>Flyer</p>
                          @elseif($contactus->how == 5)
                          <p>News</p>
                          @elseif($contactus->how == 6)
                          <p>Exhibition</p>
                          @else
                          <p>-<p>
                          @endif
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-1"></div>
       </div>
   </div>

@stop

