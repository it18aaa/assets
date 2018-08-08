<?php

/*
|--------------------------------------------------------------------------
| 'Admin' Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'requirerole:admin'])->group(function() {

    Route::name('admin.')->group(function() {

        // admin routes go in here :-)

        
    });
});