@extends('Layout.master')

@section('noidung')
    <div class="men">
        <div class="container">
            <div class="grid_1">
                <h1>Thông tin</h1>
                <p>Được thành lập cách đây hơn 2 tháng – vào những ngày cuối cùng của năm 2016, Đồng Hồ WATCHES đã tồn tại và phát triển đến ngày nay và đang dần vươn lên trở thành 1 trong những nhà bán lẻ đồng hồ hàng đầu ở Việt Nam!

Với tiêu chí phải luôn đem lại giá trị cao nhất cho khách hàng, Đồng Hồ WATCHES không chỉ bán cho khách hàng những chiếc đồng hồ tốt nhất mà còn mang lại sự an tâm cho khách hàng khi sử dụng đồng hồ bằng các hình thức bảo hành, hậu mãi mà khó có thể tìm được ở bất kì đâu!

Sự thoải mái, tiện lợi và tâm lý khách hàng luôn được đặt lên hàng đầu để khách hàng khi đến với Đồng Hồ WATCHES sẽ luôn là những khoảnh khắc đáng nhớ lưu lại trong tâm trí khách hàng!

Cùng với mục tiêu trở thành nhà bán lẻ đồng hồ hàng đầu Việt Nam, Đồng Hồ WATCHES đã và đang không ngừng cải tiến chất lượng, dịch vụ, hậu mãi ngày càng tốt hơn để có thể đáp ứng mọi nhu cầu của khách hàng!</p>
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
                        <li class="phone_desc">Website : <a href="cititime.com.vn">www.watches.com</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="grid_3">
                    <ul class="iphone">
                        <i class="msg"> </i>
                        <li class="phone_desc">Email : <a href="gmail.com">mail(at)watches.com</a> </li>
                        <div class="clearfix"> </div>
                    </ul>
                    <ul class="iphone">
                        <i class="home"> </i>
                        <li class="phone_desc">Địa chỉ : 123 Nguyễn Văn Cừ, Quận 5, TP Hồ Chí Minh </li>
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