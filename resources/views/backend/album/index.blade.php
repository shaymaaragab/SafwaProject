@extends('layout.adminmaster')
@section('title','Album')
@section('page_header','Album')
@section('page_header_desc','Album Here')
@section('curreny_page','Album')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Album</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddAlbum')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($album->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">name In English</th>
                            <th class="text-center">name In Arabic</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($album as $album)
                            <tr>
                                <td class="text-center">{{ $album->id }}</td>
                                <td class="text-center">{{ $album->name_en }}</td>
                                <td class="text-center">{{ $album->name_ar }}</td>


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditAlbum',$album->id)}}"><i class='fa fa-edit'>Edit</i></a>

                                    <?php $r = $album->id; ?>

                                    @include('backend.album.delete')


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
