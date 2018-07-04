@extends('layout.master')
@section('title') Career @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
<section style="margin-top: 25%;">
    <div class="careers">
                @if(!$jobs->isEmpty())
                    @foreach($jobs as $job)
                <div class="col-md-12">
                <div class='careers__details'>
                    <div class='careers__type'>
                        <div class='careers__head'>
                            <h2 class="text-left">{{$job->title_en}}</h2>
                            <i class='fa fa-map-marker'> </i>
                                                <span> &nbsp {{ $job->location }} </span>
                        </div>
                        <p class="text-center">
                            {!! str_limit($job->content_en, $limit = 200, $end = '...') !!}
                        </p>
                    </div>
                    <div class='careers__more'>
                        <a href="{{route('Careerinner',$job->id)}}">more</a>
                    </div>
                </div>


            </div>

                    @endforeach
                    <br>
            <div style="margin-left: 40%;">
                    {{$jobs->links()}}
        </div>
        <br><br>
        @else
        <br>
        <br>
        <br>
        <h1 class="text-center" style="color: red;"> No Jobs </h1>
        <br>
        <br>
        <br>
                @endif
            </div>
</section>
    @endsection
    @section('footer')
        @include('partials.footer_en')
    @endsection