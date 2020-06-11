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
    Route::group([
        'middleware' => 'role:admin',
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::resource('users', 'UserController');
    });

    // role: oas
    Route::group([
        'middleware' => 'role:oas'
    ], function () {
        Route::resource('jobs', 'JobController');
        Route::resource('briefs', 'BriefController');
    });

    // role: disp
    Route::group([
        'middleware' => 'role:disp'
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
    Route::group([
        'middleware' => 'role:audit'
    ], function () {
        Route::resource('promisers', 'PromiserController');
    });
    
    // role: hh
    Route::group([
        'middleware' => 'role:hh'
    ], function () {
        Route::resource('workers', 'WorkerController');
        Route::resource('branches', 'BranchController');
        Route::resource('positions', 'PositionController');
    });

    // role: pts
    Route::group([
        'middleware' => 'role:pts'
    ], function () {
        Route::resource('organizations', 'OrganizationController');
        Route::resource('addresses', 'AddressController');
        Route::resource('streets', 'StreetController');
        Route::resource('defects', 'DefectController');
    });

    // role: guest 
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