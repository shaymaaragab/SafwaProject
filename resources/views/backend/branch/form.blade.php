
@include('shared.error')

{{--<div class="form-group has-float-label col-sm-12">--}}
    {{--<label for="entity_id">Entity <span class="asterisk">*</span></label>--}}
    {{--{{ Form::select('entity_id', $entity, old('entity_id'), ['class' => 'form-control ' . ($errors->has('entity_id') ? 'redborder' : '') ]) }}--}}
    {{--<small class="text-danger">{{ $errors->has('entity_id') ? $errors->first('entity_id') : '' }}</small>--}}
{{--</div>--}}

<input type="hidden" name="entity_id" value="3">

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Name In English <span class="asterisk">*</span></label>
    {{ Form::text('name_en', old('name_en'), ['placeholder' => 'Name in english', 'class' => 'form-control ' . ($errors->has('name_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_en') ? $errors->first('name_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="name_ar">Name In Arabic <span class="asterisk">*</span></label>
    {{ Form::text('name_ar', old('name_ar'), ['placeholder' => 'Name in arabic', 'class' => 'form-control ' . ($errors->has('name_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_ar') ? $errors->first('name_ar') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="address_en">Address In English</label>
    {{ Form::text('address_en', old('address_en'), ['placeholder' => 'Address In English', 'class' => 'form-control ' . ($errors->has('address_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('address_en') ? $errors->first('address_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="address_ar">Address In Arabic</label>
    {{ Form::text('address_ar', old('address_ar'), ['placeholder' => 'Address In Arabic', 'class' => 'form-control ' . ($errors->has('address_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('address_ar') ? $errors->first('address_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">

    <label for="email">Email<span class="asterisk">*</span></label>
    {{ Form::email('email', old('email'), ['placeholder' => 'Email', 'class' => 'form-control ' . ($errors->has('email') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="phone1">Phone 1</label>
    {{ Form::text('phone1', old('phone1'), ['placeholder' => 'Phone 1', 'class' => 'form-control ' . ($errors->has('phone1') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('phone1') ? $errors->first('phone1') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="phone2">Phone 2</label>
    {{ Form::text('phone2', old('phone2'), ['placeholder' => 'Phone 2', 'class' => 'form-control ' . ($errors->has('phone2') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('phone2') ? $errors->first('phone2') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="phone3">Phone 3</label>
    {{ Form::text('phone3', old('phone3'), ['placeholder' => 'Phone 3', 'class' => 'form-control ' . ($errors->has('phone3') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('phone3') ? $errors->first('phone3') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="phone4">Phone 4</label>
    {{ Form::text('phone4', old('phone4'), ['placeholder' => 'Phone 4', 'class' => 'form-control ' . ($errors->has('phone4') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('phone4') ? $errors->first('phone4') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="map">Map</label>
    {{ Form::text('map', old('map'), ['placeholder' => 'Map', 'class' => 'form-control ' . ($errors->has('map') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('map') ? $errors->first('map') : '' }}</small>
</div>

<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>