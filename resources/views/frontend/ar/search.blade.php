@extends('layout.master')
@section('title') البحث @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
    @stop
@section('content')
<section style="margin-top: 18%;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="search">
          <div class="search__box">
            <h1 class="search__title">المنتجات</h1>
          </div>  
            <div class="search__type">
              <a href="product.php">
                <h2 class="search__head">
                  كل المنتجات
                </h2>
              </a> 
              <div class="row">
                  @if( isset($res) && $res->count() > 0)
                  @foreach ($res as $product) 
                    
                     <div class='col-sm-3' style='margin-top: 20px;'>
                      <div class='product__details'>
                        <div class='product__image'>
                         <a href='{{ route('productinner',$product->id) }}'><img style='height: 100px;' src='{{ asset($product->img) }}' class='img-responsive'> </a>
                          
                        </div>
                        <a href='{{ route('productinner',$product->id) }}'><h3>{{ $product->name_en }}</h3> <h3>{{ $product->name_ar }}</h3> </a>
                        </div>
                        </div>
                    @endforeach
                    @else
                      <br><br>
                      <h1 style="color: red;" class="text-center"> لايوجد شئ للعرض </h1>
                      <br><br>
                      @endif       
               </div>
           </div>
        </div>
        <div class="search">
          <div class="search__box">
            <h1 class="search__title">الموضوعات</h1>
          </div>  
            <div class="search__type">
              <a href="blog-main.php">
                <h2 class="search__head">
                 كل الموضوعات
                </h2>
              </a>  
                  <div class="row">
                  @if( isset($res2) && $res2->count() > 0)
                  @foreach ($res2 as $blog)
                    <div class='col-sm-3' style='margin-top: 20px;'>
                      <div class='product__details'>
                        <div class='product__image'>
                         <a href="{{ route('Bloginner',$blog->id) }}"><img style='height: 100px;' src='{{ $blog->img }}' class='img-responsive'> </a>
                          
                        </div>
                        <a href="{{ route('Bloginner',$blog->id) }}"><h3>{{$blog['title_en']}}</h3> <h3>{{$blog['title_ar']}}</h3> </a>
                        </div>
                      </div>
                      @endforeach 
                      @else
                      <br><br>
                      <h1 style="color: red;" class="text-center"> لايوجد شئ للعرض </h1>
                      <br><br>
                      @endif       
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@section('footer')
 @include('partials.footer_ar')
@endsection