@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <h3>Chọn chức năng</h3>
            <div class="col-md-7 account-top">
                <form action = 'Edit' method="get">
                    <input type = 'submit' value="Thêm sản phẩm">
                </form>
                </br>
                <form action = 'QuanLySanPham' method="get">
                    <input type = 'submit' value="Danh sách sản phẩm">
                </form>
                </br>
                <form action = 'Edit' method="get">
                    <input type = 'submit' value="Danh sách khách hàng">
                </form>
                </br>
                <form action = 'TaiKhoan' method="get">
                    <input type = 'submit' value="Quản lý tài khoản">
                </form>
                </br>
                <form action = 'Edit' method="get">
                    <input type = 'submit' value="Danh sách tài khoản">
                </form>
                </br>
                <form action = 'Edit' method="get">
                    <input type = 'submit' value="Quản lý hóa đơn">
                </form>
                </br>
                <form action = 'Edit' method="get">
                    <input type = 'submit' value="Danh sách hóa đơn">
                </form>
            <div class="clearfix"> </div>
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
@stop