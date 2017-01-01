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

Route::get('/', 'load@index');

Route::get('/checkout', 'load@checkout');

Route::get('/Home', 'load@index');

Route::get('/Men', 'load@men');

Route::get('/Women', 'load@women');

Route::get('/Contact', 'load@contact');

Route::get('/Brands', 'load@brands');

Route::get('/Login', 'load@login');

Route::get('/Register', 'load@register');

Route::get('/single', 'load@single');

Route::get('/Product', 'load@product');

Route::get('/404', 'load@erro');

Route::get('/Rolex', 'load@rolex');

Route::get('/Casio', 'load@casio');

Route::get('/Zenith', 'load@zenith');

Route::get('/Longines', 'load@longines');

Route::get('/Oris', 'load@oris');

Route::get('/Orient', 'load@orient');

Route::get('/Sarcar', 'load@sarcar');

Route::get('/ThoiTrang', 'load@thoitrang');

Route::get('/SangTrong', 'load@sangtrong');

Route::get('/TreTrung', 'load@tretrung');

Route::get('/Search', 'load@search');