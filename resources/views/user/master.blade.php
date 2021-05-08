<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">

    {{-- <base href="{{asset('public/user')}}"> --}}
	<title>@yield('title')</title>
	{{-- {{ asset('       ') }} --}}
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="{{ asset('user/css/prettyPhoto.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('user/css/custom.css') }}" type="text/css" media="screen" />
	<link rel="shortcut icon" href="{{ asset('user/images/favicon.ico') }}" />

	<script type="text/javascript" src="{{ asset('user/js/jquery-1.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/css3-mediaqueries.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.prettyPhoto.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.raty.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/sequence.jquery-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/sequence.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/selectnav.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/scripts.js') }}"></script>
	<script type="text/javascript">
		@yield('script')
	</script>
</head>
<body>
	<!--header-->
	@include("user.includes.header")
	<!--//header-->
	@yield('content')
	<!--footer-->
    @include("user.includes.footer")
    <!--//footer-->
	@yield('scriptLogin')
	@yield('scriptRegister')
	@yield('scriptEnd')
</body>
</html>
