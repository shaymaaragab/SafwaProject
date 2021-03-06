@extends('layout.master')
@section('title') Events @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
  <section style="margin-top: 25%">

                <div class="events">
                        <div class="row">
                          <h1 class="text-center"></h1>
                           @if($events->count() > 0)
                            <div class="col-md-12 col-sm-12">
                                @foreach($events as $event)
                                <div class='events__items'>
                                    <div class='events__date'>
                                        <data>{{date('d',strtotime($event->date))}}-{{date('M',strtotime($event->date))}}-{{date('Y',strtotime($event->date))}}</data>
                                    </div>
                                    <div class='events__type'>
                                        <h4 >{{$event->title_en}}</h4>
                                        <p>
                                            {!!  str_limit($event->content_en, $limit = 200, $end = '...') !!}
                                        </p>
                                        <div class='events-place'>
                                            <div class='events-time'>
                                                <i class='fa fa-clock-o'></i>
                                                <time>{{$event->time}}</time>
                                            </div>
                                            <div class='events-city'>
                                                <i class='fa fa-map-marker'></i>
                                                <span>{{$event->location}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='events-link'>
                                        <a href="{{ route('Eventinner',$event->id)}}">Details</a>
                                    </div>
                                </div>
                                    @endforeach
                                  <div style="margin-left: 40%;">

                                   {{$events->links()}}
                                   </div>
                            </div>
                           @else
                            <br>
                            <br>
                            <br>
                            <h1 class="text-center" style="color: red;"> No Events </h1>
                            <br>
                            <br>
                            <br>
                           @endif
                        </div>
                        
                    </div>

</section>
@stop
@section('footer')
 @include('partials.footer_en')
@endsection