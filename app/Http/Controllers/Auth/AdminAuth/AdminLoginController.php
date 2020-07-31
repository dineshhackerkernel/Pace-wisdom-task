<?php

namespace App\Http\Controllers\Auth\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.admin_auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password'=> 'required|min:4',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
        {
            Toastr::success('Login successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
            // Toastr::success('Login successfully');
            return redirect()->intended(route('admin.dashboard'));
        }
        Toastr::error('Invalid email or password','Failed', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
        // Toastr::error('Invalid email or password');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Toastr::success('Logout successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
        return redirect('/admin');
    }
}
