@extends('layout.master')
@section('title') اوتو كلينك @endsection
@section('header_arabic')
    @include('partials.header_autoclinic_ar')
@stop
@section('navbar')
    @include('partials.nav_autoclinic_ar')
@stop
@section('content')
<section class="homes1" style="margin-top: 11%">
    <div class="container">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $i=0?>
                    @foreach($sliders as $slider)
                        <div class="item @if($i==0) active @endif" >
                            <img src="{{asset($slider->img)}}" alt="" style="width:100%;">
                        </div>
                        <?php $i++;?>
                     @endforeach
                </div>

                <!-- Left and right controls -->
                <a data-slide="prev" href="#myCarousel" class="left carousel-control"
                   style=" top: 50%; background: none; color: white; width: 50px; height: 50px; background-color: #bee214;line-height: 50px;border-radius: 50%; opacity: 1;">
                    <i class="fa fa-chevron-left" style="margin-top: 10px "></i>
                </a>
                <a data-slide="next" href="#myCarousel" class="right carousel-control"
                   style=" top: 50%; background: none;  color: white; width: 50px; height: 50px;  background-color: #bee214;  line-height: 50px; border-radius: 50%; opacity: 1;">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="careers__title">
                    <p>
                    {!! $aboutus->content_ar !!}
                    </p>

                </div>
            </div>
        </div>
        @if($producsts->count() > 0)
        <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class='row'>
                        <h1 class="text-center" style="color: #bee214;">المنتجات</h1>
                            @foreach($producsts as $pro)
                            <div class='col-md-4' style='margin-top:20px;'>
                                <div class='product__details'>
                                    <div class='product__image'>
                                        <a><img style='height: 200px; width: 100%;'
                                                src="{{asset($pro->img)}}"
                                                class='img-responsive'></a>
                                    </div>
                                    <a href="{{route('productinner',$pro->id)}}"><h3>{{$pro->name_ar}}</h3></a>
                                </div>
                            </div>
                                @endforeach
                        </div>
                    </div>
        </div>
        <div style="margin-right: 40%;">
        {{$producsts->links()}}
        </div>
        @else
        <br>
        <br>
        <br>
        <h1 class="text-center" style="color: red;"> لايوجد منتجات </h1>
        <br>
        <br>
        <br>
        @endif
            <div id="contact">
            <div id="contact">
                <div class="contacts">
                    <div class="container">
                        <h2>اتصل بنا</h2>
                        <div class="row">

                            <br>
                            <br>

                            <div class="col-md-12 col-sm-12">
                                <div class="contacts__sumbit">
                                    <form action="{{route('HomeMobilityContactus')}}" method="post">

                                    <div class="row">
                                    <div class="col-md-8 col-sm-8">

                                        <div class="col-md-6">
                                            <div id="nameval" style="display: none ; color: red;"></div>
                                            <input name="name" required type="text" onchange="nameValidation(this.value)" class="form"
                                                   id="sender" placeholder="الاسم" req="1">
                                        </div>

                                        <div class="col-md-6">
                                            <div id="emailval" style="display: none ; color: red;"></div>
                                            <input required name="email" type="text" onchange="emailValidation(this.value)" class="form"
                                                   id="email" placeholder="البريد الالكتروني" req="1">
                                        </div>

                                        <div class="col-md-6">
                                            <select required required name="city_id" onchange="locationValidation(this.value)" id="location" req="1">
                                                <option value="">الموقع</option>

                                                @foreach($cities as $city)

                                                <option value="{{$city->id}}">{{$city->name_ar}}</option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <div required id="phoneval" style="display: none ; color: red;"></div>

                                            <input required name="phone" type="text" onchange="phoneValidation(this.value)" class="form"
                                                   id="phone" placeholder="رقم الهاتف" req="1">
                                        </div>

                                        <div class="col-md-6">
                                            <div id="disabiltytype" style="display: none ; color: red;"></div>
                                            <input required name="disabiltytype" type="text" 
                                                   class="form"
                                                   id="disabiltytype" placeholder="نوع الاعاقة" req="1">
                                        </div>

                                        <div class="col-md-6">
                                            <div id="age" style="display: none ; color: red;"></div>
                                            <input required name="age" type="text" 
                                                   class="form"
                                                   id="age" placeholder="العمر" req="1">
                                        </div>

                                        <div class="col-md-6">
                                            <div id="weight" style="display: none ; color: red;"></div>
                                            <input required name="weight" type="text"
                                                   class="form"
                                                   id="weight" placeholder="الوزن" req="1">
                                        </div>
                                        <div class="col-md-6">
                                            <div id="how" style="display: none ; color: red;"></div>
                                            <select onchange="namefieldd(this.value)" class="form" name="how">
                                                <option value="">كيف سمعت عنا?</option>
                                                <option value="1">انت عميل حالي</option>

                                                <option value="2">من عميل اخر</option>
                                                <option value="3">من البحث في الويب</option>
                                                <option value="4">من نشرة اعلانية</option>
                                                <option value="5">من الاخبار</option>
                                                <option value="6">المعرض</option>
                                            </select>
                                        </div>

                                        <div id="howname" class="col-md-6" style="display: none;">
                                            <div id="hownamefield" style="display: none ; color: red;"></div>
                                            <input name="namehow" type="text"
                                                   class="form"
                                                   id="namehowfield" placeholder="الاسم" req="1">
                                        </div>
        
                                    </div>
                                <div class="col-md-4 col-sm-4">
                                    <textarea required name="msg" onchange="messagetextValidation(this.value)" req="1" class="form-control"
                                              rows="3" id="messagetext" placeholder="الرسالة"
                                              style="color: black;">
                                                  
                                    </textarea>
                                </div>

                                        {{ Form::hidden('entity_id',$entity_id) }}
                                        {{ Form::hidden('team_id',$team->id) }}

                                        <button type="submit" id="senmessagto" onclick="saveEmail()" class="btn btn-default">ارسال
                                        message
                                    </button>
                                        {{csrf_field()}}
                                         </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </script>

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

        function saveEmail() {
            var flag = 0;
            var data = new Array();
            data[0] = $("#messagetext").val();
            if (data[0] == '') {
                $("#messagetext").parent().addClass('has-error');
                flag = 1;
            } else {
                $("#messagetext").parent().removeClass('has-error');
            }

            data[1] = $("#sender").val();
            if (data[1] == '') {
                $("#sender").parent().addClass('has-error');
                flag = 1;
            } else {
                $("#sender").parent().removeClass('has-error');
            }

            data[2] = $("#email").val();
            if (data[2] == '') {
                $("#email").parent().addClass('has-error');
                flag = 1;
            } else {
                $("#email").parent().removeClass('has-error');
            }

            data[3] = $("#phone").val();
            if (data[3] == '') {
                $("#phone").parent().addClass('has-error');
                flag = 1;
            } else {
                $("#phone").parent().removeClass('has-error');
            }

            data[4] = $("#location").val();
            if (data[4] == '') {
                $("#location").parent().addClass('has-error');
                flag = 1;
            } else {
                $("#location").parent().removeClass('has-error');
            }

            if (flag == 1) {
                return;
            }
            $("#loading").slideDown();
            $.ajax({
                async: true,
                type: 'post',
                url: 'handler.php',
                data: {op: 'savehealthEmail', data: data},
                success: function (data) {
                    setTimeout(function () {
                        $("#loading").slideUp(function () {
                            if (parseInt(data) == 0) {
                                $("#error").slideDown();
                                setTimeout(function () {
                                    $("#error").slideUp();
                                }, 2000);
                            } else {
                                $("#success").slideDown();
                                setTimeout(function () {
                                    location.reload();
                                    $("#formModal").modal('toggle');
                                }, 2000);
                            }
                        });
                    }, 2000);
                }
            });
        }


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
@section('footer')
 @include('partials.footer__ar_auto')
@endsection