@extends('layout.master')
@section('title') Auto Clinic Products @endsection
@section('header_english')
    @include('partials.header_autoclinic_en')
@stop
@section('navbar')
    @include('partials.nav_autoclinic_en')
@stop
@section('content')

    <section style="margin-top: 15%;">
        <div class="product__page">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="product__title text-center">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="product__sidebar" style="margin-left: -50px;">
                                <h3>category</h3>
                                {!! $treee !!}
                            </div>
                        </div>
                    
                        <div class="col-md-9 col-sm-9">
                            <div class='row'>
                                @if(count($mainCat) > 0)
                                    @foreach($mainCat as $catt)

                                        <div class='col-md-4'>
                                            <div class='product__details'>
                                                <div class='product__image'>
                                                    <a href="{{ route('AutoclinicProduct',App\models\Product_category::find($catt)->id) }}"><img style='height: 250px;' src="{{ asset(App\models\Product_category::find($catt)->img) }}" class='img-responsive'> </a>
                                                </div>
                                                <a href="{{ route('AutoclinicProduct',App\models\Product_category::find($catt)->id) }}"><h3>{{ App\models\Product_category::find($catt)->name_en }}</h3> </a>
                                            </div>
                                        </div>


                                    @endforeach
                                @elseif(count($mainCat) == 0)


                                    @foreach($products as $product)

                                        <div class='col-md-4'>
                                            <div class='product__details'>
                                                <div class='product__image'>
                                                    <a href="{{ route('AutoclinicProductinner',$product->id) }}"><img style='height: 250px;' src="{{ asset($product->img) }}" class='img-responsive'> </a>
                                                </div>
                                                <a href="{{ route('AutoclinicProductinner',$product->id) }}"><h3>{{ $product->name_en }}</h3> </a>
                                            </div>
                                        </div>

                                    @endforeach
                                @else
                                    <br>
                                    <br>
                                    <br>
                                    <h1 class="text-center" style="color: red;"> No Data </h1>
                                    <br>
                                    <br>
                                    <br>
                                @endif

                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@section('footer')
 @include('partials.footer__en_auto')
@endsection