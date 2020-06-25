<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes([
    'reset' => false,
    'verify' => false,
    'confirm' => false,
    'register' => false
]);

Route::middleware(['auth'])->group(function () {

    // permission: users 
    Route::group([
        'middleware' => 'permission:user_full',
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::resource('users', 'UserController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:user_read',
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::get('users', 'UserController@index')->name('users.index');
    });

    // permission: statements
    Route::group([
        'middleware' => 'permission:bid_full'
    ], function () {
        Route::resource('statements', 'StatementController');
        Route::resource('logs', 'LogController')->only(['store', 'destroy']);
    });

    Route::group([
        'middleware' => 'permission:bid_read'
    ], function () {
        Route::get('statements', 'StatementController@index')
            ->name('statements.index');
        Route::get('statements/{statement}/logs', 'StatementController@logs')
            ->name('statements.logs');
    });

    // permission: jobs
    Route::group([
        'middleware' => 'permission:job_full'
    ], function () {
        Route::resource('jobs', 'JobController');
    });

    Route::group([
        'middleware' => 'permission:job_read'
    ], function () {
        Route::get('jobs', 'JobController@index')->name('jobs.index');
        Route::get('jobs/{job}', 'JobController@show')->name('jobs.show');
    });

    // permission: promisers
    Route::group([
        'middleware' => 'permission:prom_full'
    ], function () {
        Route::resource('promisers', 'PromiserController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:prom_read'
    ], function () {
        Route::get('promisers', 'PromiserController@index')->name('promisers.index');
    });

    // permission: workers
    Route::group([
        'middleware' => 'permission:emp_full'
    ], function () {
        Route::resource('workers', 'WorkerController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:emp_read'
    ], function () {
        Route::get('workers', 'WorkerController@index')->name('workers.index');
    });

    // permission:briefs 
    Route::group([
        'middleware' => 'permission:grap_full'
    ], function () {
        Route::resource('briefs', 'BriefController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:grap_read'
    ], function () {
        Route::get('briefs', 'BriefController@index')->name('briefs.index');
    });

    // permission:branches 
    Route::group([
        'middleware' => 'permission:branch_full'
    ], function () {
        Route::resource('branches', 'BranchController')->except(['show']);
        Route::resource('positions', 'PositionController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:branch_read'
    ], function () {
        Route::get('branches', 'BranchController@index')->name('branches.index');
        Route::get('positions', 'PositionController@index')->name('positions.index');
    });

    // permission:plots 
    Route::group([
        'middleware' => 'permission:plot_full'
    ], function () {
        Route::resource('plots', 'PlotController')->except(['show']);  
    });

    Route::group([
        'middleware' => 'permission:plot_read'
    ], function () {
        Route::get('plots', 'PlotController@index')->name('plots.index');
    });

    // permission:organizations 
    Route::group([
        'middleware' => 'permission:build_full'
    ], function () {
        Route::resource('organizations', 'OrganizationController');
    });

    Route::group([
        'middleware' => 'permission:build_read'
    ], function () {
        Route::get('organizations', 'OrganizationController@index')->name('organizations.index');
    });

    // permission:addresses 
    Route::group([
        'middleware' => 'permission:address_full'
    ], function () {
        Route::resource('addresses', 'AddressController')->except(['show']);
        Route::resource('streets', 'StreetController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:address_read'
    ], function () {
        Route::get('addresses', 'AddressController@index')->name('addresses.index');
        Route::get('streets', 'StreetController@index')->name('streets.index');
    });

    // permission:defects
    Route::group([
        'middleware' => 'permission:defect_full'
    ], function () {
        Route::resource('defects', 'DefectController')->except(['show']);
    });

    Route::group([
        'middleware' => 'permission:defect_read'
    ], function () {
        Route::get('defects', 'DefectController@index')->name('defects.index');
    });

    // permission:reports 
    Route::group([
        'middleware' => 'permission:repo',
        'prefix' => 'report'
    ], function () {
        Route::get('', 'ReportController@index')->name('report.index');
        Route::get('/address', 'ReportController@address')->name('report.address');
        Route::get('/plot', 'ReportController@plot')->name('report.plot');
        Route::get('/work', 'ReportController@work')->name('report.work');
        Route::get('/crash', 'ReportController@crash')->name('report.crash');
        Route::get('/brief', 'ReportController@brief')->name('report.brief');
        Route::get('/{job}', 'ReportController@job')->name('report.job');
    });

    // permission:home 
    Route::group([
        'middleware' => 'permission:home'
    ], function () {
        Route::get('/', 'HomeController@index')->name('home');
    });    

    // JSON 
    Route::get('data/plots', 'DataController@plots');
});
