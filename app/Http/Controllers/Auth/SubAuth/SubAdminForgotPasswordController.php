<?php

namespace App\Http\Controllers\Auth\SubAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Password;

class SubAdminForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest:subadmin');
    }
    protected function broker()
    {
        return Password::broker('subadmins');
    }
    
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email-sub-admin');
    }
}
