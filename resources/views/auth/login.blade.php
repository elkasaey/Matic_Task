<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tag Description -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="format-detection" content="telephone=no">
    <!-- Meta Tag Description -->

    <!-- Page Title Text -->
    <title>Login</title>
    <!-- Page Title Text -->

    <!--Fevicon Icon Start-->
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <!--Fevicon Icon End-->

    <!--Font Description-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--Font Description-->

    <!-- Css Part Start -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/material-icon/materialdesignicons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font/font-awesome/font-awesome.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/plugin/AdminLTE.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Css Part End -->

    <!--[if lt IE 9]>
        <script type="text/javascript" src="assets/js/html5shiv.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
   <![endif]-->

</head>

<body class="skin-blue sidebar-mini">
    <!-- <Start Of Header Section> -->


    <!-- <End Of Body Section> -->

    <!-- Javascript Start Here -->
    <script src="{{asset('js/plugin/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/plugin/popper.min.js')}}"></script>
    <script src="{{asset('js/plugin/bootstrap.min.js')}}"></script>
    <!-- <script src="{{asset('js/plugin/adminlte.min.js')}}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>

    <!-- Javascript End Here -->

    <div class="log-in">
		<div class="container-login">
                <div class="wrap-login">
				<form class="login-form validate-form" method="POST" action="{{ route('login.custom') }}">
          @csrf
					<span class="login-form-title p-b-48">
						<img src="{{asset('images/mobio-logoaa.png')}}">
					</span>
                    <div class="log-head">
                            <h2>Login</h2>
                        </div>
					<div class="wrap-input validate-input" data-validate = "Valid phone is: +201**********">
                            <!-- <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email"> -->
                            <input type="tel" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Phone">
          @if ($errors->has('mobile_no'))
                  <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
          @endif
					</div>

					<div class="wrap-input validate-input" data-validate="Enter password">

                            <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                    </div>
                    <div class="contact-form-checkbox">
							<input class="input-checkbox" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox" for="ckb1">
								Remember me
                            </label>
                        </div>

					<div class="container-login-form-btn">
						<div class="wrap-login-form-btn">
							<div class="login-form-bgbtn"></div>
							<button class="login-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<!-- <div class="text-center">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="sign-up.html">
							Sign Up
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>

</body>

</html>
