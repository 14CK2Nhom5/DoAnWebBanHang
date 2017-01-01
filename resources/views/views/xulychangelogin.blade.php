<?php
    $connect = connect();
    //var_dump($_POST);die;
    $matk='';
    $tentk='';
    $matkhauhientai='';
    $matkhaumoi1='';
    $matkhaumoi2='';
    $matkhau='';
    if(isset($_POST) && count($_POST) > 0)
    {
        $matk = $_POST['matk'];
        $matkhauhientai = $_POST['passhientai'];
        $matkhaumoi1 = $_POST['passmoi1'];
        $matkhaumoi2 = $_POST['passmoi2'];
    }
    $result = mysqli_query($connect, "SELECT * from taikhoan where mataikhoan ='$matk' LIMIT 1");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $matk = trim($row['mataikhoan']);
        $tentk = trim($row['tentaikhoan']);
        $matkhau = trim($row['matkhau']);
    }
    
    if($matkhauhientai != $matkhau)
         echo "<meta http-equiv='refresh' content='0;url=ChangeLogin?tentk=$tentk&matk=$matk&SaiMatKhauHienTai'>";
    else
    {
        if(($matkhaumoi1 != $matkhaumoi2) || ($matkhaumoi1 == '') || ($matkhaumoi1 == ' '))
            echo "<meta http-equiv='refresh' content='0;url=ChangeLogin?tentk=$tentk&matk=$matk&SaiMatKhauMoi'>";
        else{
            $result = mysqli_query($connect, "UPDATE taikhoan SET matkhau = '$matkhaumoi1' where mataikhoan = '$matk'");
            mysqli_close($connect);
            echo "<meta http-equiv='refresh' content='0;url=ThongTinTaiKhoan?username=$matk&ThayDoiThanhCong'>";
        }
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
                        