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
<style type="text/css">
	/* td:nth-child(even) 
	{
		text-align: right;
  		
	} */
	.ordercalc
	{
		text-align: right;
	}
	
</style>
</head>
<body>
<?php
	$grand_total=0;
?>

<div class="container">
	<div class="row">

		<h1 class="col-md-12" align="center">order </h1>
		<div class="col-md-9">
			
			<table class="table table-striped">
			@if(isset($detail) && !empty($detail) && count($detail)>0)
				<tr>
					<th>Image</th>
					<th>Name</th>
					<th>Category</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
					
				</tr>
				@foreach($detail as $item)
					<tr>
						<td><img src="{{URL::to($item->image)}}" alt="news image" class="rounded mx-3" height="150px" width="200px" ></td>
					
						<td>{{$item->pname}}</td>
						<td>{{$item->catname}}</td>
						<!-- <td>{{$item->order_id}}</td> -->
						<!-- <td>{{$item->product_id}}</td> -->
						<td><i class="fa fa-inr" aria-hidden="true"></i> {{$item->price}}</td>
						<td>{{$item->quantity}}</td>

						<td><i class="fa fa-inr" aria-hidden="true"></i> {{ $total=($item->price*$item->quantity)  }}</td>
						<!-- <td>{{$item->total}}</td> -->
						<?php

							$grand_total=(float)$grand_total+$total;
						?>
					</tr>

				@endforeach
				
			@else
				<tr><td colspan="6" align="center" >
				
				</td></tr>
			@endif
			</table>
		</div>
		<div class="col-md-3">
			<table class="table table-striped ">
				<tr>
					<td>Sub Total</td>
					<td class="ordercalc"><i class="fa fa-inr" aria-hidden="true"></i> {{ isset($grand_total)?$grand_total:0 }}</td>
				</tr>
				<tr>
					<td>Discount</td>
					<td class="ordercalc" >0</td>
				</tr>
				<tr>
					<td>Shipping</td>
					<td class="ordercalc">0</td>
				</tr>
				<tr>
					<td>Total</td>
					<td class="ordercalc"><b><i class="fa fa-inr" aria-hidden="true"></i> {{ $grand_total }}</b></td>
				</tr>
			</table>
		</div>
	</div>
</div>
@endsection