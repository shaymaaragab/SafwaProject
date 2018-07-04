@extends('layout.adminmaster')
@section('title','Applicants')
@section('page_header','Applicants')
@section('page_header_desc','Applicants Here')
@section('curreny_page','Applicants')
@section('main-content')

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header">
                    <h5 style="display: inline;" class="pull-left box-title">Applicants</h5>
                </div>
                <table class="table table-hover" id="catetable_search">
                    @if(empty($applicants->toArray()))
                        <div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
                    @else
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">CV</th>
                            <th class="text-center">Job</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="list">
                        @foreach($applicants as $applicant)
                            <tr>
                                <td class="text-center">{{ $applicant->id }}</td>
                                <td class="text-center">{{ $applicant->name }}</td>
                                <td class="text-center">{{ $applicant->email }}</td>
                                <td class="text-center">{{ $applicant->phone }}</td>
                                <td class="text-center"><a href="{{url('/').$applicant->cv}}" class="btn btn-info btn-xs" download> <i class="fa fa-download"></i> </a></td>
                                <td class="text-center">@if(isset($applicant->Job)){{ $applicant->Job->title_en }} @endif</td>
                                <th>
	                                <?php $r = $applicant->id; ?>

                                    @include('backend.applicant.delete')
                                </th>
                            </tr>
                        @endforeach

                        </tbody>
                    @endif

                </table>
            </div>
        </div>
    </div>
@endsection
