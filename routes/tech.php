<?php

/*
|--------------------------------------------------------------------------
| 'Tech' Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'requirerole:tech'])->group(function(){
    Route::name('tech.')->group(function() {

        // tech routes go in here :-)

        
    });
});