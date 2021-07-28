<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href="{{ asset('/fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic')}}" rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('css/font.css')}}" type="text/css"/>
<link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{ asset('js/jquery2.0.3.min.js')}}"></script>
<style type="text/css">
    .footer
    {
    
       
      position: fixed;
      width: 100%;
      bottom: 0;
      

    }
    .padding
    {
        padding: 7px;


    }
</style>



</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

 <a class="logo" href="index.php">{{ Session::get('admin_name')}}</a>
   
    
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->


<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
       <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                <!-- <img alt="" src="{{ asset('images/2.png')}}"> -->
                <div class="padding">
                <span class="username"> {{ Session::get('admin_name')}}</span>
                <b class="caret"></b>
            </div>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                    <a class="active" href="{{URL::to('/user_detail')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                
                <li class="sub-menu">
                    <a class="active" href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a class="active" href="{{URL::to('/user_detail')}}">Customer Details</a></li>
						 <li><a  href="{{URL::to('/category')}}">category</a></li>
                         <li><a  href="{{URL::to('/orderview')}}">order</a></li>
					  <li><a  href="{{URL::to('/product')}}">Product</a></li>
                      <li><a  href="{{URL::to('/contactdetail')}}">contact</a></li>
                    </ul>
                </li>
              
                <li>
                    <a href="{{URL::to('/logout')}}">
                        <i class="fa fa-user"></i>
                        <span>logout</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<section id="main-content">
<section class="wrapper">
	
 <div class="panel panel-default">
  

</div>


<!-- main contain -->
@yield('content')


</section>
<br>
<br>
<br>
<br>
<br>

 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p class="text-center"> Design by Krima Ghetiya,Shreena Bhalodiya,Nancy Dudani.</p>
            </div>
          </div>
  <!-- / footer -->
</section>                 </div>
                        
                    </div>
                </div>
                
               
            </div>
</div>
</section>



<!--main content end-->
</section>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('js/scripts.js')}}"></script>
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('js/jquery.scrollTo.js')}}"></script>
</body>
</html>