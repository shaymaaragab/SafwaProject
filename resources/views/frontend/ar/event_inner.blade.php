@extends('layout.master')
@section('title') {{ $event->title_ar }} @endsection
@section('header_arabic')
  @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
  <section style="margin-top: 25%;">
  <div class="events">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="events__post">
            <div class="col-md-6 col-sm-6">
              <div class="events__image">
                <img src="{{ asset($event->img) }}" class="img-responsive" />
              </div>
              
            </div>
              <div class="col-md-6 col-sm-6">
                <div class="events__details">
                  <h2 class="text-left" style="background-color:white">{{ $event->title_ar }}</h2>
                  <p>{!! $event->content_ar !!}</p>
                  <div class="events-place">
                    <div class="events-time">
                      <i class="fa fa-clock-o"></i>
                      <time> {{ date('D-m-Y',strTotime($event->date)) }} | {{ date('i:m:s',strTotime($event->time)) }}</time>
                    </div>
                  </div>
                  <div class="events-place">
                    <div class="events-city">
                      <i class="fa fa-map-marker"></i>
                      <span>{{ $event->location }}</span>
                    </div>
                  </div>
                </div>
              </div>
           </div>
        </div>
      </div>
  </div>
  </section>
  @endsection
  
@section('footer')
 @include('partials.footer_ar')
@endsection