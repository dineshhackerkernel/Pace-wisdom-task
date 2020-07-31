@extends('layouts.auth_design')
@section('title')
    Sub Admin Login
@stop
@section('content')
<form class="md-float-material form-material" method="POST" action="{{ route('sub.admin.register.submit')}}">
@csrf
	<div class="text-center">
	    <img src="{{asset('public_folder/images/logo.png')}}" alt="logo.png">
	</div>
	<div class="auth-box card">
	    <div class="card-block">
	        <div class="row m-b-20">
	            <div class="col-md-12">
	                <h3 class="text-center txt-primary">Sign up</h3>
	            </div>
	        </div>
	        <div class="form-group form-primary">
	            <input type="text" name="name" class="form-control" required="">
	            <span class="form-bar"></span>
	            <label class="float-label">Name</label>
	        </div>
	        <div class="form-group form-primary">
	            <input type="text" name="email" class="form-control" required="">
	            <span class="form-bar"></span>
	            <label class="float-label">Email</label>
	        </div>
	        <div class="row">
	            <div class="col-sm-6">
	                <div class="form-group form-primary">
	                    <input type="password" name="password" class="form-control" required="">
	                    <span class="form-bar"></span>
	                    <label class="float-label">Password</label>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <div class="form-group form-primary">
	                    <input type="password" name="confirm-password" class="form-control" required="">
	                    <span class="form-bar"></span>
	                    <label class="float-label">Confirm Password</label>
	                </div>
	            </div>
	        </div>
	        <div class="row m-t-25 text-left">
	            <div class="col-md-12">
	                <div class="checkbox-fade fade-in-primary">
	                    <label>
	                        <input type="checkbox" value="" required>
	                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
	                        <span class="text-inverse">I read and accept <a href="javascript:void(0);">Terms &amp; Conditions.</a></span>
	                    </label>
	                </div>
	            </div>
	        </div>
	        <div class="row m-t-30">
	            <div class="col-md-12">
	                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Register</button>
	            </div>
	        </div>
	        <hr />
	        <div class="row">
	            <div class="col-md-10">
	                <p class="text-inverse text-left">
	                    <a href="{{route('sub.admin.login')}}"><b>Click here to LOGIN!</b></a>
	                </p>
	            </div>
	        </div>
	    </div>
	</div>
	</form>
@endsection
