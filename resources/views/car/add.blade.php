@extends('navbar.admin')

@section('content')
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<form method="post" enctype="multipart/form-data">
			{{csrf_field()}}
		  	<legend>Add Car</legend>
		  	<div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
		  </div>
		  <div class="form-group">
		    <label for="catagory">Catagories</label>
		    <select class="form-control" name="catagory" id="catagory">
		    	@foreach($catagories as $catagorie)
		    	<option value="{{$catagorie->name}}">{{$catagorie->name}}</option>
		    	@endforeach
		    </select>
		  </div>
		  <div class="form-group">
		    <label for="details">Details</label>
		    <textarea class="form-control" name="details" id="details" placeholder="Details"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="price">Price</label>
		    <input type="number" class="form-control" name="price" id="price" placeholder="price">
		  </div>
		  	<div class="form-group">
		    <label for="image">Image Upload</label>
		    <input type="file" class="form-control" name="image" id="image">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
@endsection