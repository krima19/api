@extends('hed')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}} ">

<!-- jQuery library -->
<script src="{{ asset('bootstrap/js/jquery.min.js')}} "></script>

<!-- Popper JS -->
<script src="{{ asset('bootstrap/js/popper.min.js')}} "></script>

<!-- Latest compiled JavaScript -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}} "></script> 
</head>
<body>
<center>	<h1>Your Order Details</h1></center>
<table class=" container table table-hover">
	<tr>
		<th>Image</th>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Total</th>
		
	</tr>
		@foreach($pro as $item)

		<tr>
			<td><img src="{{URL::to($item->image)}}" alt="news image" class="rounded mx-3" height="150px" width="200px" ></td>
		
			<td>{{$item->pname}}</td>
		
			<td><i class="fa fa-inr" aria-hidden="true"></i> {{$item->price}}</td>

			<td>{{$item->quantity}}</td>

			<td> <i class="fa fa-inr" aria-hidden="true"></i> {{$item->total}}</td>

			
		</tr>


		@endforeach
							
	
</table>
<div class="container">
<hr>
<h3>
<div class="row bg-secondary text-white p-3">
	<div class="col-sm-6">
	Total:
	</div>
	<div class="col-sm-6 text-right pr-5 ">

	<i class="fa fa-inr" aria-hidden="true"></i> {{$total_price}}
	

	</div>
</div>
</h3>
<hr>
</div>



<div class=" container jumbotron">
<center><h1>Fill Customer Detail</h1></center>
<form action="/orderplace" method="POST" accept-charset="utf-8">
	@csrf
	 <div class="form-group ">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control col-lg-6" name="address" rows="3"></textarea>
  </div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" value=" Online payment" >
  <label class="form-check-label" >
    Online Payment
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" value="case">
  <label class="form-check-label" >
    Cash on Delivery
  </label>
</div>
<br>
<br>
<input type="submit" class="btn btn-outline-danger btn-lg" name="submit" value="Check-Out"  data-toggle="modal" data-target="#myModal">

</form>
<center>
 <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title">Thanks for Order!</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
	        <h3>
	         	Order is successfully Booked :)
	        </h3>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
</center>
</div>
</body>
</html>

@endsection