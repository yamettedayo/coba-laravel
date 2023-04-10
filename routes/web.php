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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "METT cantik",
        "email" => "mettdoo@gmail.com",
        "image" => "akucantik.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});