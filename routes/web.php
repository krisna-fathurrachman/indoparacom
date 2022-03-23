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
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
Route::get('beranda', function () {
    return view('beranda');
});
Route::get('berandasatu', function () {
    return view('berandasatu');
});
Route::get('newberanda', function () {
    return view('newberanda');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('coba', function () {
    return view('coba');
});
