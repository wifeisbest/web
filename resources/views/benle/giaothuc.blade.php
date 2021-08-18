@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Giao Thức Là Gì ?</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Máy tính cây, laptop, điện thoại thông minh ... các thiết bị này trong cùng 1 mạng để nói chuyện, giao tiếp được với nhau
                        thì chúng phải dùng chung "1 ngôn ngữ, 1 quy tắc, quy ước riêng". Tập hợp tất cả các quy tắc , quy ước này được gọi là 
                        <strong>Giao Thức </strong> mạng (Protocols).
                    
                    </p>
                    
                    <h2 class="section__h2">TCP/IP</h2>
                    <p>
                        <strong>IP :</strong> Để trao đổi ,truyền tải dữ liệu trong mạng mỗi thiết bị đều có 1 địa chỉ duy nhất đó chính là IP. 
                        Giao thức IP là những quy tắc, quy định trong việc chuyển dữ liệu giữa các thiết bị trong mạng đến đúng địa chỉ, đúng nơi cần đến.
                        
                    </p>
                    <p>
                        <strong>TCP :</strong> Giao thức TCP là toàn bộ các quy tắc, quy định có vai trò kiểm tra và đảm bảo các dữ liệu được truyền các máy trạm trung gian 
                        được an toàn, không bị chỉnh sửa.
                        
                    </p>
                    
                    <h2 class="section__h2">Giao thức Http, Https được xây dựng trên cơ sở giao thức TCP/IP</h2>
                    <p>
                        Giao thức Http(HyperText Transfer Protocol) và Https cũng lại là các quy tắc , quy định trong việc truyền tải <strong>dữ liệu siêu văn bản</strong> đó là các loại dữ liệu (file .html, âm thanh
                        ,hình ảnh....). Giao thức http dữ liệu không được mã hóa trong quá trình trao đổi nên độ an toàn kém hơn.
                        Giao thức Https (HyperText Transfer Protocol Secure) là giao thức Http có sử dụng thêm SSL (Secure Sockets Layer) dữ liệu được mã hóa  
                        , hầu hết website trên thế giới bây giờ đều dùng https để đảm bảo độ an toàn cao hơn.
    
                       
                    </p>
                    
                    <h2 class="section__h2">Tổng Kết</h2>
                    <p>
                        <img src="/img/tcpip.png" alt="tổng kết  " >
                    </p>
                    <p>
                       Giao thức TCP/IP chính là giao thức nền tảng cơ bản nhất của mọi hệ thống mạng trên thế giới, để đơn giản chúng ta cùng trở vào
                       dây chuyền nhà máy nơi mà 1 kiện hàng (dữ liệu của chúng ta) phải đi qua rất nhiều khâu IP đóng vai trò là các quy định của nhà máy
                       , TCP đóng vai trò là người giám sát, kiểm tra đảm bảo dây chuyền hoạt động đúng và liên tục, xử lý các lỗi xảy ra. 

                    </p>
                    <p>
                       Giao thức TCP/IP chính là giao thức nền tảng cơ bản nhất của mọi hệ thống mạng trên thế giới, để đơn giản chúng ta cùng trở vào
                       dây chuyền nhà máy nơi mà 1 kiện hàng (dữ liệu của chúng ta) phải đi qua rất nhiều khâu IP đóng vai trò là các quy định của nhà máy
                       , TCP đóng vai trò là người giám sát, kiểm tra đảm bảo dây chuyền hoạt động đúng và liên tục, xử lý các lỗi xảy ra. 

                    </p>
                    <p>
                       Giao thức http và https  được sử dụng trong www dùng để truyền tải dữ liệu giữa Web server đến các trình duyệt Web và ngược lại, trong phần
                       <strong>Backend chúng ta sẽ tìm hiểu kỹ hơn về 2 giao thức này</strong>

                    </p>
                    <div class="next__pre">
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" class= "pre"title="cách thức" target="_blank">
                            Cách thức internet hoạt động
                         </a>
                        <a href="/benle" class= "next"title="bên lề viết mã" target="_blank"> bài tiếp theo</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/benle" title="bên lề viết mã" target="_blank"> Bên lề</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title="lộ trình" target="_blank">
                        <img src="/img/roadmap.png" alt="benle">
                    </a>
                    <h3>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title=" lộ trình"target="_blank" class="relative__description">
                        Lộ trình cơ bản nhất</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh" target="_blank">
                        <img src="/img/benle2.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính"target="_blank" class="relative__description">Mục đính mình tạo ra blog</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc" target="_blank">
                        <img src="/img/internet.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" nodejs"target="_blank" class="relative__description">Cách thức internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/node" title="nodejs" target="_blank">
                        <img src="/img/css3.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/node" title=" nodejs"target="_blank" class="relative__description">Title của các bài viết, hay chính là slug</a>
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