@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <form action = 'XuLyTaiKhoanAdmin' method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="register-top-grid">
                    <h2>Thông tin khách hàng</h2>
                    <div>
                        <span>Mã tài khoản<label>* (Bắt buộc)</label></span>
                        <input type="text" name ="matk">
                    </div>
                    <div>
                        <span>Tên tài khoản<label>*</label></span>
                        <input type="text" name ="tentk">
                    </div>
                    <div>
                        <span>Mật khẩu<label>*</label></span>
                        <input type="text" name ="matkhau">
                    </div>
                    <div>
                        <span>Phân quyền<label>*</label></span>
                        <input type="text" name ="phanquyen">
                    </div>
                    <div>                             
                            <input type="submit" value="Cập nhật" name="submit">         
                            <input type="submit" value="Xóa" name="submit">                                                           
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </form>
            
        </div>
    </div>
@stop