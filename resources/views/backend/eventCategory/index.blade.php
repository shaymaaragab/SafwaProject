@extends('layout.adminmaster')
@section('title','Event Category')
@section('page_header','Event Category')
@section('page_header_desc','Event Category Here')
@section('curreny_page','Event Category')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Event Category</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddEventCat')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($event_categorys->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Name In Arabic</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($event_categorys as $category)
                            <tr>
                                <td class="text-center">{{ $category->id }}</td>
                                <td class="text-center">{{ $category->name_en }}</td>
                                <td class="text-center">{{ $category->name_ar }}</td>


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditEventCat',$category->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                                                        
                                     <?php $r = $category->id; ?>

                                    @include('backend.eventcategory.delete')



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
