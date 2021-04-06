<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Forget Password</title>

	<base href="{{asset('assets/authentication')}}">
	<!-- icons -->
	<link href="authentication/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="authentication/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="authentication/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="authentication/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="authentication/img/favicon.ico" />
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Forget Password
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('authentication.login') }}">
							Sign in
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="authentication/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="authentication/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="authentication/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>


</html>