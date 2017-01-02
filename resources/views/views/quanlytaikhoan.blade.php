

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
                    <th>Mật khẩu</th>
                    <th>Phân quyền</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //var_dump($_POST);die;
                $connect = connect();
                $result = mysqli_query($connect, "SELECT * from taikhoan");
                $row = mysqli_fetch_assoc($result);
                $stt = 0;
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $stt = $stt + 1;
                $ma = trim($row['mataikhoan']);
                $ten = trim($row['tentaikhoan']);
                $mk = trim($row['matkhau']);
                $pq =trim($row['phanquyen']);
                ?>
                <tr>
                    <th scope="row">{{$stt}}</th>
                    <td><input type="text" name ="matk" value ="<?php echo $ma?>" ></td>
                    <td><input type="text" name ="tentk" value ="<?php echo $ten?>"size="40"></td>
                    <td><input type="text" name ="matkhau" value ="<?php echo $mk?>" size="3"></td>
                    <td><input type="text" name ="phanquyen" value ="<?php echo $pq?>" size="10"></td>
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