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

//Route::get('/', 'PagesController@home');
Route::get('/', 'PagesController@home');
Route::get('/aboutUs','PagesController@aboutUs');
Route::get('/services','PagesController@services');
Route::get('/gallery','PagesController@gallery');
Route::resource('/reserve','ReservationsController');
Auth::routes();
