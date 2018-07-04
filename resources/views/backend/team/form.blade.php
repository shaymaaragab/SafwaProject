
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

    <label for="email">Email <span class="asterisk">*</span></label>
    {{ Form::email('email', old('email'), ['placeholder' => 'Email', 'class' => 'form-control ' . ($errors->has('email') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('email') ? $errors->first('email') : '' }}</small>
</div>


<div class="form-group col-sm-12 submit">
    {{ Form::hidden('entity_id','1') }}
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>