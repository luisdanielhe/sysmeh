<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin'], function() {
    Route::get('/admin', 'AdminController@index');
});

Route::group(['namespace' => 'MasterTables'], function() {
    Route::get('/themes', 'ThemeController@index');
});
