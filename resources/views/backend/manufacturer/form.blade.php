
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
    <label for="content_en">Content In English</label>
    {{ Form::textarea('content_en', old('content_en'), ['placeholder' => 'Content In English', 'id' => 'content_en' ,'class' => 'form-control ' . ($errors->has('content_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('content_en') ? $errors->first('content_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="content_ar">Content In Arabic </label>
    {{ Form::textarea('content_ar', old('content_ar'), ['placeholder' => 'Content In Arabic', 'id' => 'content_en','class' => 'form-control ' . ($errors->has('content_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('content_ar') ? $errors->first('content_ar') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="img">Image<span class="asterisk"></span></label><br>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 245 * 260 px )</span><br>

    <img id="blah" alt="" src="@if(isset($manufacturer)){{ asset($manufacturer->img)}}@endif" width="100px" height="100px" >
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