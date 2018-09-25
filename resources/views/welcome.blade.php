<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<title>Portal ITJ Vallereal</title>
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="flex-center position-ref full-height">
			@if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Register</a>
					@endauth
				</div>
			@endif
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<img class="img-fluid " src="{{ asset('images/index/logoitja.png') }}" alt="">
					</div>
				</div>
				<div class="row">
					<hr>
				</div>
				<div class="row">
			    <div class="col col-md-4 text-center">
						<img src="{{ asset('images/index/personal.jpg') }}" alt="Personal" width="150" height="150" class="rounded-circle">
						<a class="a-menu-index" href="">
							<div class="img-text-title">Equipo ITJ Vallereal</div>
						</a>
			    </div>
			    <div class="col col-md-4 text-center">
						<img src="{{ asset('images/index/students.jpg') }}" alt="students" width="150" height="150" class="rounded-circle">
						<a class="a-menu-index" href="">
							<div class="img-text-title">Estudiantes</div>
						</a>
			    </div>
			    <div class="col col-md-4 text-center">
						<img src="{{ asset('images/index/parents.jpg') }}" alt="students" width="150" height="150" class="rounded-circle">
						<a class="a-menu-index" href="">
							<div class="img-text-title">Papás</div>
						</a>
			    </div>
  			</div><!-- ./row -->
			</div><!-- ./ container-->
		</div>
	</body>
</html>
