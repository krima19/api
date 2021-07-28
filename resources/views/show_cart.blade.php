@extends('hed')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}} "> -->

<!-- jQuery library -->
<!-- <script src="{{ asset('bootstrap/js/jquery.min.js')}} "></script> -->

<!-- Popper JS -->
<!-- <script src="{{ asset('bootstrap/js/popper.min.js')}} "></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js')}} "></script>  -->
</head>
<body>
	<!-- {{  var_dump($pro) }} -->

	<h1 align="center">Your Cart</h1>
	<table class="table table-striped ">
	@if(isset($pro) && !empty($pro) && count($pro)>0)
		<tr>
			<th>Image</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($pro as $item)
			<tr>
				<td><img src="{{URL::to($item->image)}}" alt="news image" class="rounded mx-3" height="150px" width="200px" ></td>
			
				<td>{{$item->pname}}</td>
			
				<td><i class="fa fa-inr" aria-hidden="true"></i> {{$item->price}}</td>
				<td>
				<form action="{{ URL::to('update-cart') }}" method="post">
					{{ csrf_field()}}
					<input class="form-control-danger" type="text" name="qty" value="{{$item->quantity}}" autocomplete="off" size="2">
					<input  type="hidden" name="rowId" value="{{$item->id}}"  >
					<input  type="hidden" name="price" value="{{$item->price}}"  >
					<input  type="hidden" name="total" value="{{$item->total}}"  >
					<input type="submit" name="submit" value="update" class="btn btn-dark">
				</form>
				</td>
				<td><i class="fa fa-inr" aria-hidden="true"></i> {{$item->total}}</td>

				<td>
					<a class="btn btn-danger" href="{{ URL::to('delete-to-cart') }}/{{$item->id}}">Remove from Cart</a>
				</td>
			</tr>

		@endforeach
		<tr><td colspan="6" align="center" >
			<a href="/order" class="btn btn-outline-danger btn-lg">Order Now</a>
		</td></tr>
	@else
		<tr><td colspan="6" align="center" >
		<img src="{{ asset('gif/empty_cart.gif')}}" alt="No GIF" >
		</td></tr>
	@endif
	</table>
		

		</body>
		</html>

@endsection