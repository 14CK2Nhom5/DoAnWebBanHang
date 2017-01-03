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
Route::get('/DangNhap', 'load@DangNhap');

Route::get('/DangKy', 'load@DangKy');




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

Route::get('/TrangAdmin', function () {
    return view('views.trangadmin');
});
Route::get('/KhachHang', function () {
    return view('views.khachhang');
});
Route::post('/XuLyKhachHang', function () {
    return view('views.xulykhachhang');
});
Route::get('/TaiKhoan', function () {
    return view('views.taikhoan');
});
Route::post('/XuLyTaiKhoanAdmin', function () {
    return view('views.xulytaikhoanadmin');
});
Route::get('/QuanLySanPham', function () {
    return view('views.quanlysanpham');
});
Route::get('/QuanLyKhachHang', function () {
    return view('views.quanlykhachhang');
});
Route::get('/QuanLyTaiKhoan', function () {
    return view('views.quanlytaikhoan');
});
Route::get('/QuanLyThuongHieu', function () {
    return view('views.quanlythuonghieu');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
