@extends('layout.master')
@section('title') {{$job->title_ar}}  @endsection
@section('header_arabic')
    @include('partials.header_ar')
@stop
@section('navbar')
    @include('partials.nav_ar')
@stop
@section('content')
    <section style="margin-top: 25%;">
        <div class="careers">
                @if(!empty($job))
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="careers__contact">
                                <div class="careers__head">
                                    <h2>{{$job->title_ar}}</h2>
                                </div>

                                <br>
                                <div class='careers--details'>
                                    <h4  style="display: inline-block;"><strong>العنوان :</strong></h4>
                                                <i class='fa fa-map-marker'></i>
                                                <span style="color:grey">{{$job->location}}</span>
                                </div> 
                                
                                <div class="careers--details">
                                    <h4><strong>الوصف</strong></h4>
                                    <p class="lead">
                                        {!! $job->content_ar !!}
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="careers__apply">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <h4>قدم للوظيفة</h4>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                        <form class="form-group" action="{{route('CreateCareer')}}" method="post"
                              enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" value="{{$job->id}}" name="job_id">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <h5 id="nameval" style="display: none ; color: red;"></h5>
                                    <input required onchange="nameValidation(this.value)" type="text" class="name" id="name"
                                           placeholder="الاسم" style="width: 100%" name="name"/>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <h5 id="emailval" style="display: none ; color: red;"></h5>
                                    <input required onchange="emailValidation(this.value)" type="text" class="email" id="email"
                                           placeholder="البريد الالكتروني" style="width: 100%" name="email"/>
                                </div>
                                <div class="col-md-3">
                                    <h5 id="phoneval" style="display: none ; color: red;"></h5>
                                    <input required onchange="phoneValidation(this.value)" type="text" class="phone" id="phone"
                                           placeholder="رقم الهاتف" style="width: 100%" name="phone"/>
                                </div>
                                <div class="col-md-5"></div>
                            </div>

                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <div id="selectImage" style="width: 100%">
                                        <h6>ارفق السيرة الذاتية</h6>
                                        <span style="color: red;">(Type Of File:  doc , docx , pdf )</span>
                                        <br><br>
                                        <div class="input-group">
                                <span class="input-group-btn">
                                    <button id="fake-file-button-browse" type="button" class="btn btn-default"
                                            style="margin-top: 0px;height:35px">
                                        <span class="glyphicon glyphicon-file"></span>
                                    </button>
                                </span>
                                            <input required type="file" name="img" id="files-input-upload" style="display:none">
                                            <input type="text" id="fake-file-input-name" disabled="disabled"
                                                   placeholder="File not selected" class="form-control">
                                            <span class="input-group-btn">
                                    <button type="button" class="btn btn-default" disabled="disabled"
                                            id="fake-file-button-upload" style="margin-top: 0px;height:35px">
                                        <span class="glyphicon glyphicon-upload"></span>
                                    </button>
                                </span>
                                        </div>
                                    </div>
                                    <button type="submit" id="senmessagto" onclick='savejopreq()'
                                            class="btn btn-default">ارسال
                                    </button>
                                    <div id="message"></div>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>


    </section>
@endsection
@section('scripts')
    <script type="text/javascript">

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

        $(":file").on('change', function () {
            var form = $("form")[0];
            $.ajax({
                url: "ajax_php_file.php",
                type: "post",
                data: new FormData(form),
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $("#message").html(data);
                }
            });
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
    <script type="text/javascript">
        document.getElementById('fake-file-button-browse').addEventListener('click', function () {
            document.getElementById('files-input-upload').click();
        });

        document.getElementById('files-input-upload').addEventListener('change', function () {
            document.getElementById('fake-file-input-name').value = this.value;

            document.getElementById('fake-file-button-upload').removeAttribute('disabled');
        });
    </script>
@endsection


@section('footer')
 @include('partials.footer_ar')
@endsection