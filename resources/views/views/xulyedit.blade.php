<?php
    $connect = connect();
    $masanpham = '';
    $tensanpham ='';
    $mathuonghieu ='';
    $phai ='';
    $giatien ='';
    $donvi ='';
    $xuatxu ='';
    $phongcach ='';
    $matkinh ='';
    $baohanh ='';
    $soluonghang ='';
    if(isset($_POST) && count($_POST) > 0)
    {
        $masanpham = $_POST['masp'];
        $tensanpham = $_POST['tensp'];
        $mathuonghieu =$_POST['mathuonghieu'];
        $phai =$_POST['phai'];
        $giatien =$_POST['giatien'];
        $donvi =$_POST['donvi'];
        $xuatxu =$_POST['xuatxu'];
        $phongcach =$_POST['phongcach'];
        $matkinh =$_POST['matkinh'];
        $baohanh =$_POST['baohanh'];
        $soluonghang =$_POST['soluonghang'];
        //$image =$_POST['soluonghang'];
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Thêm") {

        $PATH_images = dirname(getcwd()) . '\public\images';
        $masp = $masanpham;
        $tensp = $tensanpham;
        $matt = $mathuonghieu;
        $p = $phai;
        $gia = $giatien;
        $dvi = $donvi;
        $xxu = $xuatxu;
        $pcach  = $phongcach;
        $mkinh = $matkinh;
        $bhanh = $baohanh;
        $slhang = $soluonghang;

        $size = sizeof($_FILES['userfile']['name']);

        echo '<pre>';
        for ($i=0; $i < $size ; $i++) { 
            $filename = basename($_FILES['userfile']['name'][$i]);
            $ext= explode('.', $filename);
            $ext = $ext[sizeof($ext)-1];
            $uploadfile = $PATH_images . "\\$masp" . ".$ext";            
            if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile)) {
                $mess = "Successfully uploaded " . $filename ;
            } else {
                echo "Cannot upload " . $filename . "!\n";
            }
        }
        echo 'Here is some more debugging info:';
        print_r($_FILES['userfile']['name']);
        print "</pre>";
        $result = mysqli_query($connect, "INSERT INTO sanpham (masp,tensp,thuonghieu,giatien,donvi,phai,xuatxu,phongcach,matkinh,baohanh,soluonghang,hinhanh) values 
        ('$masp','$tensp','$matt',$gia,'$dvi','$p','$xxu','$pcach','$mkinh',$bhanh,$slhang,'images/$masp.$ext')");
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=Edit?mess=ThemThanhCong'>";
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Cập nhật") {
        $params = '';
        $PATH_images = dirname(getcwd()) . '\public\images';
        $masp = $masanpham;
        $result = mysqli_query($connect, "SELECT * from sanpham where masp ='$masp' LIMIT 1");
        if(mysqli_num_rows($result) < 1){
            echo "<meta http-equiv='refresh' content='0;url=Edit?=SaiMaSanPham'>";
            return;
        }
        $tensp = $tensanpham;
        if ($tensp != "") {
            $params = "tensp ='$tensp'";
        }
        $matt = $mathuonghieu;
        if ($matt != "") {
            if($params != '') $params .= ',';
            $params .= "thuonghieu='$matt'";
        }
        $p = $phai;
        if ($p != "") {
            if($params != '') $params .= ',';
            $params .= "phai='$p'";
        }
        $gia = $giatien;
        if ($gia != "") {
            if($params != '') $params .= ',';
            $params .= "giatien =$gia";
        }
        $dvi = $donvi;
        if ($dvi != "") {
            if($params != '') $params .= ',';
            $params .= "donvi='$dvi'";
        }
        $xxu = $xuatxu;
        if ($xxu != "") {
            if($params != '') $params .= ',';
            $params .= "xuatxu='$xxu'";
        }
        $pcach  = $phongcach;
        if ($pcach != "") {
            if($params != '') $params .= ',';
            $params .= "phongcach='$pcach'";
        }
        $mkinh = $matkinh;
        if ($mkinh != "") {
            if($params != '') $params .= ',';
            $params .= "matkinh='$mkinh'";
        }
        $bhanh = $baohanh;
        if ($bhanh != "") {
            if($params != '') $params .= ',';
            $params .= "baohanh=$bhanh";
        }
        $slhang = $soluonghang;
        if ($slhang != "") {
            if($params != '') $params .= ',';
            $params .= "soluonghang=$slhang";
        }
        
        if (isset($_FILES) && $_FILES['userfile']['name'][0] != '')
        {
            //var_dump($_FILES);die;
            $size = sizeof($_FILES['userfile']['name']);
            for ($i=0; $i < $size ; $i++) { 
                $filename = basename($_FILES['userfile']['name'][$i]);
                $ext= explode('.', $filename);
                $ext = $ext[sizeof($ext)-1];
                $uploadfile = $PATH_images . "\\$masp" . ".$ext"; 
                $params .= ",hinhanh = 'images/$masp.$ext'";          
                if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $uploadfile)) {
                    $mess = "Successfully uploaded " . $filename ;
                } else {
                    echo "Cannot upload " . $filename . "!\n";
                }
            }
        }
        echo 'Here is some more debugging info:';
        print_r($_FILES['userfile']['name']);
        print "</pre>";
        //echo "UPDATE sanpham SET ".$params." where masp = '$masp'";die;
        $result = mysqli_query($connect, "UPDATE sanpham SET ".$params." where masp = '$masp'");
        mysqli_close($connect);
        echo "<meta http-equiv='refresh' content='0;url=Edit?mess=SuaThanhCong'>";
    }
    if(isset($_POST['submit']) && $_POST['submit'] == "Xóa") {
        //var_dump($_POST);die;
        $masp = $masanpham;
        $result = mysqli_query($connect, "SELECT * from sanpham where masp ='$masp' LIMIT 1");
        mysqli_close($connect);
        if(mysqli_num_rows($result) < 1){
            echo "<meta http-equiv='refresh' content='0;url=Edit?=SaiMaSanPham'>";
            return;
        }
        
        //echo 'DELETE from sanpham where masp = '$masp'';
        $result = mysqli_query($connect, "DELETE from sanpham where masp = '$masp'");
        echo "<meta http-equiv='refresh' content='0;url=Edit?mess=XoaThanhCong'>";
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
                        