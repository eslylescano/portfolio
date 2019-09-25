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

Route::get('/', 'FrontEndController@index');
Route::view('/admin', 'admin.index');




Route::group(['prefix' => 'admin'], function() {
    Route::group(['middleware'=>'auth'],function(){ 
    Route::resource('user','UserController');
    Route::resource('jobs','JobsController');
    Route::resource('studies','StudiesController');
    Route::resource('abilities','AbilitiesController');

    Route::resource('contacts','ContactsController');
});
Route::resource('testimonies','TestimoniesController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/welcome', 'welcome');
