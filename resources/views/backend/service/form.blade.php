
@include('shared.error')

{{--<div class="form-group has-float-label col-sm-12">--}}
    {{--<label for="entity_id">Entity <span class="asterisk">*</span></label>--}}
    {{--{{ Form::select('entity_id', $entity, old('entity_id'), ['class' => 'form-control ' . ($errors->has('entity_id') ? 'redborder' : '') ]) }}--}}
    {{--<small class="text-danger">{{ $errors->has('entity_id') ? $errors->first('entity_id') : '' }}</small>--}}
{{--</div>--}}
<input type="hidden" value="{{$entity->id}}" name="entity_id">


<div class="form-group has-float-label col-sm-12">
    <label for="title_en">Title In English <span class="asterisk">*</span></label>
    {{ Form::text('title_en', old('title_en'), ['placeholder' => 'Title In English', 'class' => 'form-control ' . ($errors->has('title_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('title_en') ? $errors->first('title_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="title_ar">Title In Arabic <span class="asterisk">*</span></label>
    {{ Form::text('title_ar', old('title_ar'), ['placeholder' => 'Title In Arabic', 'class' => 'form-control ' . ($errors->has('title_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('title_ar') ? $errors->first('title_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="content_en">Content In English</label>
    {{ Form::textarea('content_en', old('content_en'), ['placeholder' => 'Content In English', 'id' => 'content_en' ,'class' => 'form-control ' . ($errors->has('content_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('content_en') ? $errors->first('content_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="content_ar">Content In Arabic </label>
    {{ Form::textarea('content_ar', old('content_ar'), ['placeholder' => 'Content In Arabic', 'id' => 'content_ar' ,'class' => 'form-control ' . ($errors->has('content_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('content_ar') ? $errors->first('content_ar') : '' }}</small>
</div>


<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>