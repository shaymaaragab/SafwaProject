@extends('layout.adminmaster')
@section('title','Events')
@section('page_header','Events')
@section('page_header_desc','Events Here')
@section('curreny_page','Events')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Events</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddEvent')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($events->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Time</th>
                            {{--<th class="text-center">Event Category</th>--}}
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($events as $event)
                            <tr>
                                <td class="text-center">{{ $event->id }}</td>
                                <td class="text-center">{{ $event->title_en }}</td>
                                <td class="text-center">{{ $event->title_ar }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($event->img) }}" style="width: 50px; height: 50px; " ></td>
                                <td class="text-center">{{ $event->date }}</td>
                                <td class="text-center">{{ $event->time }}</td>
                                {{--<td class="text-center"> {{//$event->Event_category->name_en}}</td>--}}


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('ViewEvent',$event->id)}}"><i class='fa fa-eye'>View</i></a>
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditEvent',$event->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                  
                                     <?php $r = $event->id; ?>

                                    @include('backend.event.delete')


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
