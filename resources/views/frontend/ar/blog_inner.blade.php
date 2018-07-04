@extends('layout.master')
@section('title') الموضوعات @endsection
@section('header_arabic')
    @include('partials.header_ar')
    <meta property="og:image" content="http://ia.media-imdb.com/rock.jpg"/>
<meta property="og:image:secure_url" content="https://secure.example.com/ogp.jpg" />
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
   <section style="margin-top: 17%;">
    @if(!empty($blog))
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img style="width: 90%; height: 400px; border: 1px solid; margin-left: 50px; " class="img-responsive" src="{{asset($blog->img)}}">
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="blog--details">
            <div class="blog--head">
                <h3>{{$blog->title_ar}}</h3>
                <p> {{$blog->created_at->diffForHumans()}}<span></span></p>
                <p>
                    <h1>asdass</h1>
                    {!! $blog->content_ar !!}
                   </p>
            </div>
        </div>
        <div class="blog--share">
            <h5>شارك هذا الموضوع</h5>
            <div class="blog--social">
                <a href="http://www.twitter.com/share?url={{ route('Bloginner',$blog->id) }}"
                   target="_blank">
                    <i class="fa fa-twitter"></i>
                    twitter
                </a>


            </div>
            <div class="blog--social">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('Bloginner',$blog->id) }}"
                   target="_blank">
                    <i class="fa fa-facebook"></i>
                    facebook
                </a>
            </div>
            <div class="blog--social">
                <a href="https://plus.google.com/share?url={{ route('Bloginner',$blog->id) }}"
                   target="_blank">
                    <i class="fa fa-google-plus"></i>
                    google+
                </a>
            </div>
        </div>

    </div>
    <div class="col-md-2"></div>
   </section>
@endif
    @stop
    
@section('footer')
 @include('partials.footer_ar')
@endsection