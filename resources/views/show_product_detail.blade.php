@extends('hed')
@section('content')    
<center> 
   <div class=" padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								@foreach($pro_del as $pro)
								<br>
								<img src="{{URL::to($pro->image)}}" alt="" width="300px" height="300px" />
								
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$pro->pname}}</h2>
								
								<img src="{{URL::to('frontend/images/product-details/rating.png')}}" alt=""  />
								<span>
									<p><b>Price: <i class="fa fa-inr" aria-hidden="true"></i> </b><span>{{$pro->price}}.00</span>
										<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								
								<p><b>Category:</b> {{$pro->category}}</p>
							<form action="{{url('/add-to-cart')}}" class="form-group" method="POST">
										{{ csrf_field() }}
										<p>
										<label >Quantity:</label>
									<input name="qty" type="text" class="form-control col-sm-2 d-inline" value="1" />
										</p>
										<input type="hidden" name="product_id" value="{{$pro->id}}">
										<input type="hidden" name="product_price" value="{{$pro->price}}">
										
										<br>
										<button type="submit" class="btn btn-secondary">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
									</form>
								</span>
								
								
								
							</div><!--/product-information-->
						</div>
						@endforeach
					</div><!--/product-details-->
					
				
   
   </center> 
    


@endsection