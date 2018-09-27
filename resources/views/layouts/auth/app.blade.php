<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>ITJ Vallereal | Login </title>
		<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- vector map CSS -->
		<link href="{{ asset('/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}} " rel="stylesheet" type="text/css"/>

		<!-- Custom CSS -->
		<link href="{{ asset('/dist/css/style.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper pa-0">

			<!-- Main Content -->
			@yield('content')
			<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="{{ asset('/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('/dist/js/jquery.slimscroll.js') }}"></script>

		<!-- Init JavaScript -->
		<script src="{{ asset('/dist/js/init.js') }}"></script>
	</body>
</html>
