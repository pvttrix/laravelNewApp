<?php

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'App\Http\Controllers\SiteController@index')->name('home');
    Route::get('logout', 'App\Http\Controllers\SiteController@logout')->name('logout');
});


Route::group(['middleware' => ['guest']], function () {
    Route::get('login', 'App\Http\Controllers\SiteController@login')->name('login');
    Route::post('login', 'App\Http\Controllers\SiteController@signin');
    Route::get('registr', 'App\Http\Controllers\SiteController@registr')->name('registr');
    Route::post('registr', 'App\Http\Controllers\SiteController@signup');
});

Route::group(['middleware' => ['auth', 'can:admin-panel']], function () {
    route::get('adminpanel', 'App\Http\Controllers\SiteController@adminpanel')->name('adminpanel');
});

