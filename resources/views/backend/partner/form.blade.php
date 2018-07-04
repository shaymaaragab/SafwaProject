@include('shared.error')

<div class="form-group has-float-label col-sm-12">
    <label for="name_en">Name In English <span class="asterisk">*</span></label>
    {{ Form::text('name_en', old('name_en'), ['placeholder' => 'Name In English', 'class' => 'form-control ' . ($errors->has('name_en') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_en') ? $errors->first('name_en') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="name_ar">Name In Arabic <span class="asterisk">*</span></label>
    {{ Form::text('name_ar', old('name_ar'), ['placeholder' => 'Name In Arabic', 'class' => 'form-control ' . ($errors->has('name_ar') ? 'redborder' : '') ]) }}
    <small class="text-danger">{{ $errors->has('name_ar') ? $errors->first('name_ar') : '' }}</small>
</div>


<div class="form-group has-float-label col-sm-12">
    <label for="img">Image<span class="asterisk"></span></label>
    <br><span style="color: red; font-weight: bold; font-size: 15px;">(Ideal Size : 100 * 100 px )</span><br>

    <img id="blah" alt="" src="@if(isset($partner)){{ asset($partner->img)}}@endif" width="100px" height="100px" >
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