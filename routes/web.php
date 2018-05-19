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
//Route::view('/admin', 'backend.index');
Route::get('/admin','BackEndController@index');
Route::get('/admin/about_me','BackEndController@about_me')->name('backend.pages.about_me');
Route::get('/admin/abilities','BackEndController@abilities')->name('backend.pages.abilities');
Route::get('/admin/experience','BackEndController@experience')->name('backend.pages.experience');
Route::get('/admin/studies','BackEndController@studies')->name('backend.pages.studies');
Route::get('/admin/testimonies','BackEndController@testimonies')->name('backend.pages.testimonies');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
