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
Route::get('/Rolex', function () {
    return view('views.rolex');
});
Route::get('/Casio', function () {
    return view('views.casio');
});
Route::get('/Zenith', function () {
    return view('views.zenith');
});
Route::get('/Longines', function () {
    return view('views.longines');
});
Route::get('/Oris', function () {
    return view('views.oris');
});
Route::get('/Orient', function () {
    return view('views.orient');
});
Route::get('/Sarcar', function () {
    return view('views.sarcar');
});