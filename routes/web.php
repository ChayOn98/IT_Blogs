<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/auth_sample', function () {
    return view('auth_sample');
    // return view('front_layouts.home');
    // return("Login!");


});

Route::get('/sample-tables', function () {
    return view('sample-tables.index');
});
