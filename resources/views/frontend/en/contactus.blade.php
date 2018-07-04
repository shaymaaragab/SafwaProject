@extends('layout.master')
@section('title') Contactus @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
<section style="margin-top: 12%;">
    <div id="contact">
      <div class="contacts">
        <h2>contact us</h2>
          <div class="row">
                <div class='col-md-12 col-sm-12'>
                        <div class="contacts__gallary">
                          @if($contacts->count() > 0)
                          @foreach($contacts as $temmember)
                            <div class='contacts__item'>
                                <div style="width: 200px;">
                                    <div style="background-image: url({{ asset($temmember->img)  }}); width: 200px;height: 155px;background-size: cover;">
                                        <img style="width: 306px;position:relative;top: -73px;left: -53px;" src="{{asset('assets/img/puzzelll.png')}}">
                                    </div>
                                </div>
                                <h4>{{ $temmember->name_en }}</h4>
                                <p>{{ $temmember->position_en }}</p>
                                <div class='contacts--social'>
                                    <a href='tel:{{ $temmember->phone }}'>
                                        <i class='fa fa-mobile'></i>
                                    </a>

                                    <a href='mailto:{{ $temmember->email }}'>
                                        <i class='fa fa-envelope-o'></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        
                        </div>
                    </div>
              <div >
              <h2>Our Offices Locations</h2>
              <div class="contacts__maps">
             @if(isset($branches))
             @foreach($branches as $branch)
                <div class="col-md-4">
                 <div class='contacts__details map'>   
                    <div class='contacts-address'>
                      <div class='contacts-type'>
                        <h3>{{ $branch->name_en }}</h3>
                      </div>
                    </div>
                    <div class='contacts-address'>
                      <div class='contacts-type'>
                        <h6>address</h6>
                        <p>{{ $branch->address_en }}</p>
                      </div>
                    </div>
                    <div class='contacts-address'>
                      <div class='contacts-type'>  
                        <h6>phones</h6>
                        @if($branch->phone1 !="")
                        <p>Phone 1 : <a href='tel:{{ $branch->phone1 }}'>{{ $branch->phone1 }}</a></p>
                        @elseif($branch->phone2 !="")
                        <p>Phone 2 : <a href='tel:{{ $branch->phone2 }}'>{{ $branch->phone2 }}</a></p>
                        @elseif($branch->phone3 !="")
                        <p>Phone 3 : <a href='tel:{{ $branch->phone3 }}'>{{ $branch->phone3 }}</a></p>
                        @elseif($branch->phone4 !="")
                        <p>Phone 4 : <a href='tel:{{ $branch->phone1 }}'>{{ $branch->phone4 }}</a></p>
                        @endif
                      </div>  
                    </div>
                    <div class='contacts-address'>
                      <div class='contacts-type'>
                        <h6>contacts</h6>
                        <p><a href='mailto:info@{{ $branch->email }}'>{{ $branch->email }}</a></p>
                      </div>
                    </div>
                    <div style=" height: 400px;">{!! $branch['map'] !!}</div>
                  </div>
                </div>
                @endforeach
             @endif        
              </div>
            </div>
        @include('frontend.en.contactForm')
    </div>
      </div>
    </div>
  </section>
@endsection
@section('footer')
 @include('partials.footer_en')
@endsection