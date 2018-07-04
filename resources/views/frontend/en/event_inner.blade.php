@extends('layout.master')
@section('title') Event @endsection
@section('header_english')
  @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
  <section style="margin-top: 20%;">
  <div class="events">
    <div class="row">
        <div class="col-md-12 col-sm-12">
      
          <div class="events__post">
            <div class="col-md-6 col-sm-6" >
              <div class="events__image">
                <img src="{{ asset($event->img) }}" class="img-responsive"  />
                <br>
              </div>
               <br>
             </div>


              <div class="col-md-6 col-sm-6">
                <div class="events__details">
                  <h2 class="text-left" style="background-color:white">{{ $event->title_en }}</h2>
                  <p>{!! $event->content_en !!}</p>
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
 @include('partials.footer_en')
@endsection