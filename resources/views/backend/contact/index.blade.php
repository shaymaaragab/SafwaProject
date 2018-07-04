@extends('layout.adminmaster')
@section('title','Contacts')
@section('page_header','Contacts')
@section('page_header_desc','Contacts Here')
@section('curreny_page','Contacts')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Contacts</h5>
                    <div class="ibox-tools pull-right">
                        <a style="margin-left: 5px;"  class="btn btn-success btn-xs" href="{{route('AddContact')}}"><i class="fa fa-plus"></i> add new</a>

                    </div>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($contacts->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name In English</th>
                            <th class="text-center">Name In Arabic</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Position In English</th>
                            <th class="text-center">Position In Arabic</th>
                            {{--<th class="text-center">Entity</th>--}}
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($contacts as $contact)
                            <tr>
                                <td class="text-center">{{ $contact->id }}</td>
                                <td class="text-center">{{ $contact->name_en }}</td>
                                <td class="text-center">{{ $contact->name_ar }}</td>
                                <td class="text-center">{{ $contact->phone }}</td>
                                <td class="text-center">{{ $contact->email }}</td>
                                <td class="text-center"><img alt="" src="{{ asset($contact->img ) }}" style="width: 50px; height: 50px; " ></td>
                                <td class="text-center">{{ $contact->position_en }}</td>
                                <td class="text-center">{{ $contact->position_ar }}</td>
                                {{--<td class="text-center">{{ $contact->Entity->name }}</td>--}}


                                <td class="text-center">
                                    <a type='button' style='margin-left: 5px;' class='btn btn-warning btn-xs' href="{{route('EditContact',$contact->id)}}"><i class='fa fa-edit'>Edit</i></a>
                                   
                                     <?php $r = $contact->id; ?>

                                    @include('backend.contact.delete')


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
