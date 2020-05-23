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
    // guest 
    Route::get('/', 'HomeController@index')->name('home');


    // temp 
    Route::get('/charts', function () {
        return view('pages.charts.index');
    })->name('charts.index');
    
    Route::get('/statements', function () {
        return view('pages.statements.index');
    })->name('statements.index');

    Route::get('/workers', function () {
        return view('pages.workers.index');
    })->name('workers.index');
    
    Route::get('/works', function () {
        return view('pages.works.index');
    })->name('works.index');

    Route::get('/subscribers', function () {
        return view('pages.subscribers.index');
    })->name('subscribers.index');


    // temp route 
    
    
    Route::resource('organizations', 'OrganizationController');

    // role: hirer
    // permissions : 
    // - CRUD worker records 
    // - CRUD branch records 
    // - CRUD position records 
    // - CRUD street records 


    Route::group([
        'namespace' => 'hirer',
        'prefix' => 'hirer'
    ], function () {
        Route::resource('branches', 'BranchController');
        Route::resource('positions', 'PositionController');
        Route::resource('workers', 'WorkerController');
        Route::resource('streets', 'StreetController');
    });

    
    
    // role: admin 
    // permissions : 
    // - CRUD user records 
    // - CRUD user roles
    Route::group([
        'middleware' => 'admin', 
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
    });
});