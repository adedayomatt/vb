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

Route::get('/', 'AppController@index')->name('home');

Route::get('@{business}','BusinessController@show')->name('business');
Route::get('businesses','BusinessController@index')->name('businesses');
Route::resource('business/category','BusinessCategoryController',['as'=>'biz']);//biz.category.[index,create,store,show,edit,update,destroy]
Route::get('business/categories','BusinessCategoryController@index')->name('business.categories');
Route::resource('business/tag','BusinessTagController',['as'=>'biz']);//biz.tag.[index,create,store,show,edit,update,destroy]
Route::get('business/tags','BusinessTagController@index')->name('business.tags');

Route::get('products','ProductController@index')->name('products');
Route::resource('@{business}/product','ProductController',['as'=>'biz']); //biz.product.[index,create,store,show,edit,update,destroy]
Route::resource('product/category','ProductCategoryController',['as'=>'product']);//product.category.[index,create,store,show,edit,update,destroy]
Route::get('product/categories','ProductCategoryController@index')->name('product.categories');
Route::resource('product/tag','ProductTagController',['as'=>'product']);//product.tag.[index,create,store,show,edit,update,destroy]
Route::get('product/tags','ProductTagController@index')->name('product.tags');


Route::get('services','ServiceController@index')->name('services');
Route::resource('@{business}/service','ServiceController',['as'=>'biz']); //biz.service.[index,create,store,show,edit,update,destroy]
Route::resource('service/category','ServiceCategoryController',['as'=>'service']);//service.category.[index,create,store,show,edit,update,destroy]
Route::get('service/categories','ServiceCategoryController@index')->name('service.categories');
Route::resource('service/tag','ServiceTagController',['as'=>'service']);//service.tag[index,create,store,show,edit,update,destroy]
Route::get('service/tags','ServiceTagController@index')->name('service.tags');

// Authenticated vendors only (verifiesd or not)
Route::group(['middleware' => 'auth:vendor'], function(){

});

// Verified vendors only
Route::group(['middleware' => ['auth:vendor','verifiedvendor']], function(){
	// business routes
	Route::get('business/create','BusinessController@create')->name('create.business');
	Route::post('business/create','BusinessController@store')->name('store.business');
	Route::get('@{business}/edit','BusinessController@edit')->name('edit.business');
	Route::put('@{business}/update','BusinessController@update')->name('update.business');
	Route::delete('@{business}/delete','BusinessController@destroy')->name('discard.business');
	Route::get('@{business}/gallery','BusinessGalleryController@edit')->name('edit.business.gallery');
	Route::put('@{business}/gallery/{type}','BusinessGalleryController@update')->name('update.business.gallery');
	Route::resource('@{business}/settings','BizSettingController',['as'=>'biz']);

	// product routes
	Route::get('@{business}/product/{product}/gallery','ProductGalleryController@edit')->name('edit.product.gallery');
	Route::put('@{business}/product/{product}/gallery/{type}','ProductGalleryController@update')->name('update.product.gallery');

	// service route
	Route::get('@{business}/service/{service}/gallery','ServiceGalleryController@edit')->name('edit.service.gallery');
	Route::put('@{business}/service/{service}/gallery/{type}','ServiceGalleryController@update')->name('update.service.gallery');

});

// Authenticated users only
Route::group(['middleware' => 'auth:user'], function(){

});

// Authenticated users only
Route::group(['middleware' => ['auth:user','verifieduser']], function(){

});


