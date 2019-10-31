<?php

Route::get('/', 'HomeController@index');
Route::get('/welcome', 'HomeController@emailWelcome');


Route::get('getacc','GoogleBusinessConnectController@getAccountName'); 

Auth::routes(['verify' => true]);

Route::post('submit-contact','HomeController@submitContact')->name('submit-contact');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/legal', 'HomeController@legal')->name('legal');
Route::get('thethrone','HomeController@thethrone')->name('thethrone');
// Route::get('/clout', 'HomeController@clout')->name('clout');
// Route::get('/more-clout', 'HomeController@moreClout')->name('more-clout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/special-packages', 'HomeController@sp')->name('special-packages');
Route::get('/special-packages/{slug}', 'HomeController@specialPackageSingle')->name('special-packages-single');
Route::get('/business/{id}/{name}', 'HomeController@business')->name('business');
Route::get('/artist/{id}/{name}', 'HomeController@artist')->name('artist');
Route::get('/packages', 'HomeController@packages')->name('package');
Route::get('/b/search', 'HomeController@businessGroup')->name('business.group');
Route::get('/a/search', 'HomeController@artistGroup')->name('artist.group');
 
Route::patch('update-cart', 'CartController@update'); 
Route::delete('remove-from-cart', 'CartController@remove');
Route::get('cart', 'CartController@cart')->name('cart')->middleware(['auth']);;
Route::get('add-to-cart/{id}', 'CartController@addToCart')->name('cart.add');
Route::get('/p/{slug}/{package}', 'PurchasesController@index')->name('invoice');  
Route::get('google-business-connect','GoogleBusinessConnectController@authRedirect')->name('authtest'); 
Route::get('get-account-details','GoogleBusinessConnectController@getAccountName')->name('getAccountName'); 


Route::get('test','HomeController@test');

Route::prefix('u')->group(function () { 

    // user routes

    Route::get('/','UserController@dashboard')->name('dashboard');
    Route::get('p/{user}','UserController@profile')->name('profile');
    Route::get('e/p/{user}','UserController@edit')->name('edit.profile');
    Route::get('s/{user?}','UserController@settings')->name('settings');   
    Route::get('r/{id?}','CampaignController@report')->name('report'); 
    
    //Google Connection Thingy

    Route::post('googleconnect','GoogleBusinessConnectController@index')->name('googleconnect.init'); 
    Route::post('googleconnect/details','GoogleBusinessConnectController@details')->name('googleconnect.details'); 

    //User Purchase Register -- prefix -- pur
    Route::prefix('pur')->group(function(){

        Route::post('create','PurchasesController@store')->name('register.purchase');  // register purchased items
    
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
            Route::get('delete/{id?}','ProductController@destroy')->name('prod.delete');
        
        });        

        Route::prefix('media')->group(function(){

            Route::post('create','MediaController@store')->name('media.create');
            Route::get('delete/{id?}','MediaController@destroy')->name('media.delete');
        
        });

    });

    Route::prefix('camp')->group(function(){

        Route::get('/','CampaignController@index')->name('campaign');
        Route::post('create','CampaignController@store')->name('campaign.create');

    });   

});

Route::prefix('a')->group(function () {

//admin specific routes
    Route::get('users','AdminController@users')->name('a.users');
    Route::get('camp','AdminController@campaign')->name('a.campaign');
    Route::post('camp/update','AdminController@campaignUpdate')->name('a.campaign.update');
    Route::get('agents','AdminController@agents')->name('a.agents');
    Route::post('agents/create','AdminController@createAgent')->name('a.create.agent');
    Route::get('packages/{packageId}','AdminController@packages')->name('a.packages');
    Route::get('packages','AdminController@mainpackages')->name('a.mainpackages');
    Route::get('delete/packages/{id}','AdminController@destroy')->name('delete.mainpackage');
    Route::get('delete/user/{id}','AdminController@destroyUser')->name('delete.user');
    Route::get('delete/packageitem/{id}','AdminController@destroyPackageItem')->name('delete.package');
    Route::get('edit/packages/{id}','AdminController@edit')->name('edit.mainpackage');
    Route::post('packages/create','AdminController@createPackage')->name('a.create.package');
    Route::post('packages/edit','AdminController@editPackage')->name('a.edit.package');
    Route::post('mainpackages/create','AdminController@createMainPackage')->name('a.create.mainpackage');

}); 

//presenter routes

Route::get('/ref/{id}/{name}','HomeController@ref')->name('ref');

Route::prefix('p')->group(function (){

});


