@extends('layout.master')
@section('title') Products @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')

    <div class="product__page" style="margin-top: 30%;">
        <div class="container">
            <div class="row">
                 
                    <div class="col-md-3 col-sm-3">
                        <div class="product__sidebar">
                            
                           
                            <h3>category</h3>
                            {!! $treee !!}
                           
                           
                        </div>
                    </div>
                    
                    
                    <div class="col-md-9 col-sm-9">
                            @if(count($mainCat) > 0)
                                @foreach($mainCat as $catt)

                                    <div class='col-md-4'>
                                        <div class='product__details'>
                                            <div class='product__image'>
                                                <a href="{{ route('Product',App\models\Product_category::find($catt)->id) }}"><img style='height: 250px;' src="{{ asset(App\models\Product_category::find($catt)->img) }}" class='img-responsive'> </a>
                                            </div>
                                            <a href="{{ route('Product',App\models\Product_category::find($catt)->id) }}"><h3>{{ App\models\Product_category::find($catt)->name_en }}</h3> </a>
                                        </div>
                                    </div>
                                @endforeach
                            @elseif(count($mainCat) == 0)
                                @foreach($products as $product)
                                    <div class='col-md-4'>
                                        <div class='product__details'>
                                            <div class='product__image'>
                                                <a href="{{ route('productinner',$product->id) }}"><img style='height: 250px;' src="{{ asset($product->img) }}" class='img-responsive'> </a>
                                            </div>
                                            <a href="{{ route('productinner',$product->id) }}"><h3>{{ $product->name_en }}</h3> </a>
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
            </div>
        </div>
    </div>
    <div class="push"></div>
@stop
@section('footer')
 @include('partials.footer_en')
@endsection