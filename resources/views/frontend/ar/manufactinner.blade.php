@extends('layout.master')
@section('title') {{ $manufacturer->name_ar }} @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
<section style="margin-top: 21%">
    <div class="supplier__page">
            <div class="row">
                 <br><br>
                <div class="col-md-12">
                    <div class='supplier__block'>
                        <div class="col-md-6">

                        <h2 class='text-center manft_name' style="color: #bee214;background-color: white; text-transform: capitalize;">{{ $manufacturer->name_ar }}</h2>
                        <p class="text-center manft_content">{!! $manufacturer->content_ar !!}</p>
                        <br><br>
                        </div>
                        <div class="col-md-6">
                            <div class='supplier__product'>
                                <div class='supplier__type'>
                                    <img 
                                         src="{{ asset($manufacturer->img) }}"
                                         class='img-responsive manft_logo'>
                                    <h3> {{ $manufacturer->name_ar }} </h3>
                                </div>
                            </div>
                        </div>    
                        <br><br>
                    </div>  
                </div>
            </div>
            @if($mainCat !="")
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="product__sidebar">
                        <h3>الفئات</h3>

                        {!! $treee_ar !!}
                        
                    </div>
                
                <div class="col-md-9 col-sm-9">
                 @if(count($mainCat) > 0)
                        @foreach($mainCat as $catt)
                                    <div class='col-md-4'>
                                        <div class='product__details'>
                                            <div class='product__image'>
                                                <a href="{{ route('Manufacturerinner',[$manufacturer->id,App\models\Product_category::find($catt)->id]) }}"><img style='height: 250px;' src="{{ asset(App\models\Product_category::find($catt)->img) }}" class='img-responsive'> </a>
                                                </div>
                                            <a href="{{ route('Manufacturerinner',[$manufacturer->id,App\models\Product_category::find($catt)->id]) }}"><h3>{{ App\models\Product_category::find($catt)->name_ar }}</h3> </a>
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
                                            <a href="{{ route('productinner',$product->id) }}"><h3>{{ $product->name_ar }}</h3> </a>
                                        </div>
                                    </div>

                            @endforeach
                        @else
                        <br>
                        <br>
                        <br>
                        <h1 class="text-center" style="color: red;"> لا يوجد بيانات </h1>
                        <br>
                        <br>
                        <br>
                        @endif
                        
                        
                    </div>
                </div>
            </div>
            @else
            <br>
            <br>
            <br>
            <h1 style="color: red;" class="text-center"> لايوجد منتجات </h1>
            <br>
            <br>
            <br>

            @endif

        </div>
</section>
@stop


@section('footer')
 @include('partials.footer_ar')
@endsection