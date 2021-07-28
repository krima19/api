@extends('admin.common')
@section('content')
<!DOCTYPE html>
<html>
<head>


	<title>Edit Product </title>


	
</head>
<body>
	<div class="container">
		<h1 class="text-center">Edit Product</h1>
		<br>
		
<form class="form-horizontal" action="{{ url('/update-product',$product->id)}}" method="POST" enctype="multipart/form-data">
	<!-- @method('PUT') -->
		@csrf
		
	  <div class="form-group">
	    <label class="control-label col-sm-2" for="text">product name</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" name="pname" placeholder="Enter Category name" value="{{ $product->pname }}">
	    </div>
	  </div>

	 
	 <div class="form-group">
	    <label class="control-label col-sm-2" for="text">Category name</label>
	    <div class="col-sm-8">
	  <select name='catname' class="form-control" >
			
                @foreach($product['category'] as $item)

                <option value="{{ $item-> id }}" {{ (isset($product->catname) && $product->catname==$item->id)?'selected':' ' }} >{{ $item-> catname }}</option>
                @endforeach
      </select>
       </div>
	  </div>
	

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="text">product price</label>
	    <div class="col-sm-8">
	      <input type="text" class="form-control" name="price" value="{{ $product->price }}">
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="control-label col-sm-2" for="email">product image</label>

	    <div class="col-sm-8">
	    	<img style="height: 100px; width: 100px;" class="form-control" src="{{URL::to($product->image)}}" >
	      <input type="file" class="form-control" name="image" value="{{ $product->image }}">
	    </div>
	  </div>  
	 
	 
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-danger">Edit Product</button>
	    </div>
	  </div>
</form>
	</div>
</body>
</html>

@endsection