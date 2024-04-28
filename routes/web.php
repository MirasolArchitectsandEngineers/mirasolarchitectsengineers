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

/*
Route for linking page
* */
Route::get('/', function () {
    return view('landing.frontpage.home');
});

Route::get('/about', function() {
    return view('landing.about');
});

Route::get('/services', function() {
    return view('landing.services');
});

Route::get('/partnership', function() {
    return view('landing.partnership');
});

Route::get('/ourworks', function() {
    return view('landing.works');
});

Route::get('/contactus', function() {
    return view('landing.contact');
});
