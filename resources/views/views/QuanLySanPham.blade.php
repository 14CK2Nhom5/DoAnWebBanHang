@extends('Layout.master')
@section('noidung')
<div class="container">
    <div class="row">
        <h3> Quản lý sản phẩm</h3>

        <table class="table">
            <thead>
            <tr>
                <th>STT</th>
                <th>Mã</th>
                <th>Tên</th>
                <th>thương hiệu</th>
                <th>Giá</th>
                <th>Đơn vị</th>
                <th>Phái</th>
                <th>Xuát xứ</th>
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
                <td><?php echo $ma?></td>
                <td><?php echo $ten?></td>
                <td><?php echo $thuonghieu?></td>
                <td><?php echo $gia ?></td>
                <td><?php echo $donvi ?></td>
                <td><?php echo $phai ?></td>
                <td><?php echo $xx ?></td>
                <td><?php echo $phongcach ?></td>
                <td><?php echo $matkinh ?></td>
                <td><?php echo $bh ?></td>
                <td><?php echo $hinhanh ?></td>
                <td><?php echo $soluong ?></td>
                <td><?php echo $luotxem ?></td>
                <td><a href="chinh-sua-thanh-vien.php?id=1">Sửa</a> <a href="xoa-thanh-vien.php?id=1">Xóa</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
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
@endsection

