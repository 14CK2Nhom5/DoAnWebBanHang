@extends('Layout.master')

@section('noidung')
<div class="pro">   
   <ul class="products">
   	<?php
   		$connect = connect();

   		//phân trang
   		// BƯỚC 2: TÌM TỔNG SỐ RECORDS
        $result = mysqli_query($connect, "SELECT COUNT(*) as total from sanpham where phongcach = 'Trẻ Trung'");
        $row = mysqli_fetch_assoc($result);
        $total_records = $row['total'];
        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;
        $ranges = 5;
        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);
        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }
        // Tìm Start
        $start = ($current_page - 1) * $limit;
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức


   		$result = mysqli_query($connect, "SELECT * from sanpham sp, thuonghieu th where phongcach = 'Trẻ Trung'and sp.thuonghieu = th.mathuonghieu LIMIT $start, $limit");
   		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   			$idsp = trim($row['masp']); 
			$tensp = trim($row['tensp']);		
			$gia	=trim($row['giatien']);	
			$donvi=trim($row['donvi']);		
			$hinhanh=trim($row['hinhanh']);		
			$thuonghieu = trim($row['tenthuonghieu']);
	?>
		<a class="cbp-vm-image" href="single?id=<?php echo $idsp ?>">
			  
			  <div style="pading:10px; width:198px;margin-left: 16px; height:450px; boder:2px solid #ff0000; float:left; background:#FFF">
    			<img src="<?php echo $hinhanh ?>" width="198" alt="image" class="img-responsive zoom-img">
    			<div class="mask">
	               		<div class="info">Xem chi tiết</div>
	                  </div>
					 <div class="product_container">
					   <h4><?php echo $tensp ?></h4>
					   <p><?php echo $thuonghieu ?></p>
					   <div class="price mount item_price"><?php echo number_format($gia) , " " , $donvi ?></div>
					   <a class="button item_add cbp-vm-icon cbp-vm-add" href="#">Thêm vào giỏ hàng</a>
	          		</div>
				</div>	
					 
			</a>
	<?php 
		}
   		mysqli_close($connect);
	?>	
	<!-- more list items -->
</ul>
<div style="text-align: center; width:198px;margin-left: 16px; height:50px;margin-left: 40%;margin-top: 2%;font-size:15px">

<?php
	// BƯỚC 7: HIỂN THỊ PHÂN TRANG
	// nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
	if ($current_page > 1 && $total_page > 1){
	    echo '<a href="TreTrung?page='.($current_page-1).'">Trang trước</a> | ';
	}
	//cong day
	$i = 1;
	if ($current_page > 1 ) {
		$i = $current_page;
		if (($current_page + $ranges - 1) >= $total_page) 
			$i = $total_page - $ranges + 1;
	}
	// Lặp khoảng giữa
	$index = 0;
	for ($i; $i <= $total_page; $i++){
		$index ++;
		if ($index > $ranges) break;
	    // Nếu là trang hiện tại thì hiển thị thẻ span
	    // ngược lại hiển thị thẻ a
	    if ($i == $current_page){
	        echo '<span>'.$i.'</span> | ';
	    }
	    else{
	        echo '<a href="TreTrung?page='.$i.'">'.$i.'</a> | ';
	    }
	}
	// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
	if ($current_page < $total_page && $total_page > 1){
	    echo '<a href="TreTrung?page='.($current_page+1).'">Trang sau</a> ';
	}
?>
</div>
                <script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
           
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