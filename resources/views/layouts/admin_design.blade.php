<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Boiler Plate Admin | @yield('title')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="" />
		<meta name="keywords" content="">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/waves.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/feather.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/chartist.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/icofont.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/select2.min.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/multi-select.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/themify-icons.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/font-awesome.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/dataTables.bootstrap4.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/responsive.bootstrap4.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/buttons.dataTables.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/style.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/widget.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/pages.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/font-awesome-n.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('admin_and_subadmin_css_js/css/component.css')}}">
		<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
		@stack('css')
	</head>
	<body>
		<div class="loader-bg">
			<div class="loader-bar"></div>
		</div>
		<div id="pcoded" class="pcoded">
			<div class="pcoded-overlay-box"></div>
			<div class="pcoded-container navbar-wrapper">
				<nav class="navbar header-navbar pcoded-header">
					<div class="navbar-wrapper">
						<div class="navbar-logo">
							<a href="index.html">
								<img class="img-fluid" src="{{asset('public_folder/images/logo.png')}}" alt="Theme-Logo" />
							</a>
							<a class="mobile-menu" id="mobile-collapse" href="#!">
								<i class="feather icon-menu icon-toggle-right"></i>
							</a>
							<a class="mobile-options waves-effect waves-light">
								<i class="feather icon-more-horizontal"></i>
							</a>
						</div>
						<div class="navbar-container container-fluid">
							<ul class="nav-left">
								<li class="header-search">
									<div class="main-search morphsearch-search">
										<div class="input-group">
											<span class="input-group-prepend search-close">
												<i class="feather icon-x input-group-text"></i>
											</span>
											<input type="text" class="form-control" placeholder="Enter Keyword">
											<span class="input-group-append search-btn">
												<i class="feather icon-search input-group-text"></i>
											</span>
										</div>
									</div>
								</li>
							</ul>
							<ul class="nav-right">
								<li class="header-notification">
									<div class="dropdown-primary dropdown">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<i class="feather icon-bell"></i>
											<span class="badge bg-c-red">5</span>
										</div>
										<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
											<li>
												<h6>Notifications</h6>
												<label class="label label-danger">New</label>
											</li>
											<li>
												<div class="media">
													<img class="img-radius" src="{{asset('public_folder/images/avatar-4.jpg')}}" alt="Generic placeholder image">
													<div class="media-body">
														<h5 class="notification-user">John Doe</h5>
														<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
														<span class="notification-time">30 minutes ago</span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</li>
								<li class="user-profile header-notification">
									<div class="dropdown-primary dropdown">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<img src="{{asset('public_folder/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
											<span>John Doe</span>
											<i class="feather icon-chevron-down"></i>
										</div>
										<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
											<li>
												<a href="{{route('admin.profile')}}"><i class="feather icon-user"></i> Profile</a>
											</li>
											<li>
												<a href="{{route('admin.logout')}}"><i class="feather icon-log-out"></i> Logout</a>
											</li>	
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="pcoded-main-container">
					<div class="pcoded-wrapper">
						<nav class="pcoded-navbar">
							<div class="nav-list">
								<div class="pcoded-inner-navbar main-menu">
									<ul class="pcoded-item pcoded-left-item">
										<li class="{{Request::routeIs('admin.dashboard')?'active':''}}">
											<a href="{{route('admin.dashboard')}}" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="feather icon-home"></i></span>
												<span class="pcoded-mtext">Dashboard</span>
											</a>
										</li>
									

										<li class="{{Request::routeIs('admin.sample')?'active':''}}">
											<a href="{{route('admin.sample')}}" class="waves-effect waves-dark">
												<span class="pcoded-micon"><i class="far fa-sticky-note"></i></span>
												<span class="pcoded-mtext">Transaction</span>
											</a>
										</li>
										
										
									</ul>
								</div>
							</div>
						</nav>

						@yield('content')

						<div id="styleSelector"></div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery-ui.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.slimscroll.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/modernizr.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/css-scrollbars.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/select2.full.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/bootstrap-multiselect.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.multi-select.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/select2-custom.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.dataTables.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/dataTables.buttons.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jszip.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/pdfmake.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/vfs_fonts.js')}}"></script>
		
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/dataTables.bootstrap4.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/dataTables.responsive.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/responsive.bootstrap4.min.js')}}"></script>

		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/data-table-custom.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/buttons.print.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/buttons.html5.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/pcoded.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/vertical-layout.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/script.min.js')}}"></script>
		<!-- <script type="text/javascript" src="js/modal.js"></script> -->
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/classie.js')}}" ></script>
		<script type="text/javascript" src="{{asset('admin_and_subadmin_css_js/js/modalEffects.js')}}"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    	{!! Toastr::message() !!}
		@stack('js')
	</body>
</html>
