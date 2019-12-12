@extends('navbar.logout')

@section('content')

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form method="post">
					{{csrf_field()}}
				  	<legend>Login</legend>
				  	<div class="form-group">
				    <label for="userName">User Name</label>
				    <input type="text" class="form-control" name="userName" id="username" placeholder="User Name">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				    {{session('msg')}}
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
@endsection