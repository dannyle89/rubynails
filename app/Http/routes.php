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

Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data

// Pages route
Route::get('/', function () {
	return View::make('pages.dashboard');
});

Route::get('/dashboard', function () {
	return View::make('pages.dashboard');
});

Route::get('/manage_sale', function () {
	return View::make('pages.manage_sale');
});

Route::get('/manage_account', function () {
	return View::make('pages.manage_account');
});

Route::get('/add_account', function () {
	return View::make('pages.add_account');
});



// Serivces route
Route::get('user/{name?}', function ($name = 'Danny') {
	return response()->json(['name' => $name, 'state' => 'CA']);
});

Route::get('listusers', 'Controller@listUser');

Route::post('adduser', 'Controller@addUser');