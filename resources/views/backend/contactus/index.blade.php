@extends('layout.adminmaster')
@section('title','Contact Us')
@section('page_header','Contact Us')
@section('page_header_desc','Contact Us')
@section('curreny_page','Contact Us')
@section('main-content')
<div class="row">
	<div class="col-lg-12">
		<div class="box box-info">
			<div class="box-header">
				<h5 style="display: inline;" class="pull-left box-title">Contact Us</h5>

				<a href="{{ route('ExportContacts') }}" class="btn btn-primary btn-xs pull-right"> <i class="fa fa-cloud-download"></i></a>
			</div>
			<table class="table table-hover" id="catetable_search">
				@if(empty($contactus->toArray()))
				<div><br><br><br> <h2 class="text-center" style="color: red;">No Data</h2> <br><br><br> </div>
				@else
				<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Name</th>
					<th class="text-center">Email</th>
					<th class="text-center">Phone</th>
					<th class="text-center">Company</th>
					<th class="text-center">Age</th>
					<th class="text-center">Disabled Type</th>
					<th class="text-center">Weight</th>
					<th class="text-center">Source</th>

				</tr>
				</thead>
				<tbody id="list">
				@foreach($contactus as $contact)
				<tr>
					<td class="text-center">{{ $contact->id }}</td>
					<td class="text-center">{{ $contact->name }}</td>
					<td class="text-center">{{ $contact->email }}</td>
					<td class="text-center">{{ $contact->phone }}</td>
					<td class="text-center">{{ $contact->Entity->name }}</td>
					<td class="text-center">{{ $contact->age }}</td>
					<td class="text-center">{{ $contact->disabiltytype }}</td>
					<td class="text-center">{{ $contact->weight }}</td>
					@if($contact->how == 1)
					<td class="text-center">Existing customer</td>
					@elseif($contact->how == 2)
					<td class="text-center">another customer <br> ({{ $contact->namehow }})</td>
					@elseif($contact->how == 3)
					<td class="text-center">Web search</td>
					@elseif($contact->how == 4)
					<td class="text-center">Flyer</td>
					@elseif($contact->how == 5)
					<td class="text-center">News</td>
					@elseif($contact->how == 6)
					<td class="text-center">Exhibition</td>
                    @else
                    <td class="text-center">-</td>
					@endif

					<td class="text-center">
						<a type='button' style='margin-left: 5px;' class='btn btn-primary btn-xs' href="{{route('contactus.view',$contact->id)}}"><i class='fa fa-eye'>view</i></a>

						<?php $r = $contact->id;?>

						@include('backend.contactus.delete')


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
