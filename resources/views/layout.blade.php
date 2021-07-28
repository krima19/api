<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Humburger Restaurants Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Humburger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    
    <link rel="stylesheet" href="{{ asset('client/css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('client/css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="{{ asset('client/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="{{ asset('client///fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,700')}}" rel="stylesheet">
    <link href="{{ asset('client///fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700')}}" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
        <div class="layer">
            <!-- header -->
            <header>
                <div class="container-fluid px-lg-5">
                    <!-- nav -->
                    <nav class="py-4 d-lg-flex">
                        <div id="logo">
                            <h1> <a href="index.html"><span class="fa fa-align-center" aria-hidden="true"></span>Food Order</a></h1>
                        </div>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mt-2 ml-auto">
                            <li class="active"><a href="/">Home</a></li>
                            
                            <li><a href="/menu" class="scroll">Menu</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                               <!--  <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul class="inner-ul">
                                    <li><a class="scroll" href="/gallary">Gallery</a></li>
                                    <li><a href="/login" class="scroll">Login</a></li>
                                    <li><a href="/menu" class="scroll">Menu</a></li>
                                </ul>
                            </li> -->
                            <li><a href="/contact" class="scroll">Contact</a></li>
                            
                            
                            
                            @if(Auth()->id())

                                <li><a href="/show-cart" class="scroll"><span class="fa fa-shopping-cart"></span> Cart</a></li>

                                  <li><a href="/myorder" class="scroll"> My-Order</a></li>

                                <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a></li>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <li>
                                        <?php
                                        $str=Auth::user()->name;
                                        ?>
                                        <a aria-haspopup="true">
                                            <span class="badge badge-pill badge-light p-2 font-weight-bold  ">
                                                <h6> {{ $str }}</h6>
                                            </span>
                                        </a>
                                    </li>
                           
                            
                            @else
                                <li><a href="{{ route('login') }}" class="scroll">Login</a></li>

                                <li><a href="{{ route('register') }}" class="scroll">Register</a></li>
                            @endif
                            

 


                           
                        </ul>
                    </nav>
                    <!-- //nav -->
                </div>
            </header>
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info-w3layouts text-center">
                    <h3>New Taste</h3>
                    <div class="read-more">
                        <a href="gallary" class="read-more scroll">Gallary </a> </div>
                </div>
                <div class="row order-info">
                    <div class="middle mt-3 col-md-6 text-left">
                        <ul class="social mb-4">
                            <li><a href="#"><span class="fa fa-facebook icon_facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter icon_twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus icon_google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin icon_linkedin"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble icon_dribbble"></span></a></li>
                        </ul>

                    </div>
                    <div class="middle-right mt-md-3 col-md-6 text-right">
                        <h6><span class="fa fa-phone"></span> Order Now : 123456789</h6>
                    </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
    <!--// mian-content -->
    
@yield('content')
 
 

   
    <!-- footer -->
    <footer class="footer-content">
        <div class="layer footer">
            <div class="container-fluid">
                <div class="row footer-top-inner-w3ls">
                    <div class="col-lg-4 col-md-6 footer-top mt-md-0 mt-sm-5">
                        <h2>
                            <a href="index.html"><span class="fa fa-align-center" aria-hidden="true"></span>Food Order</a>
                        </h2>
                        <p class="my-3">The Online Ordering System can be defined as a simple and convenient way for customers to purchase food online, without having to go to the restaurant.</p>
                        <p>
                           Therefore, as per this system, the customer visits the restaurant’s app or website.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Opening Hours</h3>
                            <hr>
                            <ul class="list-info-w3pvt last-w3ls-contact mt-lg-4">
                                <li>
                                    <p> Monday - Friday 08.00 am - 10.00 pm</p>

                                </li>
                                <li class="my-2">
                                    <p>Saturday 08.00 am - 10.00 pm</p>

                                </li>
                                <li class="my-2">
                                    <p>Sunday 08.00 am - 10.00 pm</p>

                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                        <div class="footer-w3pvt">
                            <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                            <hr>
                            <div class="last-w3ls-contact">
                                <p>
                                    <a href="mailto:example@email.com">krimaghetiya19@gmail.com</a><br>
                                    <a href="mailto:example@email.com">bhalodiyashreena@gmail.com</a><br>
                                    <a href="mailto:example@email.com">nancydudani2310@gmail.com</a>
                                </p>
                            </div>
                            <div class="last-w3ls-contact my-2">
                                <p>+ 456 123 7890</p>
                            </div>
                            <div class="last-w3ls-contact">
                                <p>Ring Road,
                                    <br>Rajkot</p>
                            </div>
                        </div>
                    </div>

                </div>

                <p class="copy-right-grids text-li text-center my-sm-4 my-4"> DEVELOPED BY:
                    <br>Krima Ghetiya
                    <br>Shreena Bhalodiya
                    <br>Nancy Dudani
                </p>
                <div class="w3ls-footer text-center mt-4">
                    <!-- <ul class="list-unstyled w3ls-icons">
                        <li>
                            <a href="#">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa fa-vk"></span>
                            </a>
                        </li>
                    </ul> -->
                </div>
                <div class="move-top text-right"><a href="#home" class="move-top"> <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a></div>
            </div>
            <!-- //footer bottom -->
        </div>
    </footer>
    <!-- //footer -->


</body>

</html>
