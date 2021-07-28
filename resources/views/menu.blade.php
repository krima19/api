@extends('hed')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        .tab-main label {
                margin: 0px 0px 40px;
                /* display: inline-block; */
                padding: 15px 100px;
                font-weight: 600;
                text-align: center;
                color: #2c2c2f;
                border: none;
                background: #eff0f1;
                text-transform: uppercase;
                font-size: 0.9em;
        }
    </style>
</head>
<body>

</body>
</html>
  <!--/mid-sec-->
    <section class="mid-sec py-5" id="menu">
        <div class="container-fluid py-lg-5">
            <div class="header pb-lg-3 pb-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3">Bigger & Bolder</h3>
            </div>
            <div class="middile-inner-con">
                <div class="tab-main mx-auto text-center">
        

            @foreach($menu as $item)
                    <!-- <input id="tab1" type="radio" name="tabs"> -->

                    <label for="tab1"><span class=" fa fa-align-center " aria-hidden="true"></span><a href='dis/catname={{ $item->id }}' >{{ $item->catname }}</a></label>
            @endforeach
        
                   

                  <!--   <input id="tab2" type="radio" name="tabs">
                    <label for="tab2"><span class="fa fa-bolt" aria-hidden="true"></span> Fries</label>

                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3"><span class="fa fa-bitbucket" aria-hidden="true"></span> Drinks</label> -->

                         
                   
                    
                    </div>
                </div>
            </div>
        </section>
    <!--//mid-sec-->



       <!--/order-now-->
    <section class="order-sec pb-5 pt-md-0 pt-5" id="order">
        <div class="container py-lg-3">
            <div class="test-info text-center">
                <h3 class="tittle order">
                    <span>Free Delivery With</span>Burger Of the Day</h3>

                <div class="row mt-lg-4 mt-3">
                    <div class="col-md-6 order-left-content text-right">
                        <h4>$99</h4>
                    </div>
                    <div class="col-md-6 order-right-content text-left">
                        <ul class="tic-info list-unstyled">
                            <li>

                                <span class="fa fa-long-arrow-right mr-2"></span> Integer sit amet mattis quam

                            </li>
                            <li>

                                <span class="fa fa-long-arrow-right mr-2"></span> Praesent ullamcorper dui turpis

                            </li>
                            <li>

                                <span class="fa fa-long-arrow-right mr-2"></span> Integer sit amet mattis quam

                            </li>

                        </ul>
                    </div>
                    <div class="read-more mx-auto text-center">
                        <a href="#contact" class="read-more scroll">Read More </a> </div>
                </div>
            </div>
        </div>
    </section>
    <!--//order-now-->

@endsection