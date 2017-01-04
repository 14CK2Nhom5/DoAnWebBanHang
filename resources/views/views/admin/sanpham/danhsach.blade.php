@extends('views.admin.layout.index')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm <br>
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Thương hiệu</th>
                        <th>Giá tiền</th>
                        <th>Đơn vị</th>
                        <th>Phái</th>
                        <th>Xuất xứ</th>
                        <th>Phong cách</th>
                        <th>Mắt kính</th>
                        <th>Bảo hành</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng hàng</th>
                        <th>Số lượt xem</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>1</td>
                        <td>Tin Tức</td>
                        <td>None</td>
                        <td>Hiện</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                    </tr>
                    <tr class="even gradeC" align="center">
                        <td>2</td>
                        <td>Bóng Đá</td>
                        <td>Thể Thao</td>
                        <td>Ẩn</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection