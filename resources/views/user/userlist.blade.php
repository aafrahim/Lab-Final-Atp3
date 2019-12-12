@extends('navbar.admin')

@section('content')
<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1>User List</h1>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Type</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Action</th>
				@foreach($users as $user)
			<tr>
			<td>{{ $user->name}}</td>
			<td>{{ $user->username }}</td>
			<td>{{ $user->usertype }}</td>
			<td>{{ $user->email }}</td>
			<td>{{ $user->phone }}</td>
			<td>{{ $user->address }}</td>
			<td> 
				<a href="{{ route('user.delete', $user->id) }}"> DELETE </a>
			</td>
		</tr>
	@endforeach
			</table>
		</div>
		<div class="col-md-1"></div>
		
	</div>
@endsection