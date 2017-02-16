@extends('layouts.home')
@section('brdCrmbTitle', 'User List')
@section('brdCrmbLink', 'Dashboard / User List')
@section('section')



	<h2 class="pageHeading">User List</h2>
	<table class="summarTable">
		<tr>
			<th class="col-md-1 orderhead">User Id</th>
			<th class="col-md-2 orderhead">User Name</th>
			<th class="col-md-1 orderhead">User Email</th>
			<th class="col-md-1 orderhead">User Phone</th>
			<th class="col-md-1 orderhead">User Skype</th>
			<th class="col-md-1 orderhead">User Aim</th>
			<th class="col-md-1 orderhead">Date</th>
		</tr>
		@if($userList)
			@foreach ($userList as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->phone }}</td>
					<td>{{ $user->skype }}</td>
					<td>{{ $user->aim }}</td>
					<td>{{ $user->created_at }}</td>
				</tr>
			@endforeach
		@else
			<tr>
				<td colspan="8">You do not have any registered user</td>
			</tr>
		@endif
	</table>            
@stop
