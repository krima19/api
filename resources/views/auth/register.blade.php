@extends('hed')


@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{ asset('log/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->

    <link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/bootstrap/css/bootstrap.min.css')}} ">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('log/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}} ">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('log/fonts/iconic/css/material-design-iconic-font.min.css')}} ">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/animate/animate.css')}} ">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/css-hamburgers/hamburgers.min.css')}} ">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/animsition/css/animsition.min.css')}} ">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/select2/select2.min.css')}} ">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('log/vendor/daterangepicker/daterangepicker.css')}} ">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('log/css/util.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('log/css/main.css')}} ">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('log/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="{{ route('register') }}" method="POST" >
                    @csrf
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-cutlery"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Sign Up
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter name">

                         <input class="input100" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" required autocomplete="name" autofocus>
 

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <!-- <input class="input100" type="text" name="username" placeholder="Username"> -->
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                     <div class="wrap-input100 validate-input" data-validate = "Enter email">

                         <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" >

                         

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <!-- <input class="input100" type="text" name="username" placeholder="Username"> -->
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    

                    <div class="wrap-input100 validate-input" data-validate="Enter password">

                        <input id="password" class="input100" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                       <!--  <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                     <div class="wrap-input100 validate-input" data-validate="Enter password">

                        <input id="password-confirm" class="input100" type="password" class="form-control" name="password_confirmation" placeholder=" confirm Password" required autocomplete="new-password">

                                

                       <!--  <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                       
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Register
                        </button>

                        <!--  <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> -->

                              

                    </div>

                   
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{ asset('log/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{ asset('log/vendor/animsition/js/animsition.min.js')}} "></script>
<!--===============================================================================================-->
    <script src="{{ asset('log/vendor/bootstrap/js/popper.js')}} "></script>
    <script src="{{ asset('log/vendor/bootstrap/js/bootstrap.min.js')}} "></script>
<!--===============================================================================================-->
    <script src="{{ asset('log/vendor/select2/select2.min.js')}} "></script>
<!--===============================================================================================-->
    <script src="{{ asset('log/vendor/daterangepicker/moment.min.js')}} "></script>
    <script src="{{ asset('log/vendor/daterangepicker/daterangepicker.js')}} "></script>
<!--===============================================================================================-->
    <script src="{{ asset('log/vendor/countdowntime/countdowntime.js')}} "></script>
<!--===============================================================================================-->
    <script src="{{ asset('log/js/main.js')}} "></script>

</body>
</html>

@endsection
