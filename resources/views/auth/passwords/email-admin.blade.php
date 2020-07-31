@extends('layouts.auth_design')
@section('title')
    Admin Forgot Password
@stop
@section('content')
<form class="md-float-material form-material" method="POST" action="{{route('admin.password.email')}}">
    @csrf
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
                    <h3 class="text-left">Forgot Password</h3>
                </div>
            </div>
            <div class="form-group form-primary">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email ID">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror            
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Reset Password</button>
                </div>
            </div>
            <p class="f-w-600 text-right"><a href="{{route('admin.login')}}"> Back to Login</a></p>

        </div>
    </div>
</form>
@endsection
