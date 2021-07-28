@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>


	<title>Category Edit</title>


	
</head>
<body>
	<div class="container">
		<h1 class="text-center">Add Category</h1>
	<form class="form-horizontal" action="{{ route('catcon.update', $cat->id) }}" method="POST">
		 @method('PUT')
		@csrf
		
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">category name</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" name="catname" value="{{$cat->catname}}">
	    </div>
	  </div>
	 
	 
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-danger">Edit</button>
	    </div>
	  </div>
	</form>
	</div>
</body>
</html>

@endsection