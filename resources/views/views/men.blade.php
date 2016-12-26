@extends('Layout.master')
@section('noidung')
<div class="pro">   
   <ul class="products">
   	<?php
<<<<<<< HEAD
   		$connect = connect();
   		$result = mysqli_query($connect, "SELECT * from sanpham sp,thuonghieu th where phai = 'Nam' and sp.thuonghieu = th.mathuonghieu");
   		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
   			$idsp = trim($row['masp']);
			$tensp = trim($row['tensp']);		
			$gia	=trim($row['giatien']);	
			$donvi=trim($row['donvi']);		
			$hinhanh=trim($row['hinhanh']);		
			$thuonghieu = trim($row['tenthuonghieu']);
=======
	   use Illuminate\Support\Facades\DB;
	   $results=DB::table('sanpham')
			   ->join('thuonghieu', 'sanpham.thuonghieu', '=', 'thuonghieu.mathuonghieu')
			   ->where('sanpham.phai','=', 'Nam')
			   ->select('*')
			   ->get();
	   foreach ($results as $result){
			$tensp = $result->tensp;
			$gia	=$result->giatien;
			$donvi=$result->donvi;
			$hinhanh=$result->hinhanh;
			$thuonghieu = $result->tenthuonghieu;
>>>>>>> origin/master
	?>
		<li class="simpleCart_shelfItem">
			<a class="cbp-vm-image" href="single?id=<?php echo $idsp ?>">
			  <div class="view view-first">
	   		  <div class="inner_content clearfix">
				<div class="product_image">
					<div class="mask1"><img src="<?php echo $hinhanh ?>" alt="image" class="img-responsive zoom-img"></div>
					 <div class="mask">
	               		<div class="info">Quick View</div>
	                  </div>
					 <div class="product_container">
					   <h4><?php echo $tensp ?></h4>
					   <p><?php echo $thuonghieu ?></p>
					   <div class="price mount item_price"><?php echo number_format($gia) , " " , $donvi ?></div>
					   <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Add to cart</a>
					 </div>		
				  </div>
	             </div>
	          </div>
			 </a>
		</li>	
	<?php 
		}
	?>	
	<!-- more list items -->
</ul>
                <script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
           
</div>

@stop