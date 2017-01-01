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

<<<<<<< HEAD
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
=======
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
Route::post('/XuLyLogin', function () {
    return view('views.xulylogin');
});
Route::get('/ThongTinTaiKhoan', function () {
    return view('views.thongtintaikhoan');
});
Route::post('/XuLyTaiKhoan', function () {
    return view('views.xulytaikhoan');
});
Route::get('/Register', function () {
    return view('views.register');
});
Route::post('/XuLyRegister', function () {
    return view('views.xulyregister');
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
Route::get('/ThoiTrang', function () {
    return view('views.thoitrang');
});
Route::get('/SangTrong', function () {
    return view('views.sangtrong');
});
Route::get('/TreTrung', function () {
    return view('views.tretrung');
});
Route::get('/Search', function () {
    return view('views.search');
});
Route::get('/ChangeLogin', function () {
    return view('views.changelogin');
});
Route::post('/XuLyChangeLogin', function () {
    return view('views.xulychangelogin');
});
Route::get('/Edit', function () {
    return view('views.edit');
});
Route::post('/XuLyEdit', function () {
    return view('views.xulyedit');
});
>>>>>>> origin/master
