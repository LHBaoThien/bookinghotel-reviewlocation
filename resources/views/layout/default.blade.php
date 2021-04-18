<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
    <title>@yield('title')</title>
    @include('layout.head_css')
    @yield('custom_css')
</head>

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        @include('layout.header')
        <!-- end header -->

        <!-- start page container -->
		<div class="page-container">
            <!-- start sidebar menu -->
                @include('layout.sidebar_menu')
			<!-- end sidebar menu -->

            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
						@yield('page-bar')
					</div>
                    @yield('page-content')
                </div>

            </div>
            <!-- end page content -->

            <!-- start chat sidebar -->
            @include('layout.sidebar_chat')
			<!-- end chat sidebar -->

        </div>
        <!-- end page container -->

        <!-- start footer -->
        @include('layout.footer')
        <!-- end footer -->
    </div>

    @include('layout.foot_script')
    @yield('custom_js')
</body>

</html>
