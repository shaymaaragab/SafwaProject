<div id="contact">
        <div class="contacts">
            <div class="container">
                <h2 class="label-safwa">contact us</h2>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div id="loading" style="display: none;" class="alert alert-warning text-center"> Wait
                            Please .... <i class="fa fa-spinner fa-spin"></i></div>
                        <div id="success" style="display: none;" class="alert alert-success text-center"> &nbsp;
                            Success process . <i class="fa fa-check"></i></div>
                        <div id="error" style="display: none;" class="alert alert-danger text-center"> &nbsp;
                            Fail process. <i class="fa fa-times"></i></div>
                        <div class="contacts__sumbit">
                            <form action="{{route('HomeMobilityContactus')}}" method="post">

                                <div class="row">
                                    <div class="col-md-8 col-sm-8">
                                            <!-- //name -->
                                        <div class="col-md-6">
                                            <div id="nameval" style="display: none ; color: red;"></div>
                                            <input name="name" required type="text" onchange="nameValidation(this.value)"
                                                   class="form"
                                                   id="sender" placeholder="name" req="1">
                                        </div>
                                        <!-- //email -->
                                        <div class="col-md-6">
                                            <div id="emailval" style="display: none ; color: red;"></div>
                                            <input required name="email" type="text" onchange="emailValidation(this.value)"
                                                   class="form"
                                                   id="email" placeholder="email" req="1">
                                        </div>
                                        
                                        <!-- //phone -->
                                        <div class="col-md-6">
                                            <div required id="phoneval" style="display: none ; color: red;"></div>
                                            <input required name="phone" type="text" onchange="phoneValidation(this.value)"
                                                   class="form"
                                                   id="phone" placeholder="Phone Number" req="1">
                                        </div>
                                        
                                        <!-- //age -->
                                        <div class="col-md-6">
                                            <div id="age" style="display: none ; color: red;"></div>
                                            <input required name="age" type="text" 
                                                   class="form"
                                                   id="age" placeholder="Age" req="1">
                                        </div>
                                        <!-- //disabilityType -->
                                        <div class="col-md-6">
                                            <div id="disabiltytype" style="display: none ; color: red;"></div>
                                            <input required name="disabiltytype" type="text" 
                                                   class="form"
                                                   id="disabiltytype" placeholder="Disablity Type" req="1">
                                        </div>
                                        <!-- //weight -->
                                        <div class="col-md-6">
                                            <div id="weight" style="display: none ; color: red;"></div>
                                            <input required name="weight" type="text"
                                                   class="form"
                                                   id="weight" placeholder="Weight" req="1">
                                        </div>
                                        <!-- //location -->
                                        <div class="col-md-6">
                                            <select required required name="city_id"
                                            style="width: 100%; height: 40px; background-color: #efeaea; color: black;"
                                                    onchange="locationValidation(this.value)" id="location" req="1">
                                                <option value="">location</option>

                                                @foreach($cities as $city)

                                                    <option value="{{$city->id}}">{{$city->name_en}}</option>

                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select required name="team_id" onchange="teamnameValidation(this.value)"
                                                    style="width: 100%; height: 40px; background-color: #efeaea; color: black;"
                                                    id="teamName" req="1">
                                                <option value="">-- Select Team Name --</option>

                                                @foreach($teams as $team)
                                                    <option value="{{$team->id}}">{{$team->name_en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- //how do you hear about us -->
                                        <div class="col-md-6">
                                            <div id="how" style="display: none ; width: 100%; height: 40px; background-color: #efeaea; color: black;"></div>
                                            <select onchange="namefieldd(this.value)" class="form" name="how">
                                                <option value="">How did you hear about us?</option>
                                                <option value="1">You are an Existing customer</option>
                                                <option value="2">From another customer</option>
                                                <option value="3">Web search</option>
                                                <option value="4">Flyer</option>
                                                <option value="5">News</option>
                                                <option value="6">Exhibition</option>
                                            </select>
                                        </div>
                                        <!-- //additional do you hear-  name -->
                                        <div id="howname" class="col-md-6" style="display: none;">
                                            <div id="hownamefield" style="display: none ; color: red;"></div>
                                            <input name="namehow" type="text"
                                                   class="form"
                                                   id="namehowfield" placeholder="Name" req="1">
                                        </div>
                                </div>
                                    <div class="col-md-4 col-sm-4">
                                        <textarea required name="msg" onchange="messagetextValidation(this.value)" req="1"
                                                  class="form-control"
                                                  rows="3" id="messagetext" placeholder="message"
                                                  style="color: black;">
                                        </textarea>
                                     </div>
                                </div>
                            
                            {{ Form::hidden('entity_id','3') }}
                            <button type="submit" id="senmessagto" onclick="saveEmail()" class="btn btn-default">
                                submit
                                
                            </button>
                            {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
