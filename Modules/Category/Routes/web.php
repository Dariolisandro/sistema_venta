<?php

Route::prefix('category')->group(function() {
    Route::get('/', 'CategoryController@index');
});
