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

<h1 align="center">MyOrder</h1>

	<table class="table table-striped">
		@if(isset($order) && !empty($order) && count($order)>0)
			<tr>
				<th>Order-ID</th>
				<th>Address</th>
				<th>Status</th>
				<th>Payment method</th>
				<th>Payment Status</th>
				<th>Action</th>
			</tr>
			@foreach($order as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->address }}</td>
				<td>{{ $item->status }}</td>
				<td>{{ $item->payment_method }}</td>
				<td>{{ $item->payment_status }}</td>
				<td><a href="/order-details/{{$item->id}}" class="btn btn-danger">View</a>
					@if($item->status=='processing' || $item->status=='pending')
                 	<a class="btn btn-danger" href="{{URL::to('/cancel_order/'.$item->id)}}">
                        <i>Cancel</i>  
                     </a>
                 @else
                  	<a class="btn btn-danger disabled" href="{{URL::to('/cancel_order/'.$item->id)}}">
                        <i>Cancel</i>  
                     </a>
                  
                @endif
				</td>
			</tr>
			@endforeach
		@else
			<tr><td colspan="6" align="center" >
			<img src="{{ asset('gif/giphy.gif')}}" alt="No GIF" >

			</td></tr>
			<tr><td align="center"><h1>Not Order Yet!!</h1></td></tr>
		@endif
	</table>
	
</body>
</html>

@endsection