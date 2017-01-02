@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <form action = 'XuLyRegister' method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="register-top-grid">
                    <h2>Thông tin người dùng</h2>
                    <div>
                        <span>Họ và tên<label>*</label></span>
                        <input type="text" name = "hoten">
                    </div>
                    <div>
                        <span>CMND<label>*</label></span>
                        <input type="text" name = "cmnd">
                    </div>
                    <div>
                        <span>Email<label>*</label></span>
                        <input type="text" name = "email">
                    </div>
                    <div>
                        <span>Địa chỉ<label>*</label></span>
                        <input type="text" name = "diachi">
                    </div>
                    <div>
                        <span>Số điện thoại<label>*</label></span>
                        <input type="text" name = "sodt">
                    </div>
                    <div>
                    </div>
                    <div class="clearfix"> </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Nhận tin mới nhất</label>
                    </a>
                </div>
                <div class="register-top-grid">
                    <div>
                        <span>Tên tài khoản<label>*</label></span>
                        <input type="text" name = "tentaikhoan">
                    </div>
                </div> 
                <div class="register-bottom-grid">
                    <div>
                        <span><label></label></span>
                        .
                    </div>
                    <div>
                        <span>Mật khẩu<label>*</label></span>
                        <input type="password" name = "matkhau1">
                    </div>
                    <div>
                        <span>Nhập lại mật khẩu<label>*</label></span>
                        <input type="password" name = "matkhau2">
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
                <div class="register-but">
                <input type="submit" value="Đăng ký" name="submit">
                <div class="clearfix"> </div>
            </form>
            </div>
        </div>
    </div>
@stop