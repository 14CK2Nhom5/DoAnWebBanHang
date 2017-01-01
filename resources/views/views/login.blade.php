@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <h3>Đăng nhập tài khoản</h3>
            <div class="col-md-7 account-top">
                <form>
                    <div>
                        <span>Email hoặc tên tài khoản</span>
                        <input type="text">
                    </div>
                    <div>
                        <span class="pass">Mật khẩu</span>
                        <input type="password">
                    </div>
                    <input type="submit" name = "OK" value="Đăng nhập">
                </form>
            </div>
            <div class="col-md-5 left-account ">
                <a href="Register"><img class="img-responsive " src="images/s4.jpg" alt=""/></a>
                <div class="five-in">
                    <h1>Đăng ký</h1><span>Ngay</span>
                </div>
                <a href="Register" class="create">Đăng ký tài khoản mới</a>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@stop