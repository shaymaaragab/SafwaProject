<?php
$lang=\Request::segment(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if($lang == 'en')Safwa @else الصفوة @endif | @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/hover-min.css') }}">
    @if($lang=="ar")
        <link rel="stylesheet" type="text/css" href="{{ asset('node_modules/bootstrap-rtl/dist/css/bootstrap-rtl.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app-rtl.css') }}">
    @endif
    @yield('styles')
</head>
<body>
@if($lang=="en")
    @yield('header_english')
{{--@include('partials.header_en')--}}
@else
    @yield('header_arabic')
{{--@include('partials.header_ar')--}}
@endif

@yield('navbar')


</div><!-- /.container-fluid -->
</nav>
</header>
<div class="content">
    <section>
        
        <div class="container">
            <!-- content -->
        @yield('content')
        <!-- End content -->

        </div>
    </section>
</div>

<!-- Start footer section -->
 @yield('footer')
<!-- End of footer section-->
<script type="text/javascript" src="{{ asset('node_modules/jquery/dist/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('node_modules/bootstrap/dist/js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('node_modules/slick-carousel/slick/slick.js') }}"></script>
@yield('scripts')
<script type="text/javascript">
    function downup(id){
       var va = $("#input"+id).val();
       if(va == 'left'){
        // $('#l'+id).classList.add('fa fa-angle-down');
        // document.getElementById("l"+id).classList.toggle('fa fa-angle-down');
        document.getElementById("l"+id).className += "fa fa-angle-down";
        document.getElementById('input'+id).value = 'down';



       }else{
         document.getElementById("l"+id).className += "fa fa-angle-left";
        document.getElementById('input'+id).value = 'left';

       }
    }
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

    function nameValidation(value) {
        var i = document.getElementById("nameval");
        var ii = i.textContent;
        var n = value.length;
        if (ii == '' && n < 4) {

            $('#nameval').slideDown(function () {
                $('#nameval').append('must more 4 characters');
                document.getElementById("senmessagto").disabled = true;
            });

        }
        if (n > 4) {
            $('#nameval').innerHTML = '';
            $('#nameval').fadeOut();
            document.getElementById("senmessagto").disabled = false;
        }
    }

    function emailValidation(value) {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var i = document.getElementById("emailval");
        var ii = i.textContent;

        if (reg.test(value) == false && ii == '') {

            $('#emailval').slideDown(function () {
                $('#emailval').append('Invalid Email');
                document.getElementById("senmessagto").disabled = true;

            });
        }

        if (reg.test(value) == true) {
            $('#emailval').innerHTML = '';
            $('#emailval').fadeOut();
            document.getElementById("senmessagto").disabled = false;
        }

    }

    function phoneValidation(value) {
        var isphone = /^(1\s|1|)?((\(\d{3}\))|\d{3})(\-|\s)?(\d{3})(\-|\s)?(\d{5})$/.test(value);
        var i = document.getElementById("phoneval");
        var ii = i.textContent;

        if (isphone == false && ii == '') {
            $('#phoneval').slideDown(function () {
                $('#phoneval').append('Invalid Number');
                document.getElementById("senmessagto").disabled = true;

            });
        }

        if (isphone == true) {
            $('#phoneval').innerHTML = '';
            $('#phoneval').fadeOut();
            document.getElementById("senmessagto").disabled = false;
        }

    }


    function searchfield(data) {
        if (data == '') {
            alert('search field is Empty');
        } else {
            var a = document.getElementById('searchlink');
            a.href = 'en/searchWord/' + data;
        }
    }

    @if($lang=="ar")
    $('.product__gallary').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        rtl: true,
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
        rtl: true,
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

    $('.media__gallary').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
        dots: true,
        rtl: true,
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
    $('.supplier__gallary').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        rtl: true,
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
    @else
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

    $('.media__gallary').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
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
    $('.supplier__gallary').slick({
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
    @endif

</script>
<script>
function namefieldd(id){
if(id == 2){
    $("#howname").slideDown();
}else{
    $('#namehowfield').val('');
    $("#howname").slideUp();
}
}
    $(function () {
        var html = $('#myDiv').html();
        var newHtml = '';
        for (var i = 0; i < html.length; i++) {
            newHtml = newHtml + html[i];
            if ((i + 1) % 10 == 0) {
                newHtml = newHtml + '<br/>';
            }
        }
        $('#myDiv').html(newHtml);
    });

    $(document).ready(function () {
        
      });

        var lastScrollTop = 0;
        $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st > lastScrollTop){
            var widthdown = $("#second-nav .navbar-brand img").width();
            if(widthdown == 300){
                 if (($(document).scrollTop() > 100 )) {
                    console.log("should small it");
                    $("#second-nav .navbar-brand img").css("width","120px");
                     $("#bs-example-navbar-collapse-2 .navbar-right").css("margin-top","10px");
                 }
            }
             console.log("down");
           } else {
             console.log("up");
             var widthup = $("#second-nav .navbar-brand img").width();
             console.log(widthup);
            if(widthup = 160){
               if (($(document).scrollTop() < 100 )) {
                    console.log("should Bigger it");
                    $("#second-nav .navbar-brand img").css("width","300px");
                    $("#bs-example-navbar-collapse-2 .navbar-right").css("margin-top","40px");
                }                
            }
           }
           lastScrollTop = st;
        });

            $('.myIframe').css('height', $(window).height()+'400px');
            $('.myIframe').css('height', $(window).width()+'275px');

   

    $(document).ready(function () {
        $("#myModal").on("hidden.bs.modal", function () {
            $("#iframeYoutube").attr("src", "#");
        });
    })

    function changeVideo(vId) {
      $("#myModal"+vId).modal("show");
    }
    function colaupordowen(item){
        alert(item);
    }
var menu = document.getElementById('searchnav');
document.getElementById('mobilesearch').onclick = function() {
    if (menu.className == "hide"){
        menu.className = "show";
    } else {
        menu.className ='hide';
    }
}
</script>
<script type="text/javascript">
    

        $('.video-link').on('click', function(e){
            e.preventDefault();
            console.log($( '#' + $(this).data('modal-id') ) );
            $( '#' + $(this).data('modal-id') ).modal();
        });

            
   
    
</script>
</body>
</html>