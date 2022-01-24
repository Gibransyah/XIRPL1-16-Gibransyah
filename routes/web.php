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


// Route::get('/', function () {
//     return  'Halaman Home';
// });

// Route::get('/about', function () {
//     return  'Halaman About';
// });

// Route::get('/gallery', function () {
//     return  'Halaman Gallery';
// });



Route::get('/', function () {
    return view ('home');
});

Route::get('/about', function () {
    return  view ('About', [
        "nama" => "Gibransyah Agung Kusuma",
        "email" => "3103120097@student.smktelkom-pwt.sch.id",
        "gambar" => "gibransyah ak.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return  view ('Gallery');
});
