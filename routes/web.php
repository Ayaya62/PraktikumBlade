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

Route::get('/try', function () {
    return view('try', [
        "name" => "Ayaka",
        "email" => "ayakawell@gmail.com"
    ]);
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});