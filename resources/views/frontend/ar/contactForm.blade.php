<div id="contact">
            <div id="contact">
                <div class="contacts">
                    <div class="container">
                        <h2 class="label-safwa">اتصل بنا</h2>
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

                                            <select required name="team_id" onchange="teamnameValidation(this.value)"
                                                    style="width: 100%; height: 40px; background-color: #efeaea; color: black;"
                                                    id="teamName" req="1">
                                                <option value="">-- اختر اسم فريق العمل --</option>

                                                @foreach($teams as $team)
                                                    <option value="{{$team->id}}">{{$team->name_ar}}</option>

                                                @endforeach

                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <div id="how" style="display: none ; color: red;"></div>
                                            <select onchange="namefieldd(this.value)" class="form" name="how">
                                                <option value="">كيف سمعت عنا ؟ </option>
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

                                        {{ Form::hidden('entity_id','3') }}

                                        <button type="submit" id="senmessagto" onclick="saveEmail()" class="btn btn-default">ارسال
                                        
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
