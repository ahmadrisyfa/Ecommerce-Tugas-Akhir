@extends('layouts.app')
@section('title','Register')
@section('content_register')
<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ url('/') }}" class="link">home</a></li>
                <li class="item-link"><span>Register</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
                <div class=" main-content-area">
                    <div class="wrap-login-item ">
                        <div class="register-form form-item ">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Create an account</h3>
                                    <h4 class="form-subtitle">Personal infomation</h4>
                                </fieldset>									
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-lname">Name*</label>
                                    <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </fieldset>
                                <fieldset class="wrap-input">
                                    <label for="frm-reg-email">Email Address*</label>
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </fieldset>                               
                                <fieldset class="wrap-title">
                                    <h3 class="form-title">Login Information</h3>
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half left-item ">
                                    <label for="frm-reg-pass">Password *</label>
                                    <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                                </fieldset>
                                <fieldset class="wrap-input item-width-in-half ">
                                    <label for="frm-reg-cfpass">Confirm Password *</label>
                                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                                </fieldset>
                                <input type="submit" class="btn btn-sign" value="Register" name="register">
                                <a href="{{ url('/login') }}" class="btn btn-sign" style="margin-left:30px"  name="register">Sudah Punya Akun?</a>
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
