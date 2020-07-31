<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->group(function(){
	Route::get('/login', 'Auth\AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login.submit', 'Auth\AdminAuth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/logout','Auth\AdminAuth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AController\AdminController@index')->name('admin.dashboard');
	 Route::get('/profile', 'AController\AdminController@profile')->name('admin.profile');
	// Password reset routes
  	Route::post('/password/email', 'Auth\AdminAuth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  	Route::get('/password/reset', 'Auth\AdminAuth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  	Route::post('/password/reset', 'Auth\AdminAuth\AdminResetPasswordController@reset');
  	Route::get('/password/reset/{token}', 'Auth\AdminAuth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

  //  CRUD ROUTE 
  Route::get('/sample-page', 'AController\AdminController@sample')->name('admin.sample');
  Route::post('/add-transaction', 'AController\TransactionController@addTransaction')->name('admin.add.transaction');
  Route::post('/update-transaction', 'AController\TransactionController@updateTransaction')->name('admin.update.transaction');
  Route::get('/delete/{id}', 'AController\TransactionController@delete');
});


