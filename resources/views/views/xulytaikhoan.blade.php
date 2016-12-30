<?php
    $connect = connect();
    //var_dump($_POST);die;
    $matk = '';
    $tk = '';
    $makh = '';
    $tenkh='';
    $cmnd ='';
    $email= '';
    $diachi ='';
    $sdt='';
    if(isset($_POST) && count($_POST) > 0)
    {
        $matk = $_POST['matk'];
        //$tk = $_POST['tentk'];
        $makh = $_POST['makh'];
        $tenkh = $_POST['tenkh'];
        $cmnd =$_POST['cmnd'];
        $email1 =$_POST['email'];
        $diachi1 =$_POST['diachi'];
        $sdt =$_POST['sodt'];
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Cập nhật") {
        $taikhoan = $tk;
        $makhachhang = $makh;
        $tenkhachhang = $tenkh;
        $chungminhnd = $cmnd;
        $email = $email1;
        $diachi = $diachi1;
        $sodt = $sdt;
        $result = mysqli_query($connect, "UPDATE khachhang SET tenkh= '$tenkhachhang',cmnd = $chungminhnd,email = '$email',diachi = '$diachi',sodt = '$sodt' where makh = '$makh'");
        echo "<meta http-equiv='refresh' content='0;url=ThongTinTaiKhoan?username=$matk'>";
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Đăng xuất") {
        echo "<meta http-equiv='refresh' content='0;url=Login'>";
    }
?>
<?php
    function connect(){ 
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        return $connect;
    }
?>
                        