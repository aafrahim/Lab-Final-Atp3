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
					<th>Catagory</th>
					<th>Details</th>
					<th>Price</th>
					<th>Action</th>
				@foreach($cars as $car)
			<tr>
			<td>{{ $car->name}}</td>
			<td>{{ $car->catagory }}</td>
			<td>{{ $car->details }}</td>
			<td>{{ $car->price }}</td>
			<td> 
				<a href="{{ route('car.delete', $car->id) }}"> DELETE </a>
			</td>
		</tr>
	@endforeach
			</table>
		</div>
		<div class="col-md-1"></div>
		
	</div>
@endsection