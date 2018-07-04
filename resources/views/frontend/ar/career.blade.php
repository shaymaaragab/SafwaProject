@extends('layout.master')
@section('title') الوظائف @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
<section style="margin-top: 25%;">
    <div class="careers">

            <div class="row">
                @if(!$jobs->isEmpty())
                    @foreach($jobs as $job)
                <div class="col-md-12">
                <div class='careers__details'>
                    <div class='careers__type'>
                        <div class='careers__head'>
                            <h2 class="text-right">{{$job->title_ar}}</h2>
                                    <i class='fa fa-map-marker'></i>
                                    <span>&nbsp {{$job->location}}</span>
                        </div>
                        <div>
                            <p class="text-center">
                                {!! str_limit($job->content_ar, $limit = 200, $end = '...') !!}
                            </p>
                        </div>
                    </div>
                    <div class='careers__more' style="float:left">
                        <a href="{{route('Careerinner',$job->id)}}">المزيد</a>
                    </div>
                </div>
            </div>
                    @endforeach
                    <br>
            <div style="margin-right: 40%;">

                    {{$jobs->links()}}
        </div>
        <br><br>
        @else
        <br>
        <br>
        <br>
        <h1 class="text-center" style="color: red;"> لايوجد منتجات </h1>
        <br>
        <br>
        <br>
                @endif
            </div>
        </div>
</section>
    @endsection
    
@section('footer')
 @include('partials.footer_ar')
@endsection