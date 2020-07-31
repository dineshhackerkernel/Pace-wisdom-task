<?php

/*
|--------------------------------------------------------------------------
|Sub admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/sub-admin')->group(function(){
	Route::get('/login', 'Auth\SubAuth\SubAdminLoginController@showLoginForm')->name('sub.admin.login');
	Route::post('/login.submit', 'Auth\SubAuth\SubAdminLoginController@login')->name('sub.admin.login.submit');
	Route::get('/', 'SAController\SubAdminController@index')->name('sub.admin.dashboard');
	Route::get('/profile', 'AController\AdminController@profile')->name('sub.admin.profile');
	Route::get('/logout','Auth\SubAuth\SubAdminLoginController@logout')->name('sub.admin.logout');
	Route::get('/register','SAController\SubAdminRegisterController@get_register')->name('sub.admin.register');
	Route::post('/register/submit','SAController\SubAdminRegisterController@register')->name('sub.admin.register.submit');

	// Password reset routes
  	Route::post('/password/email', 'Auth\SubAuth\SubAdminForgotPasswordController@sendResetLinkEmail')->name('sub.admin.password.email');
  	Route::get('/password/reset', 'Auth\SubAuth\SubAdminForgotPasswordController@showLinkRequestForm')->name('sub.admin.password.request');
  	Route::post('/password/reset', 'Auth\SubAuth\SubAdminResetPasswordController@reset');
  	Route::get('/password/reset/{token}', 'Auth\SubAuth\SubAdminResetPasswordController@showResetForm')->name('sub.admin.password.reset');
});
