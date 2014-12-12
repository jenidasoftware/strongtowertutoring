<?php


Route::get('/', 'HomeController@showWelcome');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::resource('users', 'UsersController');
Route::resource('profile', 'ProfileController');
Route::resource('portfolio', 'PorfolioController');

Route::resource('blog', 'BlogController');
Route::resource('contact', 'ContactController');

Route::resource('resources', 'ResourcesController');

Route::resource('process', 'ProcessController');
Route::resource('payment', 'PlansController');

Route::resource('metacog', 'MetacogController');

Route::resource('payment', 'PaymentController');

Route::resource('shop', 'ShopController');

Route::resource('blog', 'BlogController');

Route::get('admin', function() 
{
	return 'Admin Page';
})->before('auth');
