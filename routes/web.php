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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about', [
        'email' => 'taufiq@gmail.com',
        'name' => 'Taufiq',
        'gambar' => 'images.jpg'
]);
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');