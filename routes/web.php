<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome')->withTasks([
        'Go to the store',
        'Go to the market',
        'Go to the work',
        'Go to the concert'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('/about');
});
Route::get('/info', function () {
    return view('/info');
});

Route::resource('projects', 'ProjectsController');

Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');
Route::get('exportProject', 'MyController@exportProject')->name('exportProject');
Route::post('importProject', 'MyController@importProject')->name('importProject');
