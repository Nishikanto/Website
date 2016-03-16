<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function(){
	return Redirect::route('dashboard');
});

Route::group(['before' => 'guest'], function(){
	Route::controller('password', 'RemindersController');
	Route::get('login', ['as'=>'login','uses' => 'AuthController@login']);
	Route::post('login', array('uses' => 'AuthController@doLogin'));
});

Route::group(array('before' => 'auth'), function()
{

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'AuthController@dashboard'));

	Route::get('doc_dashboard', array('as' => 'doc_dashboard', 'uses' => 'AuthController@doc_dashboard'));

	Route::get('nurse_dashboard', array('as' => 'nurse_dashboard', 'uses' => 'AuthController@nurse_dashboard'));


	Route::get('change-password', array('as' => 'password.change', 'uses' => 'AuthController@changePassword'));
	Route::post('change-password', array('as' => 'password.doChange', 'uses' => 'AuthController@doChangePassword'));

	Route::get('/user/registration_form/{whose}', ['as' => 'user.registration_form','uses' =>'AccountsController@reg_form', 'whose' => 'doctors_form/nurses_form']);


	Route::get('/view/patients_managment/{option}', ['as' => 'view.patients_managment','uses' =>'PatientsController@patient_view', 'option' => 'search/create/appointment/check_in']);


	Route::post('/user/registration/doctors', [
		'as' => 'reg.doctors', 
		'uses' => 'AccountsController@doctorsAccountCreate']);

	Route::post('/user/registration/patients', [
		'as' => 'reg.patients', 
		'uses' => 'PatientsController@patienstRegistration']);

	Route::post('/user/registration/nurses', [
		'as' => 'reg.nurses', 
		'uses' => 'AccountsController@nursesAccountCreate']);

	Route::get('user/doctors_list', ['as' => 'doctors_list', 'uses' => 'AccountsController@doctors_list']);

	Route::get('user/nurses_list', ['as' => 'nurses_list', 'uses' => '
		AccountsController@nurses_list']);

	
});




