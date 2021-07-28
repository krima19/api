@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>


	<title>Category Insert</title>


	
</head>
<body>
	<div class="container">
		<h1 class="text-center">Add Product</h1>
		<br>
<form class="form-horizontal" action="product_store" method="POST" enctype="multipart/form-data">
		@csrf
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="text">product name</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" name="pname" placeholder="Enter Category name">
	    </div>
	  </div>

	  
	 <div class="form-group">
	    <label class="control-label col-sm-2" for="text">Category name</label>
	    <div class="col-sm-8">
	  <select name='catname' class="form-control" >
			<option>Select Category</option>
                @foreach($cat as $item)
                <option value="{{ $item-> id }}">{{ $item-> catname }}</option>
                @endforeach
      </select>
       </div>
	  </div>
	

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="text">product price</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" name="price" placeholder="Enter Category name">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">product image</label>
	    <div class="col-sm-8">
	      <input type="file" class="form-control" name="image" placeholder="Enter Category name">
	    </div>
	  </div>  
	 
	 
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-danger">Add Product</button>
	    </div>
	  </div>
</form>
	</div>
</body>
</html>

@endsection