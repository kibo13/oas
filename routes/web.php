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

    // role: disp_oas 
    // permissions : 
    // - CRUD job records
    Route::group([
        'middleware' => 'role:disp_oas'
    ], function () {
        Route::resource('jobs', 'JobController');
    });

    // role: audit 
    // permissions : 
    // - CRUD promiser records
    Route::group([
        'middleware' => 'role:audit'
    ], function () {
        Route::resource('promisers', 'PromiserController');
    });
    
    // role: hirer
    // permissions : 
    // - CRUD worker records 
    // - CRUD branch records 
    // - CRUD position records 
    // - CRUD street records 
    Route::group([
        'middleware' => 'role:hh'
    ], function () {
        Route::resource('workers', 'WorkerController');    
    });

    // role: arch
    // permissions : 
    // - CRUD street records 
    // - CRUD organization records 
    // - CRUD position records 
    // - CRUD branch records 
    // - CRUD type records 
    Route::group([
        'middleware' => 'role:arch',
        'prefix' => 'info'
    ], function () {
        Route::resource('organizations', 'OrganizationController');
        Route::resource('branches', 'BranchController');
        Route::resource('positions', 'PositionController');
        Route::resource('types', 'TypeController');
        Route::resource('streets', 'StreetController');        
    });

    // role: guest 
    // permissions : 
    // - show all records  
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('jobs', 'JobController@index')->name('jobs.index');
    Route::get('jobs/{job}', 'JobController@show')->name('jobs.show');
    Route::get('workers', 'WorkerController@index')->name('workers.index');
    Route::get('promisers', 'PromiserController@index')->name('promisers.index');
});