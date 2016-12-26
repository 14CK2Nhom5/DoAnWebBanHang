@extends('Layout.master')

@section('noidung')
    <div class="men">
        <div class="container">
            <div class="col-md-9 single_top">
                <div class="single_left">
                    <?php
                        $idsp = '';
                        if (isset($_GET['id']))
                            $idsp = $_GET['id'];

                        ?>
                        <?php
                        $connect = connect();
                        mysqli_query($connect, "UPDATE sanpham set soluotxem = soluotxem+1 where masp = '$idsp'");
                        $result = mysqli_query($connect, "SELECT * from sanpham sp, thuonghieu th where sp.thuonghieu = th.mathuonghieu and sp.masp = '$idsp'");
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){                            
                            $idsp = trim($row['masp']);
                            $tensp = trim($row['tensp']); 
                            $sl = trim($row['soluonghang']);       
                            $gia = trim($row['giatien']); 
                            $donvi = trim($row['donvi']);
                            $baohanh = trim($row['baohanh']);
                            $xuatxu = trim($row['xuatxu']); 
                            $phongcach = trim($row['phongcach']);  
                            $matkinh = trim($row['matkinh']);      
                            $hinhanh = trim($row['hinhanh']);
                            $luotxem = trim($row['soluotxem']);     
                            $thuonghieu = trim($row['tenthuonghieu']);
                    ?>   

                    <div class="labout span_1_of_a1">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="<?php echo $hinhanh ?>">
                                    <img src="<?php echo $hinhanh ?>" />
                                </li>
                                <li data-thumb="<?php echo $hinhanh ?>">
                                    <img src="<?php echo $hinhanh ?>" />
                                </li>
                                <li data-thumb="<?php echo $hinhanh ?>">
                                    <img src="<?php echo $hinhanh ?>" />
                                </li>
                                <li data-thumb="<?php echo $hinhanh ?>">
                                    <img src="<?php echo $hinhanh ?>" />
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="cont1 span_2_of_a1 simpleCart_shelfItem">                        
                        
                        <h1><?php echo $tensp ?></h1>
                        <p class="availability">Tình trạng: <span class="color">
                            <?php 
                            if ($sl > 0)
                                echo 'Còn hàng';
                            else
                                echo 'Hết hàng';
                             ?>
                        </span></p>
                        <div class="price_single">
                            <span class="amount item_price actual"><?php echo number_format($gia) , " " , $donvi ?></span>
                        </div>
                        <h2 class="quick">Bảo hành:<?php echo $baohanh , " năm" ?></h2>
                        <h2 class="quick">Xuất xứ: <?php echo $xuatxu ?></h2>
                        <div class="wish-list">
                            <ul>
                                <li ><?php echo $phongcach ?></li>
                            </ul>
                        </div>
                        <ul class="size">
                            <h3>Mặt kính: <?php echo $matkinh ?></h3>
                            <h6>Lượt xem: <?php echo $luotxem ?></h6>
                        </ul>
                        <div class="quantity_box">
                            <ul class="product-qty">
                                <span>Số lượng:</span>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </ul>
                            <ul class="single_social">
                                <li><a href="#"><i class="fb1"> </i> </a></li>
                                <li><a href="#"><i class="tw1"> </i> </a></li>
                                <li><a href="#"><i class="g1"> </i> </a></li>
                                <li><a href="#"><i class="linked"> </i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <a href="#" class="btn btn-primary btn-normal btn-inline btn_form button item_add item_1" target="_self">Thêm vào giỏ hàng</a>
                    
                    </div>
                    <?php 
                    }
                    mysqli_close($connect);
                    ?>  
                    <div class="clearfix"> </div>
                </div>
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">                    
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><h5>Phản hồi</h5></span></li>
                        </ul>
                        <div class="resp-tabs-container">                            
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="facts">
                                    <ul class="tab_list">
                                        <li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
                                        <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
                                        <li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg</a></li>
                                        <li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 tabs">
                <h3 class="m_1">Sản phẩm khác</h3>
                <?php
                        $idsp = '';
                        if (isset($_GET['id']))
                            $idsp = $_GET['id'];

                        ?>
                        <?php
                        $connect = connect();
                        $result = mysqli_query($connect, "SELECT * from sanpham where masp <> '$idsp' order by rand() limit 0,4");
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){                            
                            $idsp = trim($row['masp']);
                            $tensp = trim($row['tensp']);     
                            $gia = trim($row['giatien']); 
                            $donvi = trim($row['donvi']);
                            $hinhanh = trim($row['hinhanh']);    
                ?>   
                <ul class="product">
                    <li class="product_img"><img src="<?php echo $hinhanh ?>" class="img-responsive" alt=""/></li>
                    <li class="product_desc">
                        <h4><a href="single?id=<?php echo $idsp ?>"><?php echo $tensp ?></a></h4>
                        <p class="single_price"><?php echo number_format($gia) , " " , $donvi ?></p>
                        <a href="single?id=<?php echo $idsp ?>" class="link-cart">Add to Cart</a>
                    </li>
                    <div class="clearfix"> </div>
                </ul>
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