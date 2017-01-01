@extends('Layout.master')

@section('noidung')
    <div class="main">
        <div class="container">
            <ul class="content-home">
                <li class="col-sm-4">
                    <a href="ThoiTrang" class="item-link" title="">
                        <div class="bannerBox">
                            <img src="images/w1.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                            <div class="item-html">
                                <h3>Phong<span>Cách</span></h3>
                                <p>Dấu ấn trong mắt mọi người</p>
                                <button>Mua ngay!</button>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-sm-4">
                    <a href="SangTrong" class="item-link" title="">
                        <div class="bannerBox">
                            <img src="images/w3.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                            <div class="item-html">
                                <h3>Sang<span>Trọng</span></h3>
                                <p>Tôn lên vẻ sang trọng và lịch lãm</p>
                                <button>Mua ngay!</button>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="col-sm-4">
                    <a href="TreTrung" class="item-link" title="">
                        <div class="bannerBox">
                            <img src="images/w2.jpg" class="item-img" title="" alt="" width="100%" height="100%">
                            <div class="item-html">
                                <h3>Trẻ<span>Trung</span></h3>
                                <p>Nhiệt huyết và đam mê tuổi trẻ</p>
                                <button>Mua ngay!</button>
                            </div>
                        </div>
                    </a>
                </li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="middle_content">
            <div class="container">
                <h2>Chào mừng</h2>
                <p>Sang Trọng - Đẳng Cấp - Quý Phái</p>
            </div>
        </div>
        <div class="content_middle_bottom">
            <div class="header-left" id="home">
                <section>
                    <ul class="lb-album" >
                        <li>
                            <a href="#image-1">
                                <img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
                                <span>Đỉnh cao</span>
                            </a>
                            <div class="lb-overlay" id="image-1">
                                <a href="#page" class="lb-close">Đóng</a>
                                <img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
                                <div></div>
                            </div>
                        </li>
                        <li>
                            <a href="#image-2">
                                <img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
                                <span>Đẳng cấp</span>
                            </a>
                            <div class="lb-overlay" id="image-2">
                                <img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
                                <div></div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-3">
                                <img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
                                <span>Vết hằn</span>
                            </a>
                            <div class="lb-overlay" id="image-3">
                                <img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
                                <div>
                                </div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-4">
                                <img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
                                <span>Từ tốn</span>
                            </a>
                            <div class="lb-overlay" id="image-4">
                                <img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
                                <div></div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-5">
                                <img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
                                <span>Đam mê</span>
                            </a>
                            <div class="lb-overlay" id="image-5">
                                <img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
                                <div></div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-6">
                                <img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
                                <span>Sang trọng</span>
                            </a>
                            <div class="lb-overlay" id="image-6">
                                <img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
                                <div></div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-7">
                                <img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
                                <span>Đánh bật</span>
                            </a>
                            <div class="lb-overlay" id="image-7">
                                <img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
                                <div></div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <li>
                            <a href="#image-8">
                                <img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
                                <span>Thu hút</span>
                            </a>
                            <div class="lb-overlay" id="image-8">
                                <img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
                                <div></div>
                                <a href="#page" class="lb-close">Đóng</a>
                            </div>
                        </li>
                        <div class="clearfix"></div>
                    </ul>
                </section>
            </div>
        </div>
    </div>

@stop