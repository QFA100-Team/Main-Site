<?php

use Illuminate\Support\Facades\Route;

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

//Landing Page (temp)
Route::get('/', function () {
    return view('landingpage');
});

//Pages Controller (Main Pages)
Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/pilots', 'PagesController@pilots');
Route::get('/route', 'PagesController@route');