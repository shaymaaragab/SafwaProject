@extends('layout.master')
@section('title') الميديا @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
    <section style="margin-top: 15%;">
        <div class="product__page">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product__title text-center">
                            <h1>الالبومات</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class='row'>
                            @foreach($albums as $album)
                            <?php
                             if($album->Media()->where('flag',0)->first() != null){
                             $asset = $album->Media()->where('flag',0)->first()->src;
                             }else{
                              $asset = "uploads/partner1.png";
                             }
                            ?>
                            <div class='col-md-4' style='margin-top:20px;'>
                                <div class='product__details'>
                                    <div class='product__image'>
                                        <a href="{{route('MediaGallery',$album->id)}}"><img style='height: 200px; width: 100%;'
                                                src="{{asset($asset)}}"
                                                class='img-responsive'></a>
                                    </div>
                                    <a href="{{route('MediaGallery',$album->id)}}"><h3>{{$album->name_ar}}</h3></a>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                {{$albums->links()}}

            </div>
    </section>
    @stop
    
@section('footer')
 @include('partials.footer_ar')
@endsection