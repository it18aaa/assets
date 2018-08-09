<?php

/*
|--------------------------------------------------------------------------
| 'Tech' Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'requirerole:tech'])->group(function() {

   Route::get('/',"tech\HomeController@index")->name('tech.index');

   
    Route::name('tech.')->group(function() {

        // tech routes go in here :-)
        
        
    });
});