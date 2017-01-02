<?php
    $connect = connect();
    //var_dump($_POST);die;
    $matk = '';
    $tentk='';
    $mk ='';
    $pq= '';
    if(isset($_POST) && count($_POST) > 0)
    {
        $matk = $_POST['matk'];
        //$tk = $_POST['tentk'];
        $tentk = $_POST['tentk'];
        $mk = $_POST['matkhau'];
        $pq =$_POST['phanquyen'];
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Cập nhật") {
        $params = '';
        $mataikhoan = $matk;
        $result = mysqli_query($connect, "SELECT * from taikhoan where mataikhoan ='$mataikhoan' LIMIT 1");
        if(mysqli_num_rows($result) < 1){
            echo "<meta http-equiv='refresh' content='0;url=TaiKhoan?=SaiMaTaiKhoan'>";
            return;
        }
        $tentaikhoan = $tentk;
        if ($tentaikhoan != "") {
            $params = "tentaikhoan ='$tentaikhoan'";
        }
        $matkhau = $mk;
        if ($matkhau != "") {
            if($params != '') $params .= ',';
            $params .= "matkhau='$matkhau'";
        }
        $phanquyen = $pq;
        if ($phanquyen != "") {
            if($params != '') $params .= ',';
            $params .= "phanquyen='$phanquyen'";
        }
        //echo "UPDATE khachhang SET ".$params." where makh = '$makhachhang'";die;
        $result = mysqli_query($connect, "UPDATE taikhoan SET ".$params." where mataikhoan = '$mataikhoan'");
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=TrangAdmin?mess=SuaThanhCong'>";
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Xóa") {
        //var_dump($_POST);die;
        $makhachhang = $makh;
        $result = mysqli_query($connect, "SELECT * from khachhang where makh ='$makhachhang' LIMIT 1");
        if(mysqli_num_rows($result) < 1){
            echo "<meta http-equiv='refresh' content='0;url=KhachHang?=SaiMaSanPham'>";
            return;
        }
        $result1 = mysqli_query($connect, "DELETE from khachhang where makh = '$makhachhang'");
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=TrangAdmin?mess=XoaThanhCong'>";
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
                        