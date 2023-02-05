@extends('layouts.app')
@section('title','Login')
@section('content_login')
	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
					<li class="item-link"><span>login</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Log in to your account</h3>										
									</fieldset>
									<fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input id="email" id="frm-login-uname" type="email" placeholder="Type your email address" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</fieldset>
									<fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
                                        <input id="password"id="frm-login-pass" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="************">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</fieldset>
									
									<fieldset class="wrap-input">
										<label class="remember-field">
                                            <input class="frm-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span for="remember">
                                                {{ __('Remember Me') }} &nbsp;&nbsp;&nbsp;  <a href="{{ url('/register') }}" style="color: #FF2832">Register Sekarang</a>
                                            </span>
                                           
										</label>
										@if (Route::has('password.request'))
										<a class="link-function left-positionk" title="Forgotten password?"href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>  
										@endif                                    
									</fieldset>									
									<input type="submit" class="btn btn-submit" value="Login" name="submit">
								</form>
							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection
