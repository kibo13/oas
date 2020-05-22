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