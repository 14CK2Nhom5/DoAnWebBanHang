<?php
    $connect = connect();
    //var_dump($_POST);die;
    $hoten = '';
    $cmnd = '';
    $email = '';
    $diachi='';
    $sodt ='';
    $tentaikhoan= '';
    $matkhau1 ='';
    $matkhau2='';
    if(isset($_POST) && count($_POST) > 0)
    {
        $hoten = $_POST['hoten'];
        $cmnd = $_POST['cmnd'];
        $email = $_POST['email'];
        $diachi= $_POST['diachi'];
        $sodt = $_POST['sodt'];
        $tentaikhoan= $_POST['tentaikhoan'];
        $matkhau1 = $_POST['matkhau1'];
        $matkhau2= $_POST['matkhau2'];
    }
    //var_dump($_POST);die; 
    //if (isset($_POST['submit']) && $_POST['submit'] == "Đăng ký́") {
        //Sửa mã khách hàng
        //var_dump($_POST);die;
    if(($matkhau1 != $matkhau2) ||($matkhau1 =='') || ($matkhau1 ==' '))
    {
        echo "<meta http-equiv='refresh' content='0;url=Register?MatKhauSai'>";
        return;
    }
    $mak = mysqli_query($connect, "SELECT max(makh) as makh from khachhang");
    $row1 = mysqli_fetch_array($mak);
    //var_dump($row1);die;
    if(count($row1)>0)
    {
        $mak = $row1['makh'];
        $makh = $mak . $cmnd;
        //Sửa mã tài khoản
        //var_dump($makh);die;
        $mat = mysqli_query($connect, "SELECT max(mataikhoan) as mataikhoan from khachhang");
        $row2 = mysqli_fetch_array($mat);
        if(count($row2)>0)
        {
            $mat = $row2['mataikhoan'];
            $mataikhoan = $mat . $cmnd;
        }
        $result2 = mysqli_query($connect, "INSERT INTO taikhoan(mataikhoan,tentaikhoan,matkhau,phanquyen) values ('$mataikhoan','$tentaikhoan','$matkhau1','khách hàng')");
        //echo "INSERT INTO khachhang(makh,tenkh,cmnd,email,diachi,sodt,mataikhoan) values ('$makh','$hoten','$cmnd','$email','$diachi','$sodt','$mataikhoan')";die;
        $result1 = mysqli_query($connect, "INSERT INTO khachhang(makh,tenkh,cmnd,email,diachi,sodt,mataikhoan) values ('$makh','$hoten','$cmnd','$email','$diachi','$sodt','$mataikhoan')");
        
        //echo "INSERT INTO taikhoan(mataikhoan,tentaikhoan,matkhau,phanquyen) values ('$mataikhoan','$tentaikhoan','$matkhau1','khách hàng')";die;
        
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=Login?ThanhCong'>";
    }
    //}
?>
<?php
    function connect(){ 
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        return $connect;
    }
?>