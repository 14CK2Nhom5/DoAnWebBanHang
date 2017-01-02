<?php
    $connect = connect();
    $makh = '';
    $tenkh ='';
    $cmnd ='';
    $email ='';
    $diachi ='';
    $sodt ='';
    $mataikhoan ='';
    if(isset($_POST) && count($_POST) > 0)
    {
        $makh = $_POST['makh'];
        $tenkh = $_POST['tenkh'];
        $cmnd =$_POST['cmnd'];
        $email =$_POST['email'];
        $diachi =$_POST['diachi'];
        $sodt =$_POST['sodt'];
        //$mataikhoan =$_POST['mataikhoan'];
    }
    
    if(isset($_POST['submit']) && $_POST['submit'] == "Cập nhật") {
        $params = '';
        $makhachhang = $makh;
        $result = mysqli_query($connect, "SELECT * from khachhang where makh ='$makhachhang' LIMIT 1");
        if(mysqli_num_rows($result) < 1){
            echo "<meta http-equiv='refresh' content='0;url=KhachHang?=SaiMaKhachHang'>";
            return;
        }
        $tenkhachhang = $tenkh;
        if ($tenkhachhang != "") {
            $params = "tenkh ='$tenkhachhang'";
        }
        $socmnd = $cmnd;
        if ($socmnd != "") {
            if($params != '') $params .= ',';
            $params .= "cmnd=$socmnd";
        }
        $ema = $email;
        if ($ema != "") {
            if($params != '') $params .= ',';
            $params .= "email='$ema'";
        }
        $dchi = $diachi;
        if ($dchi != "") {
            if($params != '') $params .= ',';
            $params .= "diachi ='$dchi'";
        }
        $sodienthoai = $sodt;
        if ($sodienthoai != "") {
            if($params != '') $params .= ',';
            $params .= "sodt='$sodienthoai'";
        }
        //echo "UPDATE khachhang SET ".$params." where makh = '$makhachhang'";die;
        $result = mysqli_query($connect, "UPDATE khachhang SET ".$params." where makh = '$makhachhang'");
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=KhachHang?mess=SuaThanhCong'>";
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Xóa") {
        //var_dump($_POST);die;
        $makhachhang = $makh;
        $result = mysqli_query($connect, "SELECT * from khachhang where makh ='$makhachhang' LIMIT 1");
        if(mysqli_num_rows($result) < 1){
            echo "<meta http-equiv='refresh' content='0;url=KhachHang?=SaiMaSanPham'>";
            return;g
        }
        $result1 = mysqli_query($connect, "DELETE from khachhang where makh = '$makhachhang'");
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=KhachHang?mess=XoaThanhCong'>";
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
                        