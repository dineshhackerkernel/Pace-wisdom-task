@extends('layouts.auth_design')
@section('title')
    Sub Admin Forgot Password
@stop
@section('content')
<form class="md-float-material form-material" method="POST" action="{{route('sub.admin.password.request')}}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="text-center">
        <img src="{{asset('public_folder/images/logo.png')}}" alt="logo.png">
    </div>
    <div class="auth-box card">
        <div class="card-block">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row m-b-20">
                <div class="col-md-12">
                    <h3 class="text-left">Reset Password</h3>
                </div>
            </div>
            <div class="form-group form-primary">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror          
            </div>
            <div class="form-group form-primary">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="New Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group form-primary">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm New Password">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
