

<div class="container">
    <div class="row">
        <h3> Quản lý sản phẩm</h3>
        <form action = 'XuLyEdit' method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Thương hiệu</th>
                    <th>Giá</th>
                    <th>Đơn vị</th>
                    <th>Phái</th>
                    <th>Xuất xứ</th>
                    <th>Phong cách</th>
                    <th>Mặt kính</th>
                    <th>Bảo hành</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Lượt xem</th>
                    <th>Hành động</td>
                </tr>
                </thead>
                <tbody>
                <?php
                //var_dump($_POST);die;
                    $connect = connect();
                    $result = mysqli_query($connect, "SELECT * from sanpham");
                    $row = mysqli_fetch_assoc($result);
                    $stt = 0;
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                        $stt = $stt + 1;
                        $ma = trim($row['masp']);
                        $ten = trim($row['tensp']);
                        $thuonghieu = trim($row['thuonghieu']);
                        $gia =trim($row['giatien']);
                        $donvi=trim($row['donvi']);
                        $phai = trim($row['phai']);
                        $xx = trim($row['xuatxu']);
                        $phongcach = trim($row['phongcach']);
                        $matkinh = trim($row['matkinh']);
                        $bh = trim($row['baohanh']);
                        $hinhanh=trim($row['hinhanh']);
                        $soluong = trim($row['soluonghang']);
                        $luotxem = trim($row['soluotxem']);
                ?>
                <tr>
                    <th scope="row">{{$stt}}</th>
                    <td><input type="text" name ="masp" value ="<?php echo $ma?>" ></td>
                    <td><input type="text" name ="tensp" value ="<?php echo $ten?>"size="40"></td>
                    <td><input type="text" name ="mathuonghieu" value ="<?php echo $thuonghieu?>" size="3"></td>
                    <td><input type="text" name ="giatien" value ="<?php echo $gia?>" size="10"></td>
                    <td><input type="text" name ="donvi" value ="<?php echo $donvi?>" size="1"></td>
                    <td><input type="text" name ="phai" value ="<?php echo $phai?>" size="1"></td>
                    <td><input type="text" name ="xuatxu" value ="<?php echo $xx?>" size="3"></td>
                    <td><input type="text" name ="phongcach" value ="<?php echo $phongcach?>" size="8"></td>
                    <td><input type="text" name ="matkinh" value ="<?php echo $matkinh?>" size="5"></td>
                    <td><input type="text" name ="baohanh" value ="<?php echo $bh?>"size="1"></td>
                    <td><input type="text" name ="hinhanh" value ="<?php echo $hinhanh?>" size="40"></td>
                    <td><input type="text" name ="soluonghang" value ="<?php echo $soluong?>" size="1"></td>
                    <td><input type="text" name ="luotxem" value ="<?php echo $luotxem?>" size="1"></td>
                    <td>
                        <input type="submit" value="Sửa" name="submit">  
                        <input type="submit" value="Xóa" name="submit"> 
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </form>
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


