@extends('navbar.admin')

@section('content')
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		  	<legend>Edit Profile</legend>
		  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$user->name}}">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{$user->password}}">
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{$user->email}}">
		  </div>
		  <div class="form-group">
		    <label for="phone">Phone</label>
		    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{$user->phone}}">
		  </div>
		  <div class="form-group">
		    <label for="address">Address</label>
		    <textarea class="form-control" name="address" id="address" placeholder="address">{{$user->address}}</textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
@endsection