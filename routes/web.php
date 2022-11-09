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
Route::get('/about-us', 'PagesController@about');
Route::get('/route', 'PagesController@route');
Route::get('/pilot-roster', 'PagesController@roster');

//News Controller
Route::resource('news', 'NewsController');

//User Controller
Route::resource('account', 'UsersController');

//our-team Controller
Route::resource('our-team', 'TeamController');