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

Route::get('/', 'PublicController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/packages', 'HomeController@packages')->name('package');





Route::prefix('user')->group(function () {

    Route::get('dashboard','UserController@dashboard')->name('dashboard');
    Route::get('/invoice/{package}', 'UserController@invoice')->name('invoice');

});

Route::prefix('admin')->group(function () {



});