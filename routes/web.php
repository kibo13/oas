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
    });

    // role: disp_oas 
    // permissions : 
    // - CRUD job records
    Route::group([
        'middleware' => 'role:disp_oas'
    ], function () {
        Route::resource('jobs', 'JobController');
        Route::resource('briefs', 'BriefController');
    });

    // role: disp_zheu 
    // permissions : 
    // - CRUD bid records
    Route::group([
        'middleware' => 'role:disp_zheu'
    ], function () {
        Route::resource('plots', 'PlotController');
        Route::resource('bids', 'BidController');
        Route::group([
            'prefix' => 'bids'
        ], function () {
            Route::resource('logs', 'LogController');
        });
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
    Route::group([
        'middleware' => 'role:hh'
    ], function () {
        Route::resource('workers', 'WorkerController');
        Route::resource('branches', 'BranchController');
        Route::resource('positions', 'PositionController');
    });

    // role: pts
    // permissions : 
    // - CRUD organization records 
    // - CRUD address records 
    // - CRUD street records 
    // - CRUD defect records 
    Route::group([
        'middleware' => 'role:pts'
    ], function () {
        Route::resource('organizations', 'OrganizationController');
        Route::resource('addresses', 'AddressController');
        Route::resource('streets', 'StreetController');
        Route::resource('defects', 'DefectController');
    });

    // role: guest 
    // permissions : 
    // - show all records  
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('bids', 'BidController@index')->name('bids.index');
    Route::get('bids/{bid}', 'BidController@show')->name('bids.show');
    Route::get('jobs', 'JobController@index')->name('jobs.index');
    Route::get('jobs/{job}', 'JobController@show')->name('jobs.show');
    Route::get('jobs/report/{job}', 'ReportController@jobToReport')->name('jobs.report');
    Route::get('briefs', 'BriefController@index')->name('briefs.index');
    Route::get('workers', 'WorkerController@index')->name('workers.index');
    Route::get('promisers', 'PromiserController@index')->name('promisers.index');

    // JSON 
    Route::group([
        'prefix' => 'data'
    ], function () {
        Route::get('defects', 'DataController@defects');
        Route::get('addresses', 'DataController@addresses');
        Route::get('plots', 'DataController@plots');
    });
});