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

Route::get('/', function () {

    $restaurants = \App\Restaurants::all();

    return view('welcome', ['restaurants' => $restaurants]);
});

Auth::routes();

Route::get('/home', function () {

    $restaurants = \App\Restaurants::all();

    return view('home', ['restaurants' => $restaurants]);
});
