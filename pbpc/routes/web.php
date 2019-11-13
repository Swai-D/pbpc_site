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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('pbpc/simple_header', 'HomeController@simple')->name('home');
Route::get('pbpc/simple_section_two', 'HomeController@section')->name('mswiswi');
Route::get('pbpc/simple_section_three', 'HomeController@sections')->name('climbing');
Route::get('pbpc/courage', 'HomeController@courage')->name('courage');
Route::get('pbpc/noise', 'HomeController@noise')->name('noise');
Route::get('pbpc/book', 'HomeController@book')->name('book');
Route::get('pbpc/stress', 'HomeController@stress')->name('stress');
Route::get('pbpc/about', 'HomeController@about')->name('about');
Route::get('pbpc/knowing', 'HomeController@knowing')->name('knowing');
Route::get('pbpc/dry', 'HomeController@dry')->name('dry');
Route::get('pbpc/illusion', 'HomeController@illusion')->name('illusion');
Route::get('pbpc/magic', 'HomeController@magic')->name('magic');
Route::get('pbpc/why', 'HomeController@why')->name('why');
Route::get('pbpc/contact', 'HomeController@contact')->name('contact');


// Admin Routes
Route::get('/admin/index', 'PostController@index')->middleware('admin')->middleware('admin');
Route::post('/admin/post', 'PostController@store')->middleware('admin')->middleware('admin');
Route::post('/profile', 'PostController@profile')->middleware('admin')->middleware('admin');
Route::post('/admin/profile', 'PostController@update_profile')->middleware('admin');
Route::get('/edit/{id}', 'PostController@edit')->middleware('admin');
Route::get('/update/{id}', 'PostController@update')->middleware('admin');