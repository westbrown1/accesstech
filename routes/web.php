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

Route::get('/', 'WelcomeController@index');
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
Route::get('blog', 'WelcomeController@blog');

