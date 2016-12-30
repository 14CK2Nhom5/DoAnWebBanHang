@extends('Layout.master')

@section('noidung')
    <div class="account-in">
        <div class="container">
            <form action = 'XuLyEdit' method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="register-top-grid">
                    <h2>Thông tin sản phẩm</h2>
                    <div>
                        <span>Mã sản phẩm<label>* (Bắt buộc)</label></span>
                        <input type="text" name ="masp">
                    </div>
                    <div>
                        <span>Tên sản phẩm<label>*</label></span>
                        <input type="text" name ="tensp">
                    </div>
                    <div>
                        <span>Mã thương hiệu<label>*</label></span>
                        <input type="text" name ="mathuonghieu">
                    </div>
                    <div>
                        <span>Phái<label>*</label></span>
                        <input type="text" name ="phai">
                    </div>
                    <div>
                        <span>Giá tiền<label>*</label></span>
                        <input type="text" name ="giatien">
                    </div>
                    <div>
                        <span>Đơn vị<label>*</label></span>
                        <input type="text" name ="donvi">
                    </div>
                    <div>
                        <span>Xuất xứ<label>*</label></span>
                        <input type="text" name ="xuatxu">
                    </div>
                    <div>
                        <span>Phong cách<label>*</label></span>
                        <input type="text" name ="phongcach">
                    </div>
                    <div>
                        <span>Mặt kính<label>*</label></span>
                        <input type="text" name ="matkinh">
                    </div>
                    <div>
                        <span>Bảo hành<label>*</label></span>
                        <input type="text" name ="baohanh"  value =''>
                    </div>
                    <div>
                        <span>Số lượng hàng<label>*</label></span>
                        <input type="text" name ="soluonghang" value =''>
                    </div>
                    <div>
                        <span>Chọn hình ảnh<label>*</label></span>
                        <span><label></label></span>          
                        <input type="file" name="userfile[]" id="fileToUpload">                                                   
                    </div>
                    <div>                                                                                 
                            <input type="submit" value="Thêm" name="submit"> 
                            <input type="submit" value="Cập nhật" name="submit">         
                            <input type="submit" value="Xóa" name="submit">                                                           
                    </div>
                    
                    <div class="clearfix"> </div>
                </div>
                
            </form>
            
        </div>
    </div>
@stop