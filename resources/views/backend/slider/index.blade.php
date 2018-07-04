@extends('layout.adminmaster')
@section('title','Sliders')
@section('page_header','Sliders')
@section('page_header_desc','Sliders Here')
@section('curreny_page','Sliders')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Sliders</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddSlider')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($sliders->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Company Name</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($sliders as $slider)
                            <tr>
                                <td class="text-center">{{ $slider->id }}</td>
                                <td class="text-center">{{ $slider->title_en }}</td>
                                <td class="text-center">{{ $slider->title_ar }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($slider->img) }}" style="width: 50px; height: 50px;"></td>
                                <td class="text-center">{{ $slider->Entity['name'] }}</td>
                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditSlider',$slider->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                   
                                     <?php $r = $slider->id; ?>

                                    @include('backend.slider.delete')

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
@endsection
