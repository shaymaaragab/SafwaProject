
@include('shared.error')

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
    {{ Form::textarea('content_en', old('content_en'), ['placeholder' => 'Content In English', 'class' => 'form-control ' . ($errors->has('content_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('content_en') ? $errors->first('content_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="content_ar">Content In Arabic </label>
    {{ Form::textarea('content_ar', old('content_ar'), ['placeholder' => 'Content In Arabic', 'class' => 'form-control ' . ($errors->has('content_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('content_ar') ? $errors->first('content_ar') : '' }}</small>
</div>

<div class="form-group has-float-label col-sm-12">
    <label for="img">Image<span class="asterisk"></span></label><br>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 358 * 203.5 px )</span><br>

    <img id="blah" alt="" src="@if(isset($blog)){{ asset($blog->img)}}@endif" width="100px" height="100px" >
    {{ Form::file('img', old('img') , ['placeholder' => 'Image' ,'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
</div>

<div class="form-group col-sm-12 submit">
    {{ Form::hidden('user_id', auth()->user()->id) }}
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