<!DOCTYPE HTML>
<html>
<head>
    <title>Shop Đồng Hồ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Dorsa' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
            </script>	
<script src="js/simpleCart.min.js"> </script>
</head>
</head>
<body>
<div class="banner">
    <div class="container">
        <div class="header_top">
            <div class="header_top_left">
                <div class="box_11"><a href="checkout">
                        <h4><p>Giỏ hàng: <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> sản phẩm)</p><img src="images/bag.png" alt=""/><div class="clearfix"> </div></h4>
                    </a></div>
                <p class="empty"><a href="javascript:;" class="simpleCart_empty">Giỏ hàng trống</a></p>
                <div class="clearfix"> </div>
            </div>
            <div class="header_top_right">
                <div class="lang_list">
                </div>
                <ul class="header_user_info" >
                     <!-- Authentication Links -->
                        @if (Auth::guest())
                           
                            <a href="DangNhap">Đăng Nhập</a>
                            </br>
                            <a href="DangKy">Đăng Ký</a>
                            
                        @else
                                <a href="TrangAdmin" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                </br>
                                <a href="{{ url('/logout') }}"
                                      onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         Đăng Xuất
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                </form>
                            
                        @endif
                    <div class="clearfix"> </div>
                </ul>
                <!-- start search-->
                <div class="search-box">
                    <div id="sb-search" class="sb-search">
                        <form method = 'GET' action = "Search">
                            <input class="sb-search-input" placeholder="Tên sản phẩm tìm kiếm ..." type="search" name="key" id="search">
                            <input class="sb-search-submit" type="submit" value="">
                            <span class="sb-icon-search"> </span>
                        </form>
                    </div>
                </div>
                <!----search-scripts---->
                <script src="js/classie1.js"></script>
                <script src="js/uisearch.js"></script>
                <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                </script>
                <!----//search-scripts---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="header_bottom">
            <div class="logo">
                <h1><a href="Home"><span class="m_1">W</span>atches</a></h1>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li><a class="color2" href="Men">ĐỒNG HỒ NAM</a>
                    </li>
                    <li><a class="color4" href="Women">ĐỒNG HỒ NỮ</a>
                    </li>
                    <li><a class="color10" href="Brands">THƯƠNG HIỆU</a>
                        <div class="megapanel">
                            <div class="row">
                                @include('Composers.DanhMucSanPham')
                            </div>
                        </div>

                    </li>
                    <li class="active grid"><a class="color3" href="Product">XEM NHANH</a></li>
                    <li><a class="color7" href="Contact">LIÊN HỆ</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<div class="main">
    @yield('noidung')
    </div>
<div class="footer">
    <div class="container">
        <div class="newsletter">
            <p>Nhập Email của bạn tại đây để nhận được những tin tức mới nhất</p>
            <form>
                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                <input type="submit" value="Đăng ký">
            </form>
        </div>
        <div class="cssmenu">
            <ul>
                <li class="active"><a href="#">Bảo mật</a></li>
                <li><a href="#">Điều khoản</a></li>
                <li><a href="#">Cửa hàng</a></li>
                <li><a href="#">Về chúng tôi</a></li>
                <li><a href="Contact">Liên hệ</a></li>
            </ul>
        </div>
        <ul class="social">
            <li><a href=""> <i class="instagram"> </i> </a></li>
            <li><a href=""><i class="fb"> </i> </a></li>
            <li><a href=""><i class="tw"> </i> </a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="copy">

            <p> &copy; 2016 Watches. All Rights Reserved | Design by Nhóm 5</p>
        </div>
    </div>
</div>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</body>
</html>