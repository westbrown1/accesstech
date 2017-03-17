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
Route::get('pricing_table', 'WelcomeController@price_table');
Route::get('buttons', 'WelcomeController@buttons');
Route::get('parallax', 'WelcomeController@parallax');
Route::get('scroll', 'WelcomeController@scroll');

Route::resource('blog', 'BlogController');
Route::get('google', function() {
	return view('blog.google');
});

Route::get('tarheels', function() {
	return view('blog.tarheels');
});

Route::get('weight', function() {
	return view('blog.weight');
});

Route::get('appetite', function() {
	return view('blog.appetite');
});

Route::get('lyrics', function() {
	return view('blog.lyrics');
});

Route::get('magnesium', function() {
	return view('blog.magnesium');
});

Route::get('aos', function() {
	return view('welcome.aos');
});

Route::get('scroll', function() {
	return view('welcome.scroll');
});

Route::get('index', function() {
	return view('circle.index');
});
Route::get('index2', function() {
	return view('circle.index2');
});
Route::get('index3', function() {
	return view('circle.index3');
});
Route::get('index4', function() {
	return view('circle.index4');
});
Route::get('index5', function() {
	return view('circle.index5');
});
Route::get('index6', function() {
	return view('circle.index6');
});
Route::get('index7', function() {
	return view('circle.index7');
});

Route::get('testpricing', function() {
	return view('welcome.testpricing');
});

Route::get('watches', function() {
	return view('welcome.watches');
});

Route::get('laptops', function() {
	return view('welcome.laptops');
});

Route::get('devices', function() {
	return view('welcome.devices');
});

Route::get('lgtv', function() {
	return view('welcome.lgtv');
});

Route::get('video_games', function() {
	return view('welcome.video_games');
});


