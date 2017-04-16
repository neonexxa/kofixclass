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
    return view('welcome');
});

Auth::routes();

Route::resource('preview', 'HomeController',
                ['only' => ['index', 'show']]);
Route::resource('error', 'ErrorController',
                ['only' => ['show']]);

Route::get('/v2preview', 'HomeController@v2preview');

Route::resource('class', 'KelasController');


