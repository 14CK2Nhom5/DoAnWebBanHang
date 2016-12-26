@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <form>
                <div class="register-top-grid">
                    <h2>Thông tin người dùng</h2>
                    <div>
                        <span>Tên<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Họ<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Email<label>*</label></span>
                        <input type="text">
                    </div>
                    <div class="clearfix"> </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Nhận tin mới nhất</label>
                    </a>
                </div>
                <div class="register-bottom-grid">
                    <div>
                        <span>Mật khẩu<label>*</label></span>
                        <input type="password">
                    </div>
                    <div>
                        <span>Nhập lại mật khẩu<label>*</label></span>
                        <input type="password">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </form>
            <div class="clearfix"> </div>
            <div class="register-but">
                <form>
                    <input type="submit" value="Đăng ký">
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
@stop