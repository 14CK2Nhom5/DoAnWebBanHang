<?php
    $connect = connect();
    //var_dump($_POST);die;
    $tk = '';
    $mk = '';
    $matk='';
    $tentk = '';
    $phanquyen='';
    if(isset($_POST) && count($_POST) > 0)
    {
        $tk = $_POST['username'];
        $mk = $_POST['pass'];
    }
    $result = mysqli_query($connect, "SELECT * from taikhoan tk where tentaikhoan = '$tk' and matkhau = '$mk' LIMIT 1");
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $mataikhoan = trim($row['mataikhoan']);
        $tentk = trim($row['tentaikhoan']);
        $phanquyen = trim($row['phanquyen']);
    }
    mysqli_close($connect);
    if($tentk != '')
    {
        if($phanquyen =='khách hàng')
            echo "<meta http-equiv='refresh' content='0;url=ThongTinTaiKhoan?username=$mataikhoan'>";
        else{
            if($phanquyen == 'admin')
                echo "<meta http-equiv='refresh' content='0;url=TrangAdmin'>";
        }
    }
    else
         echo "<meta http-equiv='refresh' content='0;url=Login?KhongTonTai'>";
     
?>
<?php
    function connect(){ 
        $connect = mysqli_connect("localhost", "root", "") or die(mysql_error());
        mysqli_set_charset($connect, 'utf8');
        mysqli_select_db($connect, "watches") or die(mysql_error());
        return $connect;
    }
?>
                        