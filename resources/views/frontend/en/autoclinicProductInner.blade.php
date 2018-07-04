@extends('layout.master')
@section('title') {{ $product->name_en}} @endsection
@section('header_english')
    @include('partials.header_autoclinic_en')
@stop
@section('navbar')
    @include('partials.nav_autoclinic_en')
@stop
@section('content')
    <section style="margin-top: 15%">
    <div class="row">
        <h2 class="productnew__title">{{$product->name_en}}</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i=0?>
                @foreach($slider as $slider)
                    <div class="item @if($i==0) active @endif" >
                        <img src="{{asset($slider->img)}}" alt="" style="width:100%; height: 800px;">
                    </div>
                    <?php $i++;?>
                @endforeach
            </div>

            <!-- Left and right controls -->
            <a data-slide="prev" href="#myCarousel" class="left carousel-control" style=" top: 50%; background: none; color: white; width: 50px; height: 50px; background-color: #bee214;line-height: 50px;border-radius: 50%; opacity: 1;">
                <i class="fa fa-chevron-left" style="margin-top: 10px "></i>
            </a>
            <a data-slide="next" href="#myCarousel" class="right carousel-control" style=" top: 50%; background: none;  color: white; width: 50px; height: 50px;  background-color: #bee214;  line-height: 50px; border-radius: 50%; opacity: 1;">
                <i class="fa fa-chevron-right"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @if(!$product->name_en  == '')
                <h3 class="productnew__name"> {{ $product->name_en }} </h3>
            @endif

            @if(!$product->model_en  == '')
                <p class="productnew__model"><h3>Model : </h3><span><h4>{{ $product->model_en }}</h4></span></p>
            @endif

            @if(!$product->shortcontent_en  == '')
                <h3>Short description : </h3> <p class="productnew__details"><h4>{{ $product->shortcontent_en }}</h4></p>
            @endif
            @if(!$product->fullcontent_en  == '')
                <h3>Full Content : </h3> <p class="productnew__details"><h4>{!! $product->fullcontent_en !!}</h4></p>
            @endif
        </div>
        <div class="col-md-4">
            <div class="productnew__more">
                <h3>{{$product->Manufacturer->name_en}}</h3>
                <div class="productnew__img">
                    <img src="{{ asset($product->Manufacturer->img) }}" class="img-responsive" style="height:200px;">
                </div>

                @if(!$product->price  == '')
                    <div class="productnew__price">
                        <p>Price : <span>{{ $product->price }}</span>$</p>
                    </div>
                @endif

                @foreach($docs as $doc)
                    <div class="productnew__file">
                        <a href="{{ asset($doc->img) }}" download class="btn btn-default"><i class="fa fa-paperclip"></i>{{ $doc->name_en }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="productnew__video">
                <!-- start model video -->
               
               <?php
                  if(strpos($product->video, '?v=')){
                  $videoname = explode('?v=',$product->video);
                  $videonames = "https://www.youtube.com/embed/".$videoname[1];
                  }elseif(strpos($product->video , 'embed/')){
                  $videonames = $product->video;
                  }
                ?>
                <!-- end model video -->
            @if($product->video !="")
            <iframe id="iframeYoutube" width="100%" height="500"  src="{{$videonames}}?controls=0" frameborder="0" allowfullscreen></iframe>
            @endif
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="productnew__title">accessories</h4>
            @if($accessory->count() > 0)
                <div class="accessories">
                    <div class="accessories__gallary">
                        @foreach($accessory as $acc)
                            <div class="accessories-items">
                                <img src="{{ asset($acc->img) }}" class="img-responsive">
                                <h3>{{ $acc->name_en }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <h3 class="text-center" style="color: red;"> No Accessories</h3>
            @endif
        </div>
    </div>
    </section>
@stop

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $(window).on('scroll', function() {
                // case 1
                if (($(document).scrollTop() > 100 )) {
                    // check if user scrolled more than 50 from top of the browser window
                    console.log(window.innerWidth);
                    $(".menutwo .navbar-brand img").css({"width": "50%","height": "190px", "top": "20px" });
                }else if(($(document).scrollTop() < 100 )){
                    $(".menutwo .navbar-brand img").css({"width": "100%","height": "auto" ,"top": "0"});
                }

            });
        });
        $('.accessories__gallary').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        arrows: false
                    }
                }
            ]
        });
        $(document).ready(function(){
            $("#myModal").on("hidden.bs.modal",function(){
                $("#iframeYoutube").attr("src","#");
            })
        })

        function changeVideo(vId){
            var iframe=document.getElementById("iframeYoutube");
            iframe.src="https://www.youtube.com/embed/"+vId;

            $("#myModal").modal("show");
        }
    </script>

@stop
@section('footer')
 @include('partials.footer__en_auto')
@endsection