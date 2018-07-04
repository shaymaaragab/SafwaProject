@extends('layout.master')
@section('title') Blog @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
<section style="margin-top: 20%;">
    <div class="blog">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <h3 class="blog--recent">recent Posts</h3>
                </div>
            </div>
            @if($blogs->count() > 0)
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    @foreach ($blogs as $blog)
                        <div class='blog__item'>
                            <div class='blog--image'>
                                <a href="{{ route('Bloginner',$blog->id) }}">
                                    <img src="{{asset($blog->img)}}"
                                            height='227px' width='397px'></a>
                                {{--<div class='blog--date'>--}}

                                {{--</div>--}}
                            </div>
                            <div class='blog--type text-left'>
                                <a href="{{ route('Bloginner',$blog->id) }}">
                                    <h4><strong> {{$blog->title_en}} </strong></h4>
                                </a>
                                <p>{{$blog->created_at->diffForHumans()}}</p>
                                <p>

                        <p>{!!  str_limit($blog->content_en, $limit = 200, $end = '...') !!}</p>

                                <p>{{$blog->User->name}}</p>

                                <p>&nbsp;</p>
                                </p>
                            </div>
                        </div>

                    @endforeach
                    <div class="blog--list">
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
            @else

        <br>
        <br>
        <br>
        <h1 class="text-center" style="color: red;"> No Blog </h1>
        <br>
        <br>
        <br>

            @endif
            <div class="row">
                <div class="col-md-8 col-sm-8">

                </div>
            </div>
        </div>
</section>
@endsection
@section('scripts')
<script type="text/javascript">

    function saveSub() {

        var flag = 0;
        var data = new Array();

        data[0] = $("#subemail").val();
        if (data[0] == '') {
            $("#subemail").parent().addClass('has-error');
            flag = 1;
        } else {
            $("#subemail").parent().removeClass('has-error');
            flag = 0;
        }
        if (flag == 1) {
            return;
        }

        $.ajax({
            async: true,
            type: 'post',
            url: 'handler.php',
            data: {op: 'saveSub', data: data},
            success: function (data) {
                if (data == 1) {
                    alert('Success');
                } else {
                    alert(fail);
                }

            }
        });
    }

    function searchfield(data) {
        if (data == '') {
            alert('search field is Empty');
        } else {
            var a = document.getElementById('searchlink'); //or grab it by tagname etc
            a.href = 'search.php?search_word=' + data;
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(window).on('scroll', function () {
            // case 1
            if (($(document).scrollTop() > 100 )) {
                // check if user scrolled more than 50 from top of the browser window
                console.log(window.innerWidth);
                $(".menutwo .navbar-brand img").css({"width": "50%", "height": "190px", "top": "20px"});
            } else if (($(document).scrollTop() < 100 )) {
                $(".menutwo .navbar-brand img").css({"width": "100%", "height": "auto", "top": "0"});
            }

        });
    });


    $('.product__gallary').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
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
    $('.partners__gallary').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
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
    $(document).ready(function () {
        $(window).on('scroll', function () {
            // case 1
            if (($(document).scrollTop() > 100 )) {
                // check if user scrolled more than 50 from top of the browser window
                console.log(window.innerWidth);
                $(".menutwo .navbar-brand img").css({"width": "50%", "height": "190px", "top": "20px"});
            } else if (($(document).scrollTop() < 100 )) {
                $(".menutwo .navbar-brand img").css({"width": "100%", "height": "auto", "top": "0"});
            }

        });
    });
</script>
{{--<script type="text/javascript" src="node_modules/jquery/dist/jquery.js"></script>--}}
{{--<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.js"></script>--}}
{{--<script type="text/javascript" src="node_modules/slick-carousel/slick/slick.js"></script>--}}
@endsection
@section('footer')
 @include('partials.footer_en')
@endsection
