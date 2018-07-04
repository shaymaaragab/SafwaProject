@extends('layout.master')
@section('title') Blog @endsection
@section('header_english')
    @include('partials.header_en')
@stop
@section('navbar')
    @include('partials.nav_en')
@stop
@section('content')
<br>
<br>
<br>
<section style="margin-top: 17%;">
    <div class="blog__inner">
            @if(!empty($blog))
            <div class="row">
                <div class="col-md-8 col-md-offset-2"">
                    <img style="height: 400px; border: 1px solid;"
                         src="/assets/img/nnn.jpg"
                         class="img-responsive">

                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="blog--details">
                    <div class="blog--head">
                        <h3>{{$blog->title_en}}</h3>
                        <p> {{$blog->created_at->diffForHumans()}}<span></span></p>
                        <p>
                        <p>
                            {!! $blog->content_en !!}
                        </p>
                        </p>
                    </div>
                </div>
                <div class="blog--share">
                    <h5>share this articale</h5>
                    <div class="blog--social">
                        <a href="http://www.twitter.com/share?url={{ route('Bloginner',$blog->id) }}"
                           target="_blank">
                            <i class="fa fa-twitter"></i>
                            twitter
                        </a>


                    </div>
                    <div class="blog--social">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('Bloginner',$blog->id) }}"
                           target="_blank">
                            <i class="fa fa-facebook"></i>
                            facebook
                        </a>
                    </div>
                    <div class="blog--social">
                        <a href="https://plus.google.com/share?url={{ route('Bloginner',$blog->id) }}"
                           target="_blank">
                            <i class="fa fa-google-plus"></i>
                            google+
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-2"></div>
            @endif
        </div>
</section>


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
@endsection
@section('scripts')
@endsection
@section('footer')
 @include('partials.footer_en')
@endsection