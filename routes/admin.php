<?php

/*
|--------------------------------------------------------------------------
| 'Admin' Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'requirerole:admin'])->group(function() {
    Route::get('/',"Admin\HomeController@index")->name('admin.index');

    Route::name('admin.')->group(function() {

        // admin routes go in here :-)


    });
});