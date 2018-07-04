@extends('layout.master')
@section('title') {{ $product['name_en'] }} @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
    <section style="margin-top: 24%;">
        <div class="container">
            <div class="productdetails">
                <div class="row">
                    <div class="col-md-4">
                        <div id="carousel-example-generic" class="carousel slide text-center" data-ride="carousel"
                             style="margin-top: 0%; height: 400px;">
                            <!-- Indicators -->
                            <ol class="carousel-indicators hidden-xs">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>

                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php $i=0?>
                                @foreach($slider as $slider)
                                    <div class="item @if($i==0) active @endif" >
                                        <img src="{{asset($slider->img)}}" alt="" style="width:100%;height:400px">
                                    </div>
                                    <?php $i++;?>
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

                    <div class="col-md-8">
                        <div class="productdetails__type">
                            <div class="productdetails__sort">
                                @if(!$product['name_en']  == '')
                                    <h3> {{ $product['name_en'] }} </h3>
                                @endif

                                @if(!$product['model_en']  == '')

                                    <div class="productdetails__specifics">
                                        <p>Model : <span>{{ $product['model_en'] }}</span></p>
                                    </div>
                                @endif

                                @if(!$product['price']  == '')

                                    <div class="productdetails__specifics">
                                        <p>price : <span>{{ $product['price'] }}</span></p>
                                    </div>
                                @endif
                                @if(!$product['shortcontent_en']  == '')
                                <!-- <div class="productdetails__specifics"> -->
                                    <h4>Short description : </h4><p>{{ $product['shortcontent_en'] }}
                                    <!-- </div> -->
                                    @endif
                                    @if(!$product['fullcontent_en']  == '')
                                        <!-- <div class="productdetails__specifics"> -->
                                    <h4>Full Content : </h4><p>{!! $product['fullcontent_en'] !!}</p>
                                    <!-- </div> -->
                                @endif

                            </div>
                            <div class="row">

                                <div class="col-md-8">
                                    @foreach($docs as $doc)
                                        <div class="productdetails__download col-md-4">
                                            <a href="{{ asset($doc['img']) }}" download>{{ $doc->name_en }}</a>
                                            <br><br><br><br><br>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/img/ng.png') }}">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($accessory->count() > 0)
                <div class="accessories">
                    <h2 class='text-center'>Accessories</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="accessories__gallary">
                                @foreach($accessory as $acc)
                                    <div class='accessories-items col-md-3'>
                                        <img style='height: 250px;' src="{{ asset($acc->img) }}" class='img-responsive'>
                                        <h3>{{ $acc['name_en'] }}</h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <h3 class="text-center" style="color: red;"> No Accessories</h3>
            @endif
        </div>
    </section>
@stop
@section('footer')
 @include('partials.footer_en')
@endsection