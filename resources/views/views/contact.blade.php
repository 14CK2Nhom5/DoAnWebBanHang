@extends('Layout.master')

@section('noidung')
    <div class="men">
        <div class="container">
            <div class="grid_1">
                <h1>Thông tin liên hệ</h1>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum</p>
            </div>
            <div class="grid_4">
                <div class="grid_2 preffix_1">
                    <ul class="iphone">
                        <i class="phone"> </i>
                        <li class="phone_desc">Điện thoại : +1 800 245 2365 </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="iphone">
                        <i class="flag"> </i>
                        <li class="phone_desc">Website : <a href="mailto:mail@demolink.org">www.demolink.com</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="grid_3">
                    <ul class="iphone">
                        <i class="msg"> </i>
                        <li class="phone_desc">Email : <a href="mailto:mail@demolink.org">mail(at)watches.com</a> </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="iphone">
                        <i class="home"> </i>
                        <li class="phone_desc">Địa chỉ : vel illum dolore eu feugiat nulla </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact_form">
                <h2>Phản hồi</h2>
                <form>
                    <div class="col-md-6 to">
                        <input type="text" class="text" value="Họ tên" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ tên';}">
                        <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                        <input type="text" class="text" value="Chủ đề" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Chủ đề';}">
                    </div>
                    <div class="col-md-6 text">
                        <textarea value="Tin nhắn" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tin nhắn';}">Tin nhắn</textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="but__center"><input type="submit" value="Gửi &gt;&gt;"></div>
                </form>
            </div>
        </div>
    </div>
@stop