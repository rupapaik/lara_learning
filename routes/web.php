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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('contact','ContactFormController@create');
Route::post('contact','ContactFormController@store');

Route::resource('customers','UserController');
// Route::get('customers','UserController@index');
// Route::get('customers/create','UserController@create');
// Route::post('customers','UserController@store');
// Route::get('customers/{customer}','UserController@show');
// Route::get('customers/{customer}/edit','UserController@edit');
// Route::Patch('customers/{customer}','UserController@update');
// Route::delete('customers/{customer}','UserController@destroy');
