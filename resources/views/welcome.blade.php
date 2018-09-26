@extends('layouts.auth.app')

@section('content')
<!-- login guardians -->
<div class="page-wrapper pa-0 ma-0 select-login auth-page ">
<div class="container-fluid">
	<!-- Row -->
	<div class="table-struct full-width full-height">
		<div class="table-cell vertical-align-middle auth-form-wrap">
			<div class="ml-auto mr-auto no-float">
				<div class="row">
					<div class="row">
							<div class="mb-30 text-center">
							<img class="img-fluid img-logo-select" src="{{ asset('/images/auth/logoitj_select.svg') }}" alt="">
							<h6 class="text-center nonecase-font txt-grey">Selecciona un Portal</h6>
						</div>
						</div>
					<div class="col-sm-12 col-xs-12">
						<div class="row">
					    <div class="col-md-4 text-center">
								<img src="{{ asset('/images/index/personal.jpg') }}" alt="Personal" width="150" height="150" class="img-circle">
								<a class="a-menu-index" href="{{ route('employees.form')}}">
									<div class="img-text-title text-muted text-center">Equipo ITJ Vallereal</div>
								</a>
					    </div>
			    <div class="col-md-4 text-center">
						<img src="{{ asset('/images/index/students.jpg') }}" alt="students" width="150" height="150" class="img-circle">
						<a class="a-menu-index" href="{{ route('students.form') }}">
							<div class="img-text-title text-muted">Estudiantes</div>
						</a>
			    </div>
			    <div class="col-md-4 text-center">
						<img src="{{ asset('/images/index/parents.jpg') }}" alt="students" width="150" height="150" class="img-circle">
						<a class="a-menu-index" href="{{ route('guardians.form') }}">
							<div class="img-text-title text-muted">Papás</div>
						</a>
			    </div>
  			</div><!-- ./row -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
	</div>
</div>

@endsection