<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AppController@index')->name('home');


//User Authentication routes
Route::group(['prefix' => 'user'],function(){
	Route::get('login','Auth\User\LoginController@showLoginForm')->name('user.login.form');
	Route::post('login','Auth\User\LoginController@login')->name('user.login');
	Route::post('logout','Auth\User\LoginController@logout')->name('user.logout');
	Route::get('password/reset','Auth\User\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
	Route::post('password/email','Auth\User\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
	Route::post('password/reset','Auth\User\ResetPasswordController@reset');
	Route::get('password/reset/{token}','Auth\User\ResetPasswordController@showResetForm')->name('user.password.reset');
	Route::get('register','Auth\User\RegisterController@showRegistrationForm')->name('user.register.form');
	Route::post('register','Auth\User\RegisterController@register')->name('user.register');
	Route::get('email/resend','Auth\User\VerificationController@resend')->name('user.verification.resend');
	Route::get('email/verify','Auth\User\VerificationController@show')->name('user.verification.notice');
	Route::get('email/verify/{id}','Auth\User\VerificationController@verify')->name('user.verification.verify');

	}
);


//Vendor Authentication routes
Route::group(['prefix' => 'vendor'],function(){
	Route::get('login','Auth\Vendor\LoginController@showLoginForm')->name('vendor.login.form');
	Route::post('login','Auth\Vendor\LoginController@login')->name('vendor.login');
	Route::post('logout','Auth\Vendor\LoginController@logout')->name('vendor.logout');
	Route::get('password/reset','Auth\Vendor\ForgotPasswordController@showLinkRequestForm')->name('vendor.password.request');
	Route::post('password/email','Auth\Vendor\ForgotPasswordController@sendResetLinkEmail')->name('vendor.password.email');
	Route::post('password/reset','Auth\Vendor\ResetPasswordController@reset');
	Route::get('password/reset/{token}','Auth\Vendor\ResetPasswordController@showResetForm')->name('vendor.password.reset');
	Route::get('register','Auth\Vendor\RegisterController@showRegistrationForm')->name('vendor.register.form');
	Route::post('register','Auth\Vendor\RegisterController@register')->name('vendor.register');
	Route::get('email/resend','Auth\Vendor\VerificationController@resend')->name('vendor.verification.resend');
	Route::get('email/verify','Auth\Vendor\VerificationController@show')->name('vendor.verification.notice');
	Route::get('email/verify/{id}','Auth\Vendor\VerificationController@verify')->name('vendor.verification.verify');
	}
);

// Authenticated vendors only
Route::group(['middleware' => 'auth:vendor'], function(){

});

// Verified vendors only
Route::group(['middleware' => ['auth:vendor','verifiedvendor']], function(){

});

// Authenticated users only
Route::group(['middleware' => 'auth:user'], function(){

});

// Authenticated users only
Route::group(['middleware' => ['auth:user','verifieduser']], function(){

});


