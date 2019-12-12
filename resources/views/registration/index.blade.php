@extends('navbar.logout')

@section('content')
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		  	<legend>Registration</legend>
		  	<div class="form-group">
		    <label for="title">Name</label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="uasername">User Name</label>
		    <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="category">User Type</label>
		    <select class="form-control" name="usertype" id="usertype">
		    	<option value="Member">Member</option>
		    	<option value="Admin">Admin</option>
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="phone">Phone</label>
		    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
		  </div>
		  <div class="form-group">
		    <label for="address">Address</label>
		    <textarea class="form-control" name="address" id="address" placeholder="address"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
</div>
@endsection