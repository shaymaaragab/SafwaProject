@extends('layout.master')
@section('title') الرعاية الصحية @endsection
@section('header_arabic')
    @include('partials.header_health_ar')
@stop
@section('navbar')
    @include('partials.nav_healthcare_ar')
@stop
@section('content')
<section class="homes1" style="margin-top: 11%">
    <div class="container">
        
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
        <br>
        <br>
        <br>
        <div class="row">
        <section  id="aboutussection">

        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center"><span style='color: #bee214;'>نبذه عنا</span></h1>
                <div class="careers__title" style="text-align: right;" id ="aboutus">
                    
                    <p style="text-align:left">
                    {!! $aboutus->content_ar !!}
                    </p>
                </div>
            </div>
        </div>
        </section>

        <section  id="servicesSection">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center"><span style='color: #bee214;'>الخدمات</span></h1>
                <div class="careers__title" style="text-align: right;" id ="aboutus">
                    
                    <p style="text-align:left">
                    {!! $service->content_ar !!}
                    </p>
                </div>
            </div>
        </div>
        </section>

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
</section>
<script type="text/javascript">
function scroolTo(item){
        $("html, body").animate({
                scrollTop: $("#"+item+"").position().top - 200
            }, 1000);     
        }
</script>
</script>
@endsection
@section('footer')
 @include('partials.footer_ar_health')
@endsection