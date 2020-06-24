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

    // role: admin 
    Route::group([
        'middleware' => 'role:admin',
        'namespace' => 'Admin',
        'prefix' => 'admin'
    ], function () {
        Route::resource('users', 'UserController')->except(['show']);
    });

    // role: oas
    Route::group([
        'middleware' => 'role:oas'
    ], function () {
        Route::resource('jobs', 'JobController');
        Route::resource('briefs', 'BriefController')->except(['show']);
    });

    // role: disp
    Route::group([
        'middleware' => 'role:disp'
    ], function () {
        Route::resource('plots', 'PlotController')->except(['show']);
        Route::resource('statements', 'StatementController');
        Route::resource('logs', 'LogController')->only(['store', 'destroy']);
    });

    // role: audit 
    Route::group([
        'middleware' => 'role:audit'
    ], function () {
        Route::resource('promisers', 'PromiserController')->except(['show']);
    });

    // role: hh
    Route::group([
        'middleware' => 'role:hh'
    ], function () {
        Route::resource('workers', 'WorkerController')->except(['show']);
        Route::resource('branches', 'BranchController')->except(['show']);
        Route::resource('positions', 'PositionController')->except(['show']);
    });

    // role: pts
    Route::group([
        'middleware' => 'role:pts'
    ], function () {
        Route::resource('organizations', 'OrganizationController');
        Route::resource('addresses', 'AddressController')->except(['show']);
        Route::resource('streets', 'StreetController')->except(['show']);
        Route::resource('defects', 'DefectController')->except(['show']);
    });

    // role: guest 
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('statements', 'StatementController@index')
        ->name('statements.index');
    Route::get('statements/{statement}/logs', 'StatementController@logs')
        ->name('statements.logs');
    Route::get('jobs', 'JobController@index')->name('jobs.index');
    Route::get('jobs/{job}', 'JobController@show')->name('jobs.show');
    Route::get('briefs', 'BriefController@index')->name('briefs.index');
    Route::get('workers', 'WorkerController@index')->name('workers.index');
    Route::get('promisers', 'PromiserController@index')->name('promisers.index');

    // reports 
    Route::group([
        'middleware' => 'role:repo',
        'prefix' => 'report'
    ], function () {
        Route::get('/', 'ReportController@index')->name('report.index');
        Route::get('/address', 'ReportController@address')->name('report.address');
        Route::get('/plot', 'ReportController@plot')->name('report.plot');
        Route::get('/work', 'ReportController@work')->name('report.work');
        Route::get('/crash', 'ReportController@crash')->name('report.crash');
        Route::get('/brief', 'ReportController@brief')->name('report.brief');
        Route::get('/{job}', 'ReportController@job')->name('report.job');
    });

    // JSON 
    Route::get('data/plots', 'DataController@plots');
});
