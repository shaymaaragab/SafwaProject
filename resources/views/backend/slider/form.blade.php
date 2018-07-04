@include('shared.error')

<div class="form-group has-float-label col-sm-12">
    <label for="title_en">Ttitle In English <span class="asterisk">*</span></label>
    {{ Form::text('title_en', old('ttitle_en'), ['placeholder' => 'Ttitle In English', 'class' => 'form-control ' . ($errors->has('title_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('title_en') ? $errors->first('title_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="title_ar">Ttitle In Arabic <span class="asterisk">*</span></label>
    {{ Form::text('title_ar', old('title_ar'), ['placeholder' => 'Title In Arabic', 'class' => 'form-control ' . ($errors->has('title_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('title_ar') ? $errors->first('title_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
   <label for="entity_id">Company <span class="asterisk">*</span></label>
   {{ Form::select('entity_id', $entity, old('entity_id'), ['class' => 'form-control ' . ($errors->has('entity_id') ? 'redborder' : '') ]) }}
   <small class="text-danger">{{ $errors->has('entity_id') ? $errors->first('entity_id') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="img">Image<span class="asterisk"></span></label>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 1170 * 650 px )</span><br>
    {{ Form::file('img', old('img') , ['placeholder' => 'Image' ,'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
</div>

<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>