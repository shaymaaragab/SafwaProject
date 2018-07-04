 @extends('layout.master')
@section('title') المصنعين @endsection
 @section('header_arabic')
     @include('partials.header_ar')
 @stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
 <section style="margin-top: 20%;">
    <div class="product__page">
            
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class='row'>
                    @if($manufacturer->count() > 0)
                    @foreach($manufacturer as $manu)
                     <div class='col-md-3' style='margin-top: 20px;'>
                            <div class='product__details' style="height: 330px;">
                                <div class='product__image'>
                                    <a href="{{ route('Manufacturerinner',[$manu->id,'0']) }}"><img style='height: 250px;'
                                          src="{{ asset($manu->img) }}"
                                          class='img-responsive'> </a>
                                    <div class='product__share'>
                                    </div>
                                </div>
                                <a href="{{ route('Manufacturerinner',[$manu->id,'0']) }}"><h3>{{ $manu->name_ar }}</h3></a>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <h3 class="text-center" style="color: red;"> لا يوجد مصنعين </h3>
                    @endif
                    </div>
                    <div style="margin-left: 40%;"> {{ $manufacturer->links() }} </div>

                </div>
            </div>
        </div>
</section>
  @stop
@section('footer')
 @include('partials.footer_ar')
@endsection