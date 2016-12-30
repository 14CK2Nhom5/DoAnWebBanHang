@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <?php
            $connect = connect();
            //var_dump($_GET);die;
            $matk='';
            $tentk='';
            
            if(isset($_GET) && count($_GET) > 0){
                $matk = $_GET['matk'];
                $tentk = $_GET['tentk'];
            }
            //$result = mysqli_query($connect, "SELECT * from taikhoan tk");
            
            ?>
            <h3>Thay đổi mật khẩu</h3>
            <div class="col-md-7 account-top">
                <form method = 'POST' action = 'XuLyChangeLogin'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="matk" value="<?php echo $matk ?>">
                    <div>
                        <span class="pass">Mật khẩu hiện tại</span>
                        <input type="password" name ="passhientai">
                    </div>
                    <div>
                        <span class="pass">Mật khẩu mới</span>
                        <input type="password" name ="passmoi1">
                    </div>
                    <div>
                        <span class="pass">Nhập lại mật khẩu</span>
                        <input type="password" name ="passmoi2">
                    </div>
                    <input type="submit" value="Thay đổi">
                </form>
            </div>
            <?php
            mysqli_close($connect);
            ?>
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