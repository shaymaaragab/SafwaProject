@include('shared.error')

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Name<span class="asterisk">*</span></label>
    {{ Form::text('name', old('name'), ['placeholder' => 'Name ', 'class' => 'form-control ' . ($errors->has('name') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="email">Email <span class="asterisk">*</span></label>
    {{ Form::email('email', old('email'), ['placeholder' => 'Email', 'class' => 'form-control ' . ($errors->has('email') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Mobile<span class="asterisk">*</span></label>
    {{ Form::text('mobile', old('mobile'), ['placeholder' => 'mobile ', 'class' => 'form-control ' . ($errors->has('mobile') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('mobile') ? $errors->first('mobile') : '' }}</small>
</div>
{{--@if(isset($add))--}}
{{--<div class="form-group has-float-label col-sm-12">--}}
    {{--<label for="name_en">Password<span class="asterisk">*</span></label>--}}
    {{--{{ Form::text('password','', ['placeholder' => 'password ', 'class' => 'form-control ' . ($errors->has('password') ? 'redborder' : '') ]) }}--}}
    {{--<small class="text-danger">{{ $errors->has('password') ? $errors->first('password') : '' }}</small>--}}
{{--</div>--}}
{{--@endif--}}
<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Job<span class="asterisk">*</span></label>
    {{ Form::text('job', old('job'), ['placeholder' => 'job ', 'class' => 'form-control ' . ($errors->has('job') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('job') ? $errors->first('job') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="img">Image<span class="asterisk"></span></label><br>
    <img id="blah" alt="" src="@if(isset($user)){{ asset($user->img)}}@endif" width="100px" height="100px" >
    {{ Form::file('img', old('img') , ['placeholder' => 'Image' ,'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
</div>

<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>
@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("input[name='img']").change(function(){
            readURL(this);
        });
    </script>
@endsection