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

    // role: admin 
    // permissions : 
    // - CRUD user records 
    // - CRUD user roles
    Route::group([
        'middleware' => 'role:admin',
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
    });
    
    // role: hirer
    // permissions : 
    // - CRUD worker records 
    // - CRUD branch records 
    // - CRUD position records 
    // - CRUD street records 
    Route::group([
        'middleware' => 'role:hh',
        
    ], function () {
        Route::resource('workers', 'WorkerController');
        Route::resource('streets', 'StreetController');
        Route::resource('positions', 'PositionController');
        Route::resource('branches', 'BranchController');         
    });

    // role: guest 
    // permissions : 
    // - show all records  
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('workers', 'WorkerController@index')->name('workers.index');

    // temp after rechange 
    Route::resource('/organizations', 'OrganizationController');
});