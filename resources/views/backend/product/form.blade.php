
@include('shared.error')

<div class="form-group has-float-label col-sm-6">
    <label for="name_en">Title In English <span class="asterisk">*</span></label>
    {{ Form::text('name_en', old('title_en'), ['placeholder' => 'Name In English', 'class' => 'form-control' . ($errors->has('name_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_en') ? $errors->first('name_en') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="name_ar">Title In Arabic <span class="asterisk">*</span></label>
    {{ Form::text('name_ar', old('name_ar'), ['placeholder' => 'Name In Arabic', 'class' => 'form-control ' . ($errors->has('name_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_ar') ? $errors->first('name_ar') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="shortcontent_en">Short Content English</label>
    {{ Form::text('shortcontent_en', old('shortcontent_en'), ['placeholder' => 'Short In English', 'class' => 'form-control ' . ($errors->has('shortcontent_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('shortcontent_en') ? $errors->first('shortcontent_en') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="shortcontent_ar">Short Content Arabic</label>
    {{ Form::text('shortcontent_ar', old('shortcontent_ar'), ['placeholder' => 'Short In Arabic', 'class' => 'form-control ' . ($errors->has('shortcontent_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('shortcontent_ar') ? $errors->first('shortcontent_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-6">
    <label for="video">Enter Video URL</label>
    {{ Form::text('video', old('video'), ['placeholder' => 'Video', 'class' => 'form-control ' . ($errors->has('video') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('video') ? $errors->first('video') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="price">Price</label>
    {{ Form::text('price', old('price'), ['placeholder' => 'Price', 'class' => 'form-control ' . ($errors->has('price') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('price') ? $errors->first('price') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="model_en">Model In English</label>
    {{ Form::text('model_en', old('model_en'), ['placeholder' => 'Model In English', 'class' => 'form-control ' . ($errors->has('model_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('model_en') ? $errors->first('model_en') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="model_ar">Model In Arabic</label>
    {{ Form::text('model_ar', old('model_ar'), ['placeholder' => 'Model In English', 'class' => 'form-control ' . ($errors->has('model_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('model_ar') ? $errors->first('model_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-6">
    <label for="manufacturer_id">Manufacturer <span class="asterisk">*</span></label>
    {{ Form::select('manufacturer_id', $manufacturers, old('manufacturer_id'), ['class' => 'form-control ' . ($errors->has('manufacturer_id') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('manufacturer_id') ? $errors->first('manufacturer_id') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="currency_id">Currency <span class="asterisk">*</span></label>
    {{ Form::select('currency_id', $currencys, old('currency_id'), ['class' => 'form-control ' . ($errors->has('currency_id') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('currency_id') ? $errors->first('currency_id') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="entity_id">Company <span class="asterisk">*</span></label>
    {{--{{ Form::select('entity_id', $entitys, old('entity_id'), ['class' => 'form-control ' . ($errors->has('entity_id') ? 'redborder' : '') ]) }}--}}
    <select multiple name="entity_id[]" class="form-control" size="2">
        <option @if(isset($entitys_product)) @if($entitys_product[0]->id == 3) selected  @endif @if(isset($entitys_product[1]))@if($entitys_product[1]->id == 3) selected  @endif @endif @endif value="3">Mobility</option>
        <option @if(isset($entitys_product)) @if($entitys_product[0]->id == 1) selected  @endif @if(isset($entitys_product[1]))@if($entitys_product[1]->id == 1) selected  @endif @endif @endif value="1">Auto Clinic</option>
        {{--@foreach($entitys as $entity)--}}
        {{--<?php $selected ;?>--}}
        {{--<option  @if($entity->id == ) @else @endif>{{$entity->name }}</option>--}}
    {{--@endforeach--}}
    </select>
    <small class="text-danger">{{ $errors->has('entity_id') ? $errors->first('entity_id') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="catproduct_id">Category <span class="asterisk">*</span></label>
    {{ Form::select('catproduct_id', $product_categorys, old('catproduct_id'), ['class' => 'form-control ' . ($errors->has('catproduct_id') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('catproduct_id') ? $errors->first('catproduct_id') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="img">Image<span class="asterisk"></span></label><br>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 380 * 300 px )</span><br>

    <img id="blah" alt="" src="@if(isset($product)){{ asset($product->img)}}@endif" width="100px" height="100px" >
    {{ Form::file('img', old('img') , ['placeholder' => 'Image' ,'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="fullcontent_en">Full Content English</label>
    {{ Form::textarea('fullcontent_en', old('fullcontent_en'), ['placeholder' => 'Name In English', 'id' => 'content_en' ,'class' => 'form-control ' . ($errors->has('fullcontent_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('fullcontent_en') ? $errors->first('fullcontent_en') : '' }}</small>
</div>
<div class="form-group has-float-label col-sm-6">
    <label for="fullcontent_en">Full Content Arabic</label>
    {{ Form::textarea('fullcontent_ar', old('fullcontent_ar'), ['placeholder' => 'Name In Arabic', 'id' => 'content_ar' ,'class' => 'form-control ' . ($errors->has('fullcontent_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('fullcontent_ar') ? $errors->first('fullcontent_ar') : '' }}</small>
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