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

//Route::get('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');
//Route::get('/projects/{project}', 'ProjectsController@store');
//Route::get('/projects/{project}/edit', 'ProjectsController@edit');

//Route::delete('/projects/{project}', 'ProjectsController@destroy');
