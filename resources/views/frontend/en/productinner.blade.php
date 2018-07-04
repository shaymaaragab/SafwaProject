@extends('layout.master')
@section('title') {{ $product->name_en}} @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
<section  style="margin-top: 11%;">
    <div class="row">
        @if($slider->count() > 0)
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php $i=0?>
                @foreach($slider as $slider)
                    <div class="item @if($i==0) active @endif" >
                        <img src="{{asset($slider->img)}}" alt="" style="width:100%; max-height:500px">
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
        @endif
    </div>
       @if($slider->count() == 0)
            <div class="row" style="margin-top: 11%;">
            @else
            <div class="row">
      @endif      
        <div class="col-md-8">
            @if(!$product->name_en  == '')
                <h2 class="productnew__name" style="background-color: white; display:inline-block;"> {{ $product->name_en }} </h2>
            @endif

                @if(!$product->model_en  == '')
                    <p class="productnew__model"><h4 class="label-safwa"><strong>Model : </strong></h4><span> {{ $product->model_en }}</span></p>
                @endif
                <br>
                @if(!$product->shortcontent_en  == '')
                    <h4 class="label-safwa"><strong> Short Description : </strong></h4> {{ $product->shortcontent_en }}
                    @endif
                    <br>
                    @if(!$product->fullcontent_en  == '')
                    <h4 class="label-safwa"><strong>Full Description : </strong></h4> <p>{!! $product->fullcontent_en !!}</p>
                @endif
        </div>
        <div class="col-md-4">
            <div class="productnew__more">
                <h2 class="label-safwa"><a href="{{route('Manufacturerinner', [$product->Manufacturer->id , 0] )}}" >{{$product->Manufacturer->name_en}}</a></h2>
                <div class="productnew__img">
                    <a href="{{route('Manufacturerinner', [$product->Manufacturer->id , 0] )}}" ><img src="{{ asset($product->Manufacturer->img) }}" class="img-responsive" style="height:200px;"></a>
                </div>

                @if(!$product->price  == '')
                    <div class="productnew__price">
                        <h3 style="display: inline-block;">Price :</h3> <span>{{ $product->price }}</span>
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

                 if($product->video != ''){
                  if(strpos($product->video, '?v=')){
                  $videoname = explode('?v=',$product->video);
                  $videonames = "https://www.youtube.com/embed/".$videoname[1];
                  }elseif(strpos($product->video , 'embed/')){
                  $videonames = $product->video;
                  }  
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
        @if($accessory->count() > 0)
         <div class="col-md-12">
                        <div class="product__title text-center">
                            <h1 class="label-safwa">Accessories</h1>
                        </div>
                    </div>
        <div class="col-md-12">

            
                   
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
            @endif
        </div>
    </div>
</section>    
@stop
@section('scripts')

    <script type="text/javascript">
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
       
    </script>

    @stop
    @section('footer')
 @include('partials.footer_en')
@endsection