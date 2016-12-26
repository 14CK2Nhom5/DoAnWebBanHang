<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('views.index');
});

Route::get('/checkout', function () {
    return view('views.checkout');
});

Route::get('/Home', function () {
    return view('views.index');
});
Route::get('/Men', function () {
    return view('views.men');
});
Route::get('/Women', function () {
    return view('views.women');
});
Route::get('/Contact', function () {
    return view('views.contact');
});
Route::get('/Brands', function () {
    return view('views.brands');
});
Route::get('/Login', function () {
    return view('views.login');
});
Route::get('/Register', function () {
    return view('views.register');
});
Route::get('/single', function () {
    return view('views.single');
});
Route::get('/Product', function () {
    return view('views.product');
});
Route::get('/404', function () {
    return view('views.404');
});