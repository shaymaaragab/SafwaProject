@extends('layout.adminmaster')
@section('title','Media')
@section('page_header','Media')
@section('page_header_desc','Media Here')
@section('curreny_page','Media')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Media</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddMedia')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($medias->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Album</th>
                            <th class="text-center">Type</th>
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($medias as $media)
                            <tr>
                                <td class="text-center">{{ $media->id }}</td>

                                <td class="text-center">{{  $media->Album['name_en']}}</td>
                                <td class="text-center">
                                    @if($media->flag==1)
                                        Video
                                     @else
                                        Image
                                    @endif
                                </td>
                                <td class="text-center">{{ $media->title_en }}</td>
                                <td class="text-center">{{ $media->title_ar }}</td>

                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditMedia',$media->id)}}"><i class='fa fa-edit'>Edit</i></a>

                                     <?php $r = $media->id; ?>

                                    @include('backend.media.delete')


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
