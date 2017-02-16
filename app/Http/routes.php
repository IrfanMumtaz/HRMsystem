<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::group(['middleware' => 'web'], function(){
	Route::auth();
	Route::get('/login', function(){
		return View::make('auth/login');
	});
	Route::get('/password/reset', function(){
		return View::make('auth/emails/password');
	});
	Route::get('/register', function(){
		return View::make('auth/register');
	});
	

	//Authenticated URLs
	Route::get('/', 'dashboard@index');
	Route::get('users', 'usersList@index');
	Route::get('/dashboard', 'dashboard@index');	
	Route::get('/order-summary', 'orderSummary@index');
	Route::get('/new-order', 'newOrder@index');
	Route::get('/track-order', 'trackOrder@index');
	Route::get('/add-funds', 'addFunds@index');
	Route::get('/payment-history', 'paymentHistory@index');
	Route::get('/print-invoice', 'printInvoice@index');
	Route::get('/additional-information', 'additionalInformation@index');
	Route::get('/revision-request', 'revisionRequest@index');
	Route::get('/amednment-request', 'amednmentRequest@index');
	Route::get('/refund-request', 'refundRequest@index');
	Route::get('/refund-status', 'refundStatus@index');
	Route::get('/student-handbooks', 'studentHandbooks@index');
	Route::get('/assignment-handbooks', 'assignmentHandbooks@index');
	Route::get('/profile', 'userProfile@index');
	Route::get('/feedback', 'feedback@index');
	Route::get('/order-preview/{id}', 'orderSummary@orderPreview');



	//Store Methods	
	Route::post('new-order/store', 'newOrder@store');


	//Update Method
	Route::post('profile/update', 'userProfile@updateProfile');
	Route::post('profile-pic/update', 'userProfile@updateProfilePic');
	Route::post('password/update', 'userProfile@passwordUpdate');



	//API
	Route::post('/api/v1/register/', 'Auth\apiController@sigunup');
	Route::post('/api/v1/order/', 'Auth\apiController@order');

	

});

