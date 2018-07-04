@extends('layout.master')
@section('title') الميديا @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('node_modules/blueimp-gallery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('node_modules/blueimp-gallery-indicator.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('node_modules/blueimp-gallery-video.css')}}">
@stop
@section('content')
    <section style="margin-top: 15%;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product__title text-center">
                            <h1 class="label-safwa">{{ $albumname->name_ar }}</h1>
                        </div>
                    </div>
                </div>
                @if($videos->count() > 0)
                <!--Start  Gallary section -->
                <h2 class="text-center">الفيديو</h2>
                <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
                <div id="blueimp-video-carousel" class="blueimp-gallery blueimp-gallery-controls blueimp-gallery-carousel">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="play-pause"></a>
                </div>
                @endif
                <br>
                @if($images->count() > 0)
                <div class="text-center">
                    <h2>الصور</h2>
                    <!-- The container for the list of example images -->
                    <div id="links" class="links">
                    <div class="col-sm-12">
                     <div class="row">
                        @foreach($images as $img)
                        <div class="col-sm-6" >
                        <a data-gallery="" title="Up" href="{{asset($img->src)}}">
                            <img style="height: 100%; width:100%;" src="{{asset($img->src)}}">
                        </a>
                        </div>
                            @endforeach
                            </div>
                    </div>

                    </div>
                    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
                    <div id="blueimp-gallery" class="blueimp-gallery">
                        <div class="slides"></div>
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                    </div>
                </div>
                @endif
                <!-- End Gallary Section -->
    </section>
    @stop

@section('scripts')

    <script src="{{asset('node_modules/js/blueimp-helper.js')}}"></script>
    <script src="{{asset('node_modules/js/blueimp-gallery.js')}}"></script>
    <script src="{{asset('node_modules/js/blueimp-gallery-fullscreen.js')}}"></script>
    <script src="{{asset('node_modules/js/blueimp-gallery-indicator.js')}}"></script>
    <script src="{{asset('node_modules/js/blueimp-gallery-video.js')}}"></script>
    <script src="{{asset('node_modules/js/blueimp-gallery-vimeo.js')}}"></script>
    <script src="{{asset('node_modules/js/blueimp-gallery-youtube.js')}}"></script>
    <script src="{{asset('node_modules/js/jquery.blueimp-gallery.js')}}"></script>
    <script>
        blueimp.Gallery([], {
            container: '#blueimp-image-carousel',
            carousel: true
        })

        blueimp.Gallery([
            <?php if($videos->count() > 0){ ?>
            @foreach($videos as $video)
                <?php
                  if(strpos($video->src, '?v=')){
                  $videoname = explode('?v=',$video->src);
                  }elseif(strpos($video->src , 'embed/')){
                  $videoname = explode('embed/',$video->src);
                  }
                ?>
                {
                title: "{{ $video->title_ar }}",
                href: "{{ $video->src }}",
                type: 'text/html',
                youtube: "{{ $videoname[1] }}",
                poster: 'https://img.youtube.com/vi/{{ $videoname[1] }}/0.jpg'
                    },
                    
            @endforeach
            <?php } ?>

            
            ], {
            container: '#blueimp-video-carousel',
            carousel: true
        });

         $("body:last-child .blueimp-gallery > .slides > .slide > .video-content:not(.video-loading) > a")
         .css('background-image','url("{{asset("assets/img/play.png")}}")');
        
        $("body:last-child .blueimp-gallery > .slides > .slide > .video-content:not(.video-loading) > a")
         .css('background-size','cover');


    </script>
    @endsection

    
@section('footer')
 @include('partials.footer_ar')
@endsection