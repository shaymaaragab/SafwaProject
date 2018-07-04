@extends('layout.master')
@section('title') الصفحة الرئيسية @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
    <section class="homes" style="margin-top: 27%;">
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide text-center" data-ride="carousel"
             style="margin-top: -12%; height: 600px;">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $i = 0?>
                @foreach($sliders as $slider)
                    <div class="item @if($i==0) active @endif">
                        <img src="{{asset($slider->img)}}" alt="" style="width:100%; height:550px;">
                    </div>
                    <?php $i ++;?>
                @endforeach
            </div>
            <a data-slide="prev" href="#carousel-example-generic" class="left carousel-control"
               style=" top: 50%; background: none; color: white; width: 50px; height: 50px; background-color: #bee214;line-height: 50px;border-radius: 50%; opacity: 1;">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a data-slide="next" href="#carousel-example-generic" class="right carousel-control"
               style=" top: 50%; background: none;  color: white; width: 50px; height: 50px;  background-color: #bee214;  line-height: 50px; border-radius: 50%; opacity: 1;">
                <i class="fa fa-chevron-right"></i>
            </a>
        </div>
    </div>
</section>
    <section id="products">
        <div class="product">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h2>المنتجات</h2>
                        <div class="product__gallary">
                        @if(isset($main_product))
                                    <div class="product-items slick-slide slick-current slick-active"
                                         data-slick-index="0" aria-hidden="false" style="width: 380px;" tabindex="-1"
                                         role="option" aria-describedby="slick-slide00">
                                        <img style="width: 100%; height: 300px;"
                                             src="{{ asset($main_product->img) }}">
                                        <div class="product-salary">
                                            <p>{{ $main_product->name_ar }}</p>
                                            <a style="width: 200px;" href="{{ route('productinner',$main_product->id) }}" class="link"
                                               tabindex="0">
                                                <span>عرض المزيد</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endif                                 
                                   @if(isset($products))
                                    @foreach($products as $product)
                                    <div class="product-items slick-slide" data-slick-index="3" aria-hidden="true"
                                         style="width: 380px;" tabindex="-1" role="option"
                                         aria-describedby="slick-slide03">
                                        <img style="width: 100%; height: 300px;"
                                             src="{{ asset($product->img) }}">
                                        <div class="product-salary">
                                            <p>{{ $product->name_ar }}</p>
                                            <a style="width: 200px;" href="{{ route('productinner',$product->id) }}" class="link"
                                               tabindex="-1">
                                                <span>عرض المزيد</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                     @endforeach
                                    @endif
                                    @if(isset($main_product))
                                    <div class="product-items slick-slide slick-current slick-active"
                                         data-slick-index="0" aria-hidden="false" style="width: 380px;" tabindex="-1"
                                         role="option" aria-describedby="slick-slide00">
                                        <img style="width: 100%; height: 300px;"
                                             src="{{ asset($main_product->img) }}">
                                        <div class="product-salary">
                                            <p>{{ $main_product->name_ar }}</p>
                                            <a style="width: 200px;" href="{{ route('productinner',$main_product->id) }}" class="link"
                                               tabindex="0">
                                                <span>عرض المزيد</span>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                        </div>
                        <div class="product__link">
                            <a href="{{ route('Product','0') }}" class="link">
                                <span>عرض المزيد</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="media">
    
        <div class="medias">
            <div class="container">
                <h2 style="margin-bottom: 0px;">الميديا</h2>
                <div class="col-md-12 col-sm-12">
                <h3 class="text-center" style="margin-top: 0px;"> <small style="color: #bee214;">الصور</small></h3>
                    <div id="myslider" class="carousel slide text-center" data-ride="carousel"
                         style="margin-top: 1%; height: 500px;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner text-center" role="listbox">
                        @if(isset($main_media_image))
                            <div class="item active">
                                <img src="{{ asset($main_media_image->src) }}" class="img-rounded" style='height: 400px;'
                                     width='100%'
                                     height='347' alt="">
                            </div>
                            @endif
                            @if(isset($mediaimage))
                            @foreach($mediaimage as $mediaimage)
                             <div class="item">
                                <img src="{{ asset($mediaimage->src) }}" class="img-rounded text-center" style='height: 400px;'
                                     width='100%'
                                     height='347' alt="">
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <a data-slide="prev" href="#myslider" class="left carousel-control"
                           style=" top: 35%; background: none; color: white; width: 50px; height: 50px; background-color: #bee214;line-height: 50px;border-radius: 50%; opacity: 1;">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a data-slide="next" href="#myslider" class="right carousel-control"
                           style=" top: 35%; background: none;  color: white; width: 50px; height: 50px;  background-color: #bee214;  line-height: 50px; border-radius: 50%; opacity: 1;">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="row">

                    @if($mediavideo->count() > 0)
                                 <h3 class="text-center"> <small style="color: #bee214;">الفيديوهات</small></h3>                
                    @foreach($mediavideo as $video)
                    <div class='col-md-4'>
                        <div class='product__details'>
                            <div class='product__image'>

                                <a class='video-link' data-modal-id="modal-video{{ $video->id }}">
                                    <span class='video-link-icon'><i class='fa fa-play'></i></span>
                                   <?php

                                    if(strpos($video->src, '?v=')){
                                      $firstVideoImg = explode('?v=',$video->src);
                                      }elseif(strpos($video->src , 'embed/')){
                                      $firstVideoImg = explode('embed/',$video->src);
                                      }

                                      if(isset($firstVideoImg[1])){
                                          $firstVideoImg = "https://img.youtube.com/vi/".$firstVideoImg[1]."/0.jpg"; 
                                      }else{
                                        $firstVideoImg = "https://img.youtube.com/vi/mshla2y/0.jpg";
                                      }
                                    ?>
                                </a>
                                <img style='width: 348px; height: 348px;'
                                     src="{{$firstVideoImg}}"
                                     class='img-responsive'>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="medias__more">
                            <a href="{{ route('Media') }}" class="link">
                                <span>عرض المزيد</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>الموضوعات</h2>
                </div>
                <div class="">
                @if(isset($blogs))
                               @foreach($blogs as $blog)

                                <div class='col-md-4 col-sm-4' style='overflow: hidden;'>
                                        <div class='flip-container'>
                                            <div class='flipper'>
                                                <div class='front'>
                                                    <div class='thumbnail'>
                                                        <img src='{{ asset($blog->img) }}'>
                                                        <div class='caption'>
                                                            <h3>{{ $blog->title_ar }}</h3>
                                                            <p>{!!  str_limit($blog->content_ar, $limit = 100, $end = '...') !!}</p>
                                                        </div>
                                                    </div>
                                                    <div class='share'>
                                                        <data>{{ date('Y/m/d H:m:i' , strtotime($blog->created_at)) }}</data>
                                                    </div>
                                                </div>
                                                <div class='back'>
                                                    <a href="{{ route('Bloginner',$blog->id) }}"><h3>{{ $blog->title_ar }}</h3></a>
                                                    <p>{!!  str_limit($blog->content_ar, $limit = 100, $end = '...') !!}</p>

                                                    <div class='share'>
                                                        <data>{{ date('Y/m/d H:m:i' , strtotime($blog->created_at)) }}</data>
                                                        <a href='#'>
                                                            <i class='fa fa-share-alt'></i>
                                                        </a>
                                                        <div class='share--social'>
                                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url($blog->id) }}"
                                                               target='_blank'>
                                                                <i class='fa fa-facebook'></i>
                                                            </a>
                                                            <a href="http://www.twitter.com/share?url={{ url($blog->id) }}"
                                                               target='_blank'>
                                                                <i class='fa fa-twitter'></i>
                                                            </a>
                                                            <a href="https://plus.google.com/share?url={{ url($blog->id) }}"
                                                               target='_blank'>
                                                                <i class='fa fa-google-plus'></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               @endforeach
                               @endif
                </div>
            </div>
            <div class="blog__more">
                <a href="{{ route('Blog') }}" class="link">
                    <span>عرض المزيد</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="supplier">
        <div class="container">
            <h2>الموزعين</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="supplier__logo">
                        <img src="../assets/img/suppliers.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">

                 <div class="supplier__gallary">
                @if($manufacturers->count() > 0)
                    @foreach($manufacturers as $manu)
                    <div class='supplier__item'>
                            <div class='supplier__product'>
                                <div class='supplier__type'>
                                    <a href="{{ route('Manufacturerinner',[$manu->id,'0']) }}">
                                        <img style='height: 150px;'
                                             src="{{ asset($manu->img) }}"
                                             class='img-responsive'> </a>
                                    <a href="{{ route('Manufacturerinner',[$manu->id,'0']) }}"><h3>{{ $manu->name_ar }}</h3></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    </div>
                </div>
                </div>
            </div>
            <div class="supplier__more">
                <a href="{{ route('Manufacturer') }}" class="link">
                    <span>عرض المزيد</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </section>
    <section class="partners">
        <div class="container">
            <h2>الشركاء</h2>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                <div class="partners__gallary">
                    @if(isset($partners))
                    @foreach($partners as $partner)
                   <div class='partners-items'>
                   <img style='width: 100px; height: 100px;' src="{{ asset($partner->img) }}" />
                   </div>  
                   @endforeach
                   @endif

                </div>
            </div>
            </div>
        </div>
    </section>
     <!-- MODAL --> 
          @foreach($mediavideo as $videoo)
                    <div class="modal fade" id="modal-video{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-video-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-video{{ $videoo->id }}">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                <?php

                                                  if(strpos($videoo->src, '?v=')){
                                                    $firstVideoImg2 = explode('?v=',$video->src);
                                                    }elseif(strpos($videoo->src , 'embed/')){
                                                    $firstVideoImg2 = explode('embed/',$videoo->src);
                                                    }

                                                    
                                                  ?>
                                                  
                                                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/{{ $firstVideoImg2[1] }}"
                                                            webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                                                
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div> 
                    @endforeach       
    @include('frontend.ar.contactForm')
@stop


@section('footer')
 @include('partials.footer_ar')
@endsection
