<?php

//Route::get('about', 'PagesController@about');
//Route::get('contact', 'PagesController@contact');

//Route::get('accounts', 'AccountsController@index');
//Route::get('users', 'UsersController@index');
//Route::get('users/{username}', 'UsersController@show');

Route::resource('users', 'UsersController');
