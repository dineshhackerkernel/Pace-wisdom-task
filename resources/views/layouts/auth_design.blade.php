<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Boiler Plate | @yield('title')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content=""/>
		<meta name="keywords" content="" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/waves.min.css')}}" > 
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/feather.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/themify-icons.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/icofont.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/pages.css')}}">
		<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		@stack('css')
	</head>
	<body themebg-pattern="theme1">
		<section class="login-block">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						@yield('content')
					</div>
				</div>
			</div>
		</section>
		
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery-ui.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.slimscroll.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/modernizr.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/css-scrollbars.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/common-pages.js')}}"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    	{!! Toastr::message() !!}
		@stack('js')
	</body>
</html>
