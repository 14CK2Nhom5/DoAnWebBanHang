@extends('Layout.master')

@section('noidung')
<div class="account-in">
   	 <div class="container">
		  <div class="check_box">	 
		<div class="col-md-9 cart-items">
			 <h1>My Shopping Bag (2)</h1>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				   <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/m3.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
						<div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 business days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
				    </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});	  
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/m4.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Nhận Hàng trong 2-3 ngày</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
				  </div>
			  </div>		
		 </div>
		 <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Mua tiếp</a>
			 <div class="price-details">
				 <h3>Chi tiết hóa đơn</h3>
				 <span>Tổng</span>
				 <span class="total1">6200.00</span>
				 <span>Giảm giá</span>
				 <span class="total1">---</span>
				 <span>Phí vận chuyển</span>
				 <span class="total1">150.00</span>
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>Tổng cộng</h4></li>	
			   <li class="last_price"><span>6350.00</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			 <div class="clearfix"></div>
			 <a class="order" href="#">Đặt hàng</a>
			 <div class="total-item">
				 <h3>Thêm</h3>
				 <h4>Phiếu giảm giá</h4>
				 <a class="cpns" href="#">Áp dụng phiếu giảm giá</a>
				 <p><a href="#">Đăng nhập</a> để sử dụng tài khoản - liên kết vói phiếu giảm giá</p>
			 </div>
			</div>
			<div class="clearfix"></div>
	     </div>
	  </div>
   </div>
@stop