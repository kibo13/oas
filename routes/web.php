<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'verify' => false,
    'confirm' => false,
    'register' => false
]);

Route::middleware(['auth'])->group(function() {
    // guest 
    Route::get('/', 'HomeController@index')->name('home');

    // admin 
    Route::group([
        'middleware' => 'admin', 
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('positions', 'PositionController');
        Route::resource('branches', 'BranchController');
        Route::resource('organizations', 'OrganizationController');
    });
});