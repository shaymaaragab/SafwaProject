@extends('layout.adminmaster')
@section('title','Aboutus')
@section('page_header','Aboutus')
@section('page_header_desc','Aboutus Here')
@section('curreny_page','Aboutus')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">About us</h5>
                    <div class="ibox-tools pull-right">
                       
                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($aboutus->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Entity Name</th>
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($aboutus as $about)
                            <tr>
                                <td class="text-center">{{ $about->id }}</td>
                                <td class="text-center">{{ $about->Entity->name }}</td>
                                <td class="text-center">{{ $about->title_en }}</td>
                                <td class="text-center">{{ $about->title_ar }}</td>

                                <td class="text-center">
                                   
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditAboutus',$about->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    
                                    <?php $r = $about->id; ?>

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
