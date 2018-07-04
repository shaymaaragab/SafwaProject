@extends('layout.master')
@section('title') من نحن @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
    <section style="margin-top: 25%;">
        <div class="row" style="margin-top: 10%">
            <div class="col-md-3 col-sm-3">
                <img src="{{asset('assets/img/Pic About US ASM (2).jpg')}}" class="img-circle" style="height: 300px; width: 100%;">
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="{{asset('assets/img/Pic About US ASM (1).jpg')}}" class="img-rounded" style="height: 300px; width: 100%;">
            </div>
            <div class="col-md-3 col-sm-3">
                <img src="{{asset('assets/img/Pic About US ASM (3).png')}}" class="img-circle" style="height: 300px; width: 100%;">
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12" style="margin-top: 3%;">
               {!!   $aboutus->content_ar !!}
            </div>
        </div>
    @include('frontend.ar.contactForm')
    </section>
      @endsection

      
@section('footer')
 @include('partials.footer_ar')
@endsection