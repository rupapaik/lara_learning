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

Route::view('index','index');
Route::view('about','about');
Route::view('contact','index');
//Route::resource('customers','CustomerController');
Route::get('customers','UserController@index');
Route::get('customers/create','UserController@create');
Route::post('customers','UserController@store');
