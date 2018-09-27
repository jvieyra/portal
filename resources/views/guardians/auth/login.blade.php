@extends('layouts.auth.app')

@section('content')
<!-- login guardians -->
<div class="page-wrapper pa-0 ma-0 login-parents auth-page" style="background-image: url({{ asset('/images/auth/parents/form-login-bg.jpg') }})">
<div class="container-fluid">
	<!-- Row -->
	<div class="table-struct full-width full-height">
		<div class="table-cell vertical-align-middle auth-form-wrap">
			<div class="auth-form  ml-auto mr-auto no-float">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="mb-30">
							<img class="img-fluid " width="340" height="90" src="{{ asset('/images/auth/logoitj_login.svg') }}" alt="">
							<h6 class="text-center nonecase-font text-white">Acceso a Padres</h6>
						</div>
						<div class="form-wrap">
							<form method="POST" action="{{ route('guardians.login')}}">
								@csrf
								<div class="form-group">
									<label class="control-label mb-10 text-white" for="exampleInputEmail_2">Email</label>
									<input type="email" class="form-control" required="" id="exampleInputEmail_2" 
												 placeholder="Ingresa tu email" autofocus name="email" value="{{ old('email') }}">
									@if ($errors->has('email'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group">
									<label class="pull-left control-label mb-10 text-white" for="exampleInputpwd_2">Password</label>
									<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">¿Olvidaste tu password?</a>
									<div class="clearfix"></div>
									<input type="password" class="form-control" required="" id="exampleInputpwd_2" 
												 placeholder="Ingresa tus password" name="password">
									@if ($errors->has('password'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group">
									<div class="checkbox checkbox-primary pr-10 pull-left">
										<input id="checkbox_2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label class="text-white" for="checkbox_2"> Recuerdame</label>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="form-group text-center">
										<button type="submit" class="btn btn-info btn-success btn-rounded">Ingresar </button>
								</div>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Row -->
	</div>
</div>
@endsection