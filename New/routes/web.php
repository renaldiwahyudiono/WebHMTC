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
    return view('home');
});

Route::get('/article', function () {
    return view('article-detail');
});

Route::get('/media', function () {
    return view('media-tiles');
});

// Route::get('/home', 'HomeController@getIndex');
