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

Route::get('/authentication', function () {
    return view('auth');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/invest', function () {
    return view('/investor/home');
});

Route::get('/auth/login', function () {
    return view('/investor/login');
});

Route::get('/auth/signup', function () {
    return view('/investor/home');
});