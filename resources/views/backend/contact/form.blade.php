
@include('shared.error')

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Name in english <span class="asterisk">*</span></label>
    {{ Form::text('name_en', old('name_en'), ['placeholder' => 'Name in english', 'class' => 'form-control ' . ($errors->has('name_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_en') ? $errors->first('name_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="name_ar">Name in Arabic <span class="asterisk">*</span></label>
    {{ Form::text('name_ar', old('name_ar'), ['placeholder' => 'Name in arabic', 'class' => 'form-control ' . ($errors->has('name_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_ar') ? $errors->first('name_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="phone">Phone</label>
    {{ Form::text('phone', old('phone'), ['placeholder' => 'phone', 'class' => 'form-control ' . ($errors->has('phone') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('phone') ? $errors->first('phone') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">

    <label for="email">Email<span class="asterisk">*</span></label>
    {{ Form::email('email', old('email'), ['placeholder' => 'Email', 'class' => 'form-control ' . ($errors->has('email') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="position_en">Position In English </label>
    {{ Form::text('position_en', old('position_en'), ['placeholder' => 'Position In English', 'class' => 'form-control ' . ($errors->has('position_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('position_en') ? $errors->first('position_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="position_ar">Position In Arabic </label>
    {{ Form::text('position_ar', old('position_ar'), ['placeholder' => 'Position In Arabic', 'class' => 'form-control ' . ($errors->has('position_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('position_ar') ? $errors->first('position_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="img">Image</label>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 230 * 230 px )</span><br>

    {{ Form::file('img', old('img'), ['placeholder' => 'Image', 'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
</div>


{{--<div class="form-group has-float-label col-sm-12">--}}
    {{--<label for="entity_id">Entity <span class="asterisk">*</span></label>--}}
    {{--{{ Form::select('entity_id', $entity, old('entity_id'), ['class' => 'form-control ' . ($errors->has('entity_id') ? 'redborder' : '') ]) }}--}}
    {{--<small class="text-danger">{{ $errors->has('entity_id') ? $errors->first('entity_id') : '' }}</small>--}}
{{--</div>--}}
<input type="hidden" value="3" name="entity_id">
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