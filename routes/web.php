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

// display home page
Route::get('/','PagesController@getHome');

// display About Page
Route::get('/about','PagesController@getAbout');

// display Contact Page
Route::get('/contact','PagesController@getContact');

// contact page data submit route


Route::post('/contact/submit','MessagesController@submit')->name('contactsubmit');

// display all messages page
Route::get('/messages','MessagesController@getMessages');

// student route 

Route::resource('/students', 'StudentsController');