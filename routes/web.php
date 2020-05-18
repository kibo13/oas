<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'verify' => false,
    'confirm' => false,
    // 'register' => false
]);

Route::middleware(['auth'])->group(function() {

    Route::get('/', 'HomeController@index')->name('home');

    Route::group([
        'middleware' => 'is_admin',
        'prefix' => 'admin'
    ], function () {
        Route::get('/', 'AdminController@admin')->name('admin');
    });
});