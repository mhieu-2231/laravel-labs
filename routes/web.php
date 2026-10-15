<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index"); 
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");