<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<base href="{{asset('assets/authentication')}}">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="authentication/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="authentication/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="authentication/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="authentication/css/util.css">
	<link rel="stylesheet" type="text/css" href="authentication/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					 

					<span class="login100-form-title p-b-34 p-t-27">
						forget password 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="username" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

				 

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							submit
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('authentication.login')}}">
							Sign In 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="authentication/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="authentication/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="authentication/vendor/bootstrap/js/popper.js"></script>
	<script src="authentication/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="authentication/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="authentication/vendor/daterangepicker/moment.min.js"></script>
	<script src="authentication/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="authentication/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="authentication/js/main.js"></script>

</body>
</html>