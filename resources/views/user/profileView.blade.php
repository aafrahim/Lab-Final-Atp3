@extends('navbar.admin')

@section('content')
<br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1>Profile</h1>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
			<table class="table table-striped">
				<tr>
					<th>Name</td>
					<td>:</td>
					<td>{{$user->name}}</td>
				</tr>
				<tr>
					<th>User Name</td>
					<td>:</td>
					<td>{{$user->username}}</td>
				</tr>
				<tr>
					<th>Password</td>
					<td>:</td>
					<td>{{$user->password}}</td>
				</tr>
				<tr>
					<th>Address</td>
					<td>:</td>
					<td>{{$user->address}}</td>
				</tr>
				<tr>
					<th>Email</td>
					<td>:</td>
					<td>{{$user->email}}</td>
				</tr>
				<tr>
					<th>Phone</td>
					<td>:</td>
					<td>{{$user->phone}}</td>
				</tr>
				<tr>
					<th>Type</td>
					<td>:</td>
					<td>{{$user->usertype}}</td>
				</tr>
				<tr>
					<th></td>
					<td>:</td>
					<td>
						<a href="{{route('admin.profileEdit', $user->id)}}" class="btn btn-primary" role="button">Edit</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="col-md-2"></div>
		
	</div>
@endsection