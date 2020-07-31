<?php
namespace App\Http\Controllers\Auth\SubAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubAdmin;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class SubAdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:subadmin',['except'=>['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.subadmin_auth.sub-admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password'=> 'required|min:4',
        ]);

        if(Auth::guard('subadmin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
        {
            Toastr::success('Login successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
            // Toastr::success('Login successfully');
            return redirect()->intended(route('sub.admin.dashboard'));
        }
        Toastr::error('Invalid email or password','Failed', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
        // Toastr::error('Invalid email or password');
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('subadmin')->logout();
        Toastr::success('Logout successfully','Success', ["positionClass" => "toast-bottom-right","progressBar"=> true, "closeButton"=> true]);
        return redirect('/sub-admin');
    }
}
