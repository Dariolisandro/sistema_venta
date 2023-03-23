<?php


Route::prefix('dashboard')->group(function() {
    Route::get('/inicio/index', 'DashboardController@index');
});
