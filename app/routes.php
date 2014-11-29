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


if(Auth::check() && Auth::user()->type=='administrator'):

	Route::controller('/auth','AuthController');
	Route::controller('/users','UserController');
	Route::controller('/employees/{id?}/familiars', 'FamiliarController');
	Route::controller('/employees', 'EmployeeController');
	Route::controller('/divisions', 'DivisionController');
	Route::controller('/managements', 'ManagementController');
	Route::controller('/offices', 'OfficeController');
	Route::controller('/permissions', 'PermissionController');
	Route::controller('/', 'AuthController');

elseif(Auth::check() && Auth::user()->type=='operator'):

	Route::controller('/auth','AuthController');
	Route::controller('/permissions', 'PermissionController');
	Route::controller('/employees/{id?}/familiars', 'FamiliarController');
	Route::controller('/employees', 'EmployeeController');
	Route::controller('/', 'AuthController');

else:

	Route::controller('/auth', 'AuthController');
	Route::controller('/', 'AuthController');

endif;

