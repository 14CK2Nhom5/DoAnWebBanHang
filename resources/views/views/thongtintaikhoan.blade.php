@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <?php
            $connect = connect();
            //var_dump($_GET);die;
            $matk='';
            $tk = '';
            $mk = '';
            $tenkh='';
            $cmnd ='';
            $email= '';
            $diachi ='';
            $sdt='';
            if(isset($_GET['username']) && $_GET['username'] != '')
            {
                $matk = $_GET['username'];
            }

            $result = mysqli_query($connect, "SELECT * from khachhang kh,taikhoan tk where tk.mataikhoan = '$matk' and kh.mataikhoan = tk.mataikhoan LIMIT 1");
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $makh = trim($row['makh']);
                $tentk = trim($row['tentaikhoan']);
                $pass = trim($row['matkhau']);
                $tenkh = trim($row['tenkh']);
                $cmnd = trim($row['cmnd']);
                $email = trim($row['email']);
                $diachi = trim($row['diachi']);
                $sdt = trim($row['sodt']);
                }
                if ($tentk != '')
                {
                ?>
                <form action = 'ChangeLogin' method="GET">
                    <h3>Thông tin tài khoản</h3>
                    <div class="col-md-7 account-top">
                    <div>
                        <span>Tên tài khoản</span>
                        <input type="text" value ="<?php echo $tentk ?>" name = "tentk" readonly = 'readonly'>
                        <input type="submit" value="Thay đổi mật khẩu">
                        <input type="hidden" value="<?php echo $matk ?>" name ="matk">
                    </div>
                </form>
                <form action = 'XuLyTaiKhoan' method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <span>Tên khách hàng</span>
                        <input type="text" value = "<?php echo $tenkh ?>" name ="tenkh">
                    </div>
                    <div>
                        <span>Chứng minh nhân dân</span>
                        <input type="text" value = "<?php echo $cmnd ?>" name = "cmnd">
                    </div>
                    <div>
                        <span>Email</span>
                        <input type="text" value = "<?php echo $email ?>" name ="email">
                    </div>
                    <div>
                        <span>Địa chỉ</span>
                        <input type="text" value = "<?php echo $diachi ?>" name ="diachi">
                    </div>
                    <div>
                        <span>Số điện thoại</span>
                        <input type="text" value = "<?php echo $sdt ?>" name ="sodt">
                    </div>
                    <input type="hidden" value ="<?php echo $makh ?>" name = "makh">
                    <input type="hidden" value ="<?php echo $matk ?>" name = "matk">
                    <input type="submit" value="Cập nhật" name="submit">
                    <input type="submit" value="Đăng xuất" name="submit">
                </form>
            </div>
                <?php 
                }
                else
                {
                ?>
                <h3>Tài khoản không tồn tại</h3>
                <a href="Register" class="create">Đăng ký tài khoản mới</a>
                <div class="clearfix"> </div>
            </div>
            <?php
                }
                mysqli_close($connect);
            ?>
            
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