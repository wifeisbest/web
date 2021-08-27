@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Giao Thức Là Gì ?</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Cùng hiểu về cách thức mà internet hoạt động ra sao chúng ta hãy lấy 1 ví dụ 2 bạn sinh viên A và B mới trúng tuyển đại học
                        cùng thuê trọ phòng số 1, ở 1 dãy trọ có 10 phòng. 2 bạn mỗi bạn đều có 1 chiếc laptop nhưng vừa mới đến nên chưa thể lắp được mạng.
                        Đêm khuya thanh vắng giờ điểm canh 3 2 bạn trẻ vẫn không thể nào ngủ được bèn nảy sinh ý định kết nối 2 cái laptop để cùng chơi game 
                        <span class="hightline">XYZ ABC </span> gì gì đó, rất may mắn là phòng trọ còn lại ít dây mạng cũ mà người trước ở để lại, thế là 1 đầu dây mạng cắm vào máy bạn A, 1 đầu dây mạng
                        cắm vào máy bạn B vậy là giờ đây 2 bạn ấy đã kết nối nhau thông qua <strong> Laptop và dây mạng</strong> mỗi khi bạn A nhấn phím Enter thì 
                        1 thông điệp truyền từ Laptop bạn A qua dây mạng đến được với Laptop bạn B và ngược lại. Điều tương tự cũng xảy ra khi 2 bạn ấy
                        kết nối qua bluetooth hoặc WiFi
                    
                    </p>
                    <p>
                        <img src="/img/computerAB.png" alt="kết nối máy tính giữa A và B" >
                    </p>
                    <h2 class="section__h2">Bạn C và bạn D đến ở cùng</h2>
                    <p>
                        Sau những ngày chơi game suốt sáng thâu đêm 2 bạn trẻ vẫn chưa có tiền kéo mạng, bỗng 1 ngày đẹp trời 2 bạn C và D cùng lớp 
                        xin đến ờ cùng, "ờ thì tiền phòng rẻ đi" bạn C và D cũng thích chơi game offline "ok thôi ! game chơi đông mới vui", nhưng vấn đề
                        bắt đầu nảy sinh để 4 người cùng chơi thì mỗi máy lại phải cần tới 3 cái cổng cắm dây mạng và 6 đoạn dây mạng nữa , lẽ nào "Game over ?" 
                        
                    </p>
                    <p>
                        <img src="/img/computerxxx.png" alt="kết nối rất nhiều máy tính " >
                    </p>
                    <h2 class="section__h2">Siêu kết nối</h2>
                    <p>
                        Để giải quyết vấn đề trên các bạn trẻ quyết định mua 1 thiết bị có 6 ổ cắm mỗi máy của mỗi bạn sẽ cắm vào thiết bị này đó chính là 
                        <strong>Router </strong>khi máy A gửi thông điệp đến máy D router làm nhiệm vụ chuyển thông điệp đến đúng máy D mà không phải là máy nào khác 
                        trong cùng hệ thống, đây cũng chính là kết nối mạng Lan trường hợp khi các bạn ra quan nét chơi game mà bỗng dưng quán mất internet các bạn 
                        chơi game offline. Điều lưu ý nhỏ ở đây chính là Router cũng chính là thiết bị vật lý và bản thân nó cũng có thể kết nối đến các router khác 
                        thông qua dây cáp mạng.
    
                       
                    </p>
                    <p>
                        Trong dãy trọ có 10 phòng mỗi phòng đều có 1 router điều đơn giản là mua 10 dây cáp mạng cắm vào mỗi router để kết nối chúng lại 
                        với nhau , khi đó cả xóm trọ đã cùng chung 1 mạng lưới. Nhưng chúng ta không thể kéo dây mạng từ Hà Nội vào Sài Gòn chỉ để cắm vào 
                        hệ thống các router khác được, việc làm tiết kiệm và đơn giản hơn đó là tận dụng mạng lưới viễn thông của các nhà mạng, thông qua các cột
                        thu phát sóng, đường dây điện thoại chúng ta có thể kết nối hàng tỷ máy tính lại với nhau và lúc này khái niệm <strong>Model</strong> ra đời 
                        .Thông qua Model các thông điệp gửi qua lại trong mạng lưới của chúng ta được quản lý bởi các nhà viễn thông và ngược lại.
                    </p>
                    <h2 class="section__h2">Internet</h2>
                    <p>
                        <img src="/img/sieulienket.png" alt="hệ thống internet ra đời " >
                    </p>
                    <p>
                        Để xóm trọ của chúng ta có thể kết nối tới Sài Gòn đã đến lúc chúng ta chung tiền kéo mạng Viettel, toàn bộ 
                        hệ thống <strong> Router, Model, dây mạng ...</strong> chúng là cơ sở hạ tầng thuộc sở hữu của nhà mạng Viettel, nhà mạng Viettel 
                        kết nối với cơ sỏ hạ tầng của nhà mạng Vina. Toàn bộ cơ sở hạ tầng của các nhà mạng trên thế giới được kết nối với nhau. <strong>Internet</strong> bao 
                        gồm tất cả các cơ sở hạ tầng đó.
                    </p>
                    <div class="next__pre">
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" class= "pre"title="lộ trình học viết mã" >
                            Lộ trình cơ bản nhất
                        </a>
                        <a href="/giao-thuc-tcp-ip-http-va-https" class= "next"title="Giao thức http"> Giao thức TCP/IP http và https</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/benle" title="bên lề viết mã" > Bên lề</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title="lộ trình" >
                        <img src="/img/roadmap.png" alt="benle">
                    </a>
                    <h3>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title=" lộ trình" class="relative__description">
                        Lộ trình cơ bản nhất</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh" >
                        <img src="/img/benle2.png" alt="núi">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cách thức" >
                        <img src="/img/internet.png" alt="interter">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" cách thức" class="relative__description">
                        Cách thức mạng lưới internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/giao-thuc-tcp-ip-http-va-https" title="giao thức tcp/ip và http https" >
                        <img src="/img/http.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/giao-thuc-tcp-ip-http-va-https" title=" giao thức tcp/ip và http https" class="relative__description">
                        Giao thức TCP/IP và http https</a>
                    </h3>
                </li>
            </ul>
        </section>  
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/detail.css">
@endsection