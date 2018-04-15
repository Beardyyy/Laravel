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



Route::get('/', 'Posts@index');
Route::get('/blog', 'Posts@showBlog');
Route::get('/contact', 'Posts@showContact');
Route::get('/about', 'Posts@showAbout');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/create', 'AdminsController@create')->middleware('auth');
Route::post('/create', 'AdminsController@store')->middleware('auth');
Route::get('/logout', 'AdminsController@logout');
Route::get('/delete', 'AdminsController@showDelete')->middleware('auth');
Route::delete('/delete/{id}', 'AdminsController@delete')->middleware('auth')->name('delete');
Route::get('/edit/{id}', 'AdminsController@edit')->middleware('auth');
Route::put('/update/{id}', 'AdminsController@update');

