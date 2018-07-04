@extends('layout.adminmaster')
@section('title','Edit Slider')
@section('page_header','Edit Slider')
@section('page_header_desc','Edit Slider Here')
@section('curreny_page','Edit Slider')
@section('main-content')
 <div class="page-content">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title"> Edit Slider</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-primary btn-xs" href="{{route('SliderIndex')}}"><i class="fa fa-arrow-left"></i> Back </a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">             {{ Form::model($slider, ['route' => ['UpdateSlider' , $slider->id], 'class' => 'form', 'method' => 'PUT' , 'files' => true ]) }}
            @include('backend.slider.form', ['btn' => 'Save', 'classes' => 'btn btn-primary'])
            {{ Form::close() }}
            </table>
        </div>
    </div>
@stop





