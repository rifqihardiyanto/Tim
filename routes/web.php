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

Route::get('/', function () {
    return view('layout.home');
});
Route::get('/about', function () {
    return view('layout.about');
});
Route::get('/produks', function () {
    return view('layout.produks');
});
Route::get('/produk', function () {
    return view('layout.produk');
});
