@extends('layout.adminmaster')
@section('title','Blogs')
@section('page_header','Blogs')
@section('page_header_desc','Blogs Here')
@section('curreny_page','Blogs')
@section('main-content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Blogs</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddBlog')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($blogs->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">User</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($blogs as $blog)
                            <tr>
                                <td class="text-center">{{ $blog->id }}</td>
                                <td class="text-center">{{ $blog->title_en }}</td>
                                <td class="text-center">{{ $blog->title_ar }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($blog->img) }}" style="width: 50px; height: 50px;"></td>
                                <td class="text-center">{{auth()->user()->name}}</td>


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('ViewBlog',$blog->id)}}"><i class='fa fa-eye'>View</i></a>
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditBlog',$blog->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    

                                     <?php $r = $blog->id; ?>

                                    @include('backend.blog.delete')


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
