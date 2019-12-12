@extends('navbar.admin')

@section('content')
<h1>Home</h1>
<br>
	<br><br>
	
		@foreach($catagories as $catagorie)
			<h2>{{$catagorie->name}}</h2>
		 @foreach($cars as $car)
		 <div class="row">
		 	@if($catagorie->name == $car->catagory)

		 	<div class="col-md-4" style="height: 220px">
			<a href="#">
			<img src="/cars/{{$car->image}}" width="90%" height="200px">
			</a>
			</div>
		 	@endif
		 </div>
		 @endforeach
		 <br><br>
	@endforeach
	
@endsection