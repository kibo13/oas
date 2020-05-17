<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'verify' => false,
    'confirm' => false,
    // 'register' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('index');
});
