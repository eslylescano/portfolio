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

Route::view('/', 'frontend.index');
Route::view('/backend', 'backend.index');
Route::group(['middleware'=>'auth'],function(){
Route::get('/backend','BackEndController@index');
Route::get('/backend/abilities','BackEndController@abilities')->name('backend.pages.abilities');
Route::get('/backend/experience','BackEndController@experience')->name('backend.pages.experience');
Route::get('/backend/studies','BackEndController@studies')->name('backend.pages.studies');
Route::get('/backend/testimonies','BackEndController@testimonies')->name('backend.pages.testimonies');
});
Auth::routes();
Route::group(['prefix' => 'backend'], function() {
    Route::auth();
    Route::resource('user','UserController');
    Route::resource('jobs','JobsController');
    Route::resource('studies','StudiesController');
    Route::resource('abilities','AbilitiesController');
    Route::resource('testimonies','TestimoniesController');
});

/*
Route::name('backend.')->group(function () {
    Route::auth();
    Route::resource('user','UserController');
});
*/
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/welcome', 'welcome');
