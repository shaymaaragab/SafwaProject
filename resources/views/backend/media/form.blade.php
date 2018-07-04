
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
   <label for="entity_id"> Album <span class="asterisk">*</span></label>
   {{ Form::select('album_id', $album, old('album_id'), ['class' => 'form-control ' . ($errors->has('album_id') ? 'redborder' : '') ]) }}
   <small class="text-danger">{{ $errors->has('album_id') ? $errors->first('album_id') : '' }}</small>
</div>
@if(!isset($media))
    <div class="form-group has-float-label col-sm-12">
        <label for="entity_id"> Select Video or Image</label>
        <select name="flag" onchange="videoimage()" class="form-control" id="video_image">
            <option value="0">Image</option>
            <option value="1">Video</option>
        </select>
    </div>
    <div style="" class="form-group has-float-label col-sm-12" id="video">
        <label for="src"> Video URL </label>
        {{ Form::text('src', old('src'), ['placeholder' => 'Video URL', 'class' => 'form-control ' . ($errors->has('src') ? 'redborder' : '') ]) }}
        <small class="text-danger">{{ $errors->has('src') ? $errors->first('src') : '' }}</small>
    </div>

    <div class="form-group has-float-label col-sm-12" id="image">
        <label for="img">Image</label>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 1110 * 400 px )</span><br>

        {{ Form::file('img', old('img') , ['placeholder' => 'Image' ,'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
        <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
    </div>
@else
    @if($media->flag==1)
        <div style="" class="form-group has-float-label col-sm-12" >
            <label for="src"> Video URL</label>
            {{ Form::text('src', old('src'), ['placeholder' => 'Video URL', 'class' => 'form-control ' . ($errors->has('src') ? 'redborder' : '') ]) }}
            <small class="text-danger">{{ $errors->has('src') ? $errors->first('src') : '' }}</small>
        </div>
    @else
        <div class="form-group has-float-label col-sm-12" >
            <label for="img">Image</label>
            <img id="blah" src="{{asset($media->src)}}" alt="" width="100px" height="100px">
            {{ Form::file('img', old('img') , ['placeholder' => 'Image' ,'class' => 'form-control ' . ($errors->has('img') ? 'redborder' : '') ]) }}
            <small class="text-danger">{{ $errors->has('img') ? $errors->first('img') : '' }}</small>
        </div>
    @endif
@endif


<div class="form-group col-sm-12 submit">
    {{ Form::submit($btn, ['class' => 'btn-sm ' . $classes ]) }}
</div>
@section('js')
    <script>
        $(document).ready(function() {
            console.log( "ready!" );
            videoimage();
        });

        function videoimage()
        {
            values=$('#video_image').val();
//            alert(values);

            if(values==0)
            {
                $("#video").find("*").prop('disabled', true);
                $("#video").hide();
                $("#image").show();
                $("#image").find("*").prop('disabled', false);


            }else
            {
                $("#image").find("*").prop('disabled', true);
                $("#video").show();
                $("#image").hide();
                $("#video").find("*").prop('disabled', false);

            }
        }

    </script>
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