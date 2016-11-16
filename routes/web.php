<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//add extra extension to render pure html alongside with php
View::addExtension('html', 'php');

Route::get('/', 'WelcomeController@index');
Route::post('contact', 'WelcomeController@postContact');
Route::get('about', 'WelcomeController@about');
Route::get('contact', 'WelcomeController@contact');
Route::get('pricing', 'WelcomeController@pricing');
Route::get('solution', 'WelcomeController@solution');
Route::get('what', 'WelcomeController@what');
Route::get('dribbble', 'WelcomeController@dribble');
Route::get('part2', 'WelcomeController@aviator');
Route::get('pricing-table', 'WelcomeController@price_table');
Route::get('buttons', 'WelcomeController@buttons');
Route::get('parallax', 'WelcomeController@parallax');

Route::resource('blog', 'BlogController');
Route::get('google', function() {
	return view('blog.google');
});
Route::get('tarheels', function() {
	return view('blog.tarheels');
});

Route::get('aos', function() {
	return view('welcome.aos');
});

