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

Route::get('contact', function () {
    return view('contact');
});

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('tentangkami', function () {
    return view('tentangkami');
});

Route::get('vehicles-list', function () {
    return view('vehicles-list');
});

Route::get('weapons-list', function () {
    return view('weapons-list');
});

Route::get('communication-list', function () {
    return view('communication-list');
});

Route::get('other-list', function () {
    return view('other-list');
});

Route::get('hometest', function () {
    return view('hometest');
});

Route::get('about', function () {
    return view('about');
});

// test email
// Route::get('/send-mail', function(){
//     $details =[
//         'title' => 'Mail From Indopara Sista Semesta',
//         'body' => 'This is from testing email smtp di env'
//     ];
//     \Mail::to('riskiwebsite78@gmail.com')->send(new \App\Mail\TestMail($details));
//     echo "email has been send!";
// });

// Route::get('/contact-us','ContactController@contact');

// Route::post('/contact-us','ContactController@contactSubmit')->name('contact.submit');
