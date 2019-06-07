<?php

Route::get('/', 'HomeController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/packages', 'HomeController@packages')->name('package');

Route::get('test','UserController@test');

Route::prefix('u')->group(function () { 

    Route::get('d','UserController@dashboard')->name('dashboard');
    Route::get('p/{user}','UserController@profile')->name('profile');
    Route::get('e/p/{user}','UserController@edit')->name('edit.profile');
    Route::get('s/{user?}','UserController@settings')->name('settings');
    Route::get('/i/{package}', 'PurchasesController@index')->name('invoice');
    


    //User Purchase Register -- prefix -- pur
    Route::prefix('pur')->group(function(){

        Route::post('create','PurchasesController@store')->name('register.purchase'); // register purchased items
    
    });

    Route::prefix('acc')->group(function(){

        Route::get('/','AccountController@index')->name('account');
        Route::post('create','AccountController@store')->name('acc.create');
        Route::get('delete/{id?}','AccountController@destroy')->name('acc.delete');
        Route::get('details/{id?}','AccountController@view')->name('acc.details');
        Route::post('edit/contact','AccountController@contactEdit')->name('acc.edit.contact');
        Route::post('edit/main','AccountController@mainEdit')->name('acc.edit.main');
        
        Route::prefix('prod')->group(function(){

            Route::post('create','ProductController@store')->name('prod.create');
        
        });

    });
   

});

Route::prefix('a')->group(function () {

//super admin routes

});

Route::prefix('p')->group(function (){

//presenter routes


});