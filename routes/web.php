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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/packages', 'HomeController@packages')->name('package');
Route::post('test','HomeController@test')->name('test');
 
Route::prefix('u')->group(function () { 

    Route::get('d','UserController@dashboard')->name('dashboard');
    Route::get('p/{user}','UserController@profile')->name('profile');
    Route::get('e/p/{user}','UserController@edit')->name('edit.profile');
    Route::get('s/{user?}','UserController@settings')->name('settings');
    Route::get('/i/{package}', 'PurchasesController@index')->name('invoice');


    //User Purchase Register -- prefix -- pur
    Route::prefix('pur')->group(function(){

        Route::post('create','PurchasesController@store'); // register purchased items
    
    });
   

});

Route::prefix('sa')->group(function () {

//super admin routes

});

Route::prefix('p')->group(function (){

//presenter routes


});