<?php

/*
|--------------------------------------------------------------------------
| 'Admin' Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'requirerole:admin'])->group(function() {

    Route::get('/',"admin\HomeController@index")->name('admin.index');

    Route::name('admin.')->group(function() {

        // admin routes go in here :-)


    });
});