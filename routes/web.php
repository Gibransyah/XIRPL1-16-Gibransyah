<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return  view ('about', [
        "title" => "About",
        "nama" => "Gibransyah Agung Kusuma",
        "email" => "gibransyahagung25@gmail.com",
        "gambar" => "gibransyah ak.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);