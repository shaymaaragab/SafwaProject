
@include('shared.error')

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Currency <span class="asterisk">*</span></label>
    {{ Form::text('currency', old('currency'), ['placeholder' => 'Currency', 'class' => 'form-control ' . ($errors->has('currency') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('currency') ? $errors->first('currency') : '' }}</small>
</div>

<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>