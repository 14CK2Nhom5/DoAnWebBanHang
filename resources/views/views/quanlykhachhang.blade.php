

<div class="container">
    <div class="row">
        <h3> Quản lý khách hàng</h3>
        <form action = 'XuLyEdit' method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <table class="table">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Số CMND</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Tài khoản</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //var_dump($_POST);die;
                $connect = connect();
                $result = mysqli_query($connect, "SELECT * from khachhang");
                $row = mysqli_fetch_assoc($result);
                $stt = 0;
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $stt = $stt + 1;
                $ma = trim($row['makh']);
                $ten = trim($row['tenkh']);
                $cmnd = trim($row['cmnd']);
                $email =trim($row['email']);
                $dc =trim($row['diachi']);
                $sdt = trim($row['sodt']);
                $tk = trim($row['mataikhoan']);
                ?>
                <tr>
                    <th scope="row">{{$stt}}</th>
                    <td><input type="text" name ="makh" value ="<?php echo $ma?>" ></td>
                    <td><input type="text" name ="tenkh" value ="<?php echo $ten?>"size="40"></td>
                    <td><input type="text" name ="cmnd" value ="<?php echo $cmnd?>" size="3"></td>
                    <td><input type="text" name ="email" value ="<?php echo $email?>" size="10"></td>
                    <td><input type="text" name ="diachi" value ="<?php echo $dc?>" size="1"></td>
                    <td><input type="text" name ="sodt" value ="<?php echo $sdt?>" size="1"></td>
                    <td><input type="text" name ="mataikhoan" value ="<?php echo $tk?>" size="3"></td>
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