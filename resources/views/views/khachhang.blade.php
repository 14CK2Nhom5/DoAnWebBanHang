@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <form action = 'XuLyKhachHang' method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="register-top-grid">
                    <h2>Thông tin khách hàng</h2>
                    <div>
                        <span>Mã khách hàng<label>* (Bắt buộc)</label></span>
                        <input type="text" name ="makh">
                    </div>
                    <div>
                        <span>Tên khách hàng<label>*</label></span>
                        <input type="text" name ="tenkh">
                    </div>
                    <div>
                        <span>CMND<label>*</label></span>
                        <input type="text" name ="cmnd">
                    </div>
                    <div>
                        <span>Email<label>*</label></span>
                        <input type="text" name ="email">
                    </div>
                    <div>
                        <span>Địa chỉ<label>*</label></span>
                        <input type="text" name ="diachi">
                    </div>
                    <div>
                        <span>Số điện thoại<label>*</label></span>
                        <input type="text" name ="sodt">
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