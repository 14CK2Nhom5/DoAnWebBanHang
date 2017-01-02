@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <?php
            $connect = connect();
            if(isset($_POST) && count($_POST) > 0)
                var_dump($_POST);
            $result = mysqli_query($connect, "SELECT * from taikhoan tk");
            ?>
            <h3>Đăng nhập tài khoản</h3>
            <div class="col-md-7 account-top">
                <form method = 'POST' action ='XuLyLogin'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <span>Tên đăng nhập</span>
                        <input type="text" name = "username">
                    </div>
                    <div>
                        <span class="pass">Mật khẩu</span>
                        <input type="password" name ="pass">
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
<?php
    function connect(){ 
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        return $connect;
    }
?>
@stop