@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Nodejs những điều cơ bản nhất</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Nodejs không phải là 1 ngôn ngữ lập trình, Nodejs cũng không phải là 1 framework của javascript. Nodejs là 1 <b>nền tảng</b>
                         giúp chúng ta xây dựng được các ứng dụng mạng nhanh chóng và dễ dàng mở rộng. Đây là điều rất phổ biến khi chúng ta tìm hiểu về Nodejs.
                    </p>
                    <p>
                        Trong thực tế khi viết mã js chúng ta thường xuyên sử dụng trình duyệt để chạy cũng như kiểm tra lỗi trong quá trình thực thi file js.  
                        Vậy nếu không có trình duyệt thì chúng ta có chạy được file js không ? . Tất nhiên là có rồi, thông qua Nodejs, file js của chúng ta hoàn toàn 
                        có thể chạy được. Đó chính là chức năng của Nodejs đó, nó làm <b>nền</b> cho file js của chúng ta được thực thi. Nhờ có nodejs làm nền mà javascript 
                        thoát ra được trình duyệt và tạo nên các ứng dụng cực kỳ mạnh mẽ.
                    </p>
                    
                    <h2 class="section__h2">Nodejs được dùng ở đâu</h2>
                    <p>
                       Nodejs có thể chạy trên mọi hệ điều hành và được sử dụng để chạy trên các máy chủ và các ứng dụng như : Máy chủ chát online, Máy chủ game ,
                       Máy chủ quảng cáo, Dịch vụ lưu trữ đám mây, Cloud Sever.... tóm lại nodejs được sử dụng để chạy ở phía Sever.
                        
                    </p>
                    <p>
                        <img src="/img/node-detail2.png" alt="nodejs " >
                    </p>
                    <p>
                        Nodejs là bệ phóng cho javascript cùng với số lượng lập trình viên javascript rất lớn từ đó cho ra đời rất nhiều các framework javascript chạy trên 
                        nodejs (framework hay thư viện chính là các đoạn mã js làm 1 công việc, chức năng nào đó đã được người khác viết ra chúng ta chỉ việc học và sử dụng nó ) , chính vì có rất nhiều 
                        thư viện như vậy nên cần 1 trình quản lý các thư viện này và lúc đó chúng ta cần tới NPM (Node package manager). Với việc viết mã làm web thì chúng 
                        ta có các thư viện như : <span class="code">express , jsonwebtoken , dotenv , express-handlebars....</span> rất rất nhiều nữa....
                    </p>
                    
                    <h2 class="section__h2"> Cảm nhận cá nhân</h2>
                    <p>
                        Nodejs được dùng ở phía sever nên để có thể sử dụng được, chúng ta cần rất nhiều kiến thức về javascript đặc biệt là những cú pháp mới trong ES6 
                        chúng ta cần phải hiểu cơ bản về giao thức https cách nói chuyện giữa client - sever . Với tất cả những gì mình biết về nodejs 
                        trong blog này ở mục Nodejs  mình sẽ cùng các bạn làm chức năng cơ bản nhất của 1 webapp đó là Đọc, Thêm , Sửa , Xóa .. hay còn gọi CRUD nhé. 
                        Trên đây là tất cả những gì mình biết về Nodejs nếu bạn thấy chỗ nào cần bổ sung sửa chữa hãy liên hệ với mình. Cảm ơn bạn đã đọc.

                    </p>
                
                    <!-- <div class="next__pre">
                        <a href="/website-la-gi" class= "pre"title="website là gì ?">
                            Website là gì ?
                         </a>
                        <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html" class= "next"title="hoạt động của các thẻ html"> 
                            Hoạt động hiển thị của các thẻ
                        </a>
                    </div>
                     -->
                    <div class="tag">
                        Tag: <a href="/nodejs" title="nodejs"> Nodejs</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title="lộ trình">
                        <img src="/img/roadmap.png" alt="benle">
                    </a>
                    <h3>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title=" lộ trình" class="relative__description">
                        Lộ trình cơ bản nhất</a>
                    </h3>
                </li>
                <!-- <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh">
                        <img src="/img/benle2.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li> -->
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc">
                        <img src="/img/internet.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" nodejs" class="relative__description">
                        Cách thức internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/css-co-ban-cho-nguoi-moi-bat-dau" title="css cơ bản">
                        <img src="/img/css1.png" alt="http">
                    </a>
                    <h3>
                        <a href="/css-co-ban-cho-nguoi-moi-bat-dau" title=" css cơ bản" class="relative__description">
                        CSS cơ bản cho người mới bắt đầu</a>
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