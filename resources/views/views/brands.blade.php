@extends('Layout.master')

@section('noidung')
<div class="men">
   	<div class="container">
      <div class="col-md-9 single_top">
      	 <h1 class="page-heading product-listing">
			Thương Hiệu
         </h1>
         <?php
   		$connect = connect();
   		$result = mysqli_query($connect, "SELECT * from thuonghieu");
   		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
			$tenthuonghieu = trim($row['tenthuonghieu']);		
			$gioithieu	=trim($row['gioithieu']);	
			$hinhanh=trim($row['hinhanhthuonghieu']);		
		?>
          <div class="brand_box">
	         <div class="left-side col-xs-12 col-sm-3">
				 <img src="<?php echo $hinhanh ?>" alt=""/>
			 </div>
		     <div class="middle-side col-xs-12 col-sm-5">
		     	<h4><a href="Rolex"><?php echo $tenthuonghieu ?></a></h4>
		     	<p><?php echo $gioithieu ?></p>
			 </div>
			 <div class="right-side col-xs-12 col-sm-4">
			 	<p><a href="#">1 sản phẩm</a></p>
			    <a href="#" class="btn btn1 btn-primary btn-normal btn-inline " target="_self">View Products</a>     
			 </div>
			 <div class="clearfix"> </div>
		  </div>
		  <?php 
		}
   		mysqli_close($connect);
		?>	
		</div>
		
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