
@include('shared.error')

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Name In English <span class="asterisk">*</span></label>
    {{ Form::text('name_en', old('title_en'), ['placeholder' => 'Name In English', 'class' => 'form-control ' . ($errors->has('name_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_en') ? $errors->first('name_en') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-12">
    <label for="name_ar">Name In Arabic <span class="asterisk">*</span></label>
    {{ Form::text('name_ar', old('name_ar'), ['placeholder' => 'Name In Arabic', 'class' => 'form-control ' . ($errors->has('name_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_ar') ? $errors->first('name_ar') : '' }}</small>
</div>

 
  {{ Form::hidden('product_id', $pro_id) }}
  

<div class="form-group has-float-label col-sm-12">
    <label for="name_ar">Image <span class="asterisk"></span></label>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 135 * 135 px )</span><br>

    {{ Form::file('img', old('img'), ['placeholder' => 'Image', 'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
</div>

<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>