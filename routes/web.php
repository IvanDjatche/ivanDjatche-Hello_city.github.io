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

// give the names at my route 
// Route::get('/', function () {
//     return view('pages/home'); 
// })->name('app_home');

// another method of writing routes
// route::get('/', fn() => view ('pages/home'))->name('app_home');

// another method of writing routes
route::view('/', 'pages/home')->name('app_home');

// Route::get('/about-us', function() {
//         return view('pages/about');
// })->name('app_about');

// another method of writing routes
// route::get('/about-us', fn() => view ('pages/about'))->name('app_about');

// another method of writing routes
route::view('/about-us', 'pages/about')->name('app_about');
