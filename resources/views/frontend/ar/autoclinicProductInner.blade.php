@extends('layout.master')
@section('title') {{ $product->name_ar }} @endsection
@section('header_arabic')
    @include('partials.header_autoclinic_ar')
@stop
@section('navbar')
    @include('partials.nav_autoclinic_ar')
@stop
@section('content')
<section  style="margin-top: 15%">
    <div class="row">
        <h1 class="productnew__title">{{$product->name_ar}}</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            @if($slider->count() > 0)
            <div class="carousel-inner">
                <?php $i=0?>
                @foreach($slider as $slider)
                    <div class="item @if($i==0) active @endif" >
                        <img src="{{asset($slider->img)}}" alt="" style="width:100%; height: 800px;">
                    </div>
                    <?php $i++;?>
                @endforeach
            </div>
            @endif

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
            @if(!$product->name_ar  == '')
                <h3 class="productnew__name"> {{ $product->name_ar }} </h3>
            @endif

            @if(!$product->model_ar  == '')
                <p class="productnew__model"><h3>الموديل :</h3><span><h4>{{ $product->model_ar }}</h4></span></p>
            @endif

            @if(!$product->shortcontent_ar  == '')
                <h3>وصف قصير : </h3> <p class="productnew__details"><h4>{{ $product->shortcontent_ar }}</h4></p>
            @endif
            @if(!$product->fullcontent_ar  == '')
                <h3>وصف طويل : </h3> <p class="productnew__details"><h4>{!! $product->fullcontent_ar !!}</h4></p>
            @endif
        </div>

        <div class="col-md-4">
            <div class="productnew__more">
                <h3>{{$product->Manufacturer->name_ar}}</h3>
                <div class="productnew__img">
                    <img src="{{ asset($product->Manufacturer->img) }}" class="img-responsive" style="height:200px;">
                </div>

                @if(!$product->price  == '')
                    <div class="productnew__price">
                        <p>السعر : <span>{{ $product->price }}</span>$</p>
                    </div>
                @endif

                @foreach($docs as $doc)
                    <div class="productnew__file">
                        <a href="{{ asset($doc->img) }}" download class="btn btn-default"><i class="fa fa-paperclip"></i>{{ $doc->name_ar }}</a>
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
            <h4 class="productnew__title">مستلزمات</h4>
            @if($accessory->count() > 0)
                <div class="accessories">
                    <div class="accessories__gallary">
                        @foreach($accessory as $acc)
                            <div class="accessories-items">
                                <img src="{{ asset($acc->img) }}" class="img-responsive">
                                <h3>{{ $acc->name_ar }}</h3>
                            </div>
                        @endforeach



                    </div>
                </div>
            @else
                <h3 class="text-center" style="color: red;">لا يوجد مستلزمات</h3>
            @endif
        </div>
    </div>

</section>
@stop
@section('footer')
 @include('partials.footer__ar_auto')
@endsection