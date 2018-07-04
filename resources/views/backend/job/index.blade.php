@extends('layout.adminmaster')
@section('title','Jobs')
@section('page_header','Jobs')
@section('page_header_desc','Jobs Here')
@section('curreny_page','Jobs')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Jobs</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddJob')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($jobs->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            {{--<th class="text-center">Job Category</th>--}}
                            {{--<th class="text-center">Entity Name</th>--}}
                            <th class="text-center">Title In English</th>
                            <th class="text-center">Title In Arabic</th>
                            <th class="text-center">Location </th>
                            <th class="text-center">options</th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($jobs as $job)
                            <tr>

                                <td class="text-center">{{ $job->id }}</td>
                                {{--<td class="text-center">{{ //$job->Job_category->name_en }}</td>--}}
                                {{--<td class="text-center">{{ $job->Entity->name }}</td>--}}
                                <td class="text-center">{{ $job->title_en }}</td>
                                <td class="text-center">{{ $job->title_ar }}</td>
                                <td class="text-center">{{ $job->location }}</td>
                                <td class="text-center">
                                    <span id="spanon{{$job->id}}" >
                                    @if($job->flag==0)

                                            <button id="on"  onclick="on_off(this,'{{ $job->id }}','{{$job->flag}}')" class="btn btn-xs btn-success">
                                                <i class="fa fa-thumbs-up"></i> ON
                                            </button>

                                            @else
                                        <button id='off' onclick="on_off(this,'{{ $job->id }}')" class="btn btn-xs btn-danger"><i class="fa fa-thumbs-down"></i> OFF</button>
                                    @endif
                                    </span>
                                        <a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('ViewJob',$job->id)}}"><i class='fa fa-eye'>View</i></a>
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditJob',$job->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                    
                                     <?php $r = $job->id; ?>

                                    @include('backend.job.delete')


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
@section('js')
   <script>
       function on_off(elem,id,flag)
       {
           id_name="spanon"+id;
           if(flag==0)
           {
               $('#'+id_name).html("<button id='on'  onclick='on_off(this,"+id+",1)' class='btn btn-xs btn-danger'><i class='fa fa-thumbs-down'></i> OFF </button>");
                ajax_fun(id,1)
           }else
           {
               $('#'+id_name).html("<button id='on'  onclick='on_off(this,"+id+",0)' class='btn btn-xs btn-success'><i class='fa fa-thumbs-up'></i> ON </button>");
               ajax_fun(id,0)
           }

       }
       function ajax_fun(id,flag)
       {
           $.ajax({
               type: "POST",
               url:  '{{route('job.ajax')}}',
               data: {_token:'{{csrf_token()}}',id: id,flag:flag },
               dataType:'JSON',

               success: function(data)
               {
                  // alert('success')
               },
               error: function(XMLHttpRequest, textStatus, errorThrown) {
                   alert("some error");
               }
           });
       }
   </script>

@endsection
