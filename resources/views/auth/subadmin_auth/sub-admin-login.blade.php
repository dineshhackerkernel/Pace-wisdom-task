@extends('layouts.auth_design')
@section('title')
    Sub Admin Login
@stop
@section('content')
<form class="md-float-material form-material" method="POST" action="{{ route('sub.admin.login.submit') }}">
    @csrf
    <div class="text-center">
        <img src="{{asset('public_folder/images/logo.png')}}" alt="logo.png">
    </div>
    <div class="auth-box card">
        <div class="card-block">
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-center txt-primary">Sub Admin Login</h3>
                </div>
            </div>
            <div class="form-group form-primary">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-primary">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row m-t-25 text-left">
                <div class="col-12">
                    <div class="checkbox-fade fade-in-primary">
                        <label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                            <span class="text-inverse">Remember me</span>
                        </label>
                    </div>
                    <div class="forgot-phone text-right float-right">
                    @if (Route::has('password.request'))
                        <a class="text-right f-w-600" href="{{route('sub.admin.password.request')}}">
                            Forgot Password?
                        </a>
                    @endif
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                </div>
            </div>
            <p class="text-inverse text-left">Don't have an account?
                <a href="{{route('sub.admin.register')}}"> <b>Register here </b></a>for free!</p>
        </div>
    </div>
</form>
@endsection
