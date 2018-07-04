@extends('layout.master')
@section('title') About Us @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
    <section style= "margin-top: 25%">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <img src="{{asset('assets/img/Pic About US ASM (3).png')}}" width="50px" height="50px" class="img-circle" style="height: 300px; width: 100%;">
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="{{asset('assets/img/Pic About US ASM (1).jpg')}}" class="img-rounded" style="height: 300px; width: 100%;">
            </div>
            <div class="col-md-3 col-sm-3">
                <img src="{{asset('assets/img/Pic About US ASM (2).jpg')}}" class="img-circle" style="height: 300px; width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="margin-top: 3%;">

                {!!   $aboutus->content_en !!}

            </div>
        </div>

        @include('frontend.en.contactForm')
    </section>
    @endsection
    @section('footer')
 @include('partials.footer_en')
@endsection