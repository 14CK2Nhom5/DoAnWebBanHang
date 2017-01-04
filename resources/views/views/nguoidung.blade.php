@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            
                <form action = 'ChangeLogin' method="GET">
                    <h3>Thông tin tài khoản</h3>
                    <div class="col-md-7 account-top">
                    <div>
                        <span>Email</span>
                        <input type="text" name = "tentk" readonly = 'readonly'>
                        <input type="submit" value="Thay đổi mật khẩu">
                        <input type="hidden" name ="matk">
                    </div>
                </form>
                <form action = 'XuLyTaiKhoan' method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <span>Tên khách hàng</span>
                        <input type="text" name ="tenkh">
                    </div>
                    <div>
                        <span>Chứng minh nhân dân</span>
                        <input type="text" name = "cmnd">
                    </div>
                    <div>
                        <span>Địa chỉ</span>
                        <input type="text"name ="diachi">
                    </div>
                    <div>
                        <span>Số điện thoại</span>
                        <input type="text"  name ="sodt">
                    </div>
                    <input type="submit" value="Cập nhật" name="submit">
                </form>
            <div class="clearfix"> </div>
        </div>
    </div>

@stop