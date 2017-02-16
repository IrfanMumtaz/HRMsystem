@extends('layouts.home')
@section('brdCrmbTitle', 'Order Summary')
@section('brdCrmbLink', 'Dashboard / Order Summary')
@section('section')



	<h2 class="pageHeading">Order Summary</h2>
	<table class="summarTable">
		<tr>
			<th class="col-md-1 orderhead">Order No</th>
			<th class="col-md-2 orderhead">Education Level</th>
			<th class="col-md-1 orderhead">Service</th>
			<th class="col-md-5 orderhead">Topic</th>
			<th class="col-md-1 orderhead">Email</th>
			<th class="col-md-1 orderhead">Amount</th>
			<th class="col-md-1 orderhead">View</th>
		</tr>
		@if($summary)
			@foreach ($summary as $rec)
				<tr>
					<td>{{ $rec->orderID }}</td>
					<td>{{ $rec->educationLevel }}</td>
					<td>{{ $rec->serviceLevel }}</td>
					<td>{{ $rec->topicTitle }}</td>
					<td>{{ $rec->email }}</td>
					<td>{{ $rec->totalAmount }}</td>
					<td><a href='{{ url("order-preview/$rec->orderID/") }}'>View</a></td>
				</tr>
			@endforeach
		@else
			<tr>
				<td colspan="8">You do not have any order</td>
			</tr>
		@endif
	</table>            
@stop
