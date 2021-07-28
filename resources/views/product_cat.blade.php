@extends('hed')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css" media="screen">
        .rows
        {
            display: inline-block;
            margin: 25px;
        }
        .ab-content img 
        {
            border-radius: 20px;
            
        }
        .tab-wrap
        {
            padding: 4em 4em;
        }
    </style>
</head>
<body>

</body>
</html>
  <!--/mid-sec-->
    <!-- <section class="mid-sec py-5" id="menu"> -->
        <!-- <div class="container-fluid py-lg-5"> -->
            <div class="header pb-lg-3 pb-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">Menu Items...</h3>
            </div>
                    <center>
                        @foreach($pro as $product)

                                <div class="ab-info rows ">
                                    <!-- <div class="ab-content "> -->
                                    <div class="content ">
                                        <!-- <div class="col-lg-3 "> -->
                                        <div class="tab-wrap  ">
                                            <img src="{{URL::to($product->image)}}" alt="news image" width="100px" height="100px">
                                            <div class="ab-info-con">
                                                <h4>{{$product->pname}}</h4>
                                                <p class="price"><i class="fa fa-inr" aria-hidden="true"></i> {{$product->price}}</p>
                                                <a href="show_product/{{$product->id}}" class="btn btn-dark">View Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                    @endforeach
                   </center>
              
                    
                    </div>
                </div>
            </div>
        </section>
   
 
@endsection