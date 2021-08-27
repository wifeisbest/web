@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Lộ trình xây dựng blog, website đơn giản nhất </h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        <img src="/img/roadmap.png" alt="Lộ trình xây dựng website đơn giản nhất" >
                    </p>
                    <p>
                        Để không làm mất thời gian thêm của các bạn mình xin phép đi luôn vào giải thích lộ trình mà mình đã nêu ở trên.
                    
                    </p>
                    <h2 class="section__h2">Tổng quan</h2>
                    <p>
                        Ở phần này bạn sẽ tìm hiểu cách cơ bản nhất về mạng lưới internet hoạt động ra sao ? về giao thức HTTP, mô hình 
                        <span class="hightline">client - sever </span> Blog là gì ? Website là gì ? Webapps là gì ? ... vân vân và mây mây
                        bạn không cần hiểu rõ nó chi tiết như một người chuyên gia nhưng bạn cần nắm được những khái niệm cơ bản nhất, nó sẽ là nền tảng
                        cho việc bạn tư duy giải quyết các lỗi mà bạn gặp khi viết mã sau này. 
                        
                    </p>
                    <h2 class="section__h2">Frontend là gì ?</h2>
                    <p>
                       Hầu như tất cả mọi thứ bạn nhìn thấy trên màn hình điện thoại, laptop ... khi bạn truy cập vào 1 website , báo mạng,... từng chi tiết hình ảnh
                       , nút bấm, màu sắc, cỡ chữ... đều liên quan đến công việc của frontend  đã làm frontend hay những việc hiện thị trên màn hình mà chúng ta thấy đều phải nắm chắc và thành thạo
                       bộ 3 kinh điển <strong> <a href="/html" id= "one"title="cơ bản về html"> HTML</a>, <a href="/css3" id= "one"title="cơ bản về css">CSS </a>, 
                       <a href="/javascript" id= "one"title="javascript cơ bản">JavaScript </a></strong> theo đó là các framwork ( là các thư viện người khác làm sẵn mình chỉ việc học cách sử dụng).
                       Về bộ 3 này các bạn có thể tìm hiểu chi tiết hơn khi click vào chúng nhé.
                       
                    </p>
                    
                    <h2 class="section__h2">Vậy Backend là sao ?</h2>
                    <p>
                        <img src="/img/bangtroi.jpg" alt="Lộ trình xây dựng website đơn giản nhất" >
                    </p>
                    <p>
                        Nếu ví như frontend là phần nổi của tảng băng, thì Backend chính là phần chìm của tảng băng, phần chìm của tảng băng bao giờ cũng lớn hơn phần nổi
                        chính vì lý do đó nên hình Backend mình vẽ cũng to hơn hẳn..:)) . Nhưng để cơ bản nhất thì cũng không có gì khó khăn cả. Với sự nhiệt
                        huyết của bạn thì băng lớn đến mấy rồi cũng tan.
                    </p>
                    <h2 class="section__h2">Deploy</h2>
                    <p>
                        Nếu bạn đã đi được đến phần này thì bạn sẽ được hưởng thụ cảm giác sung sướng khi sản phẩm của bạn đã chạy trên môi trường thật,
                        bạn có thể gửi link sản phẩm của bạn cho bạn bè được rồi, phần này cũng khá là loằng ngoằng nhưng làm rồi thì "ừ cũng làm được dễ thôi mà"
                        Quá trình mình làm nên blog này chỉ có mỗi 1 mình không có người hướng dẫn, mọi thứ mình đều đi góp nhặt về, theo mình bạn hãy tìm 1 người 
                        cùng đồng hành thì chắc kết quả và thời gian sẽ ngắn đi rất nhiều. Cảm ơn bạn đã đọc đến đây. Hãy tiếp tục đồng hành cùng mình trong các bài
                        viết tiếp theo nhé.
                    </p>
                    <div class="next__pre">
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" class= "pre"title="Mục đính">
                         Mục đính mình tạo ra blog 
                        </a>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" class= "next"title="lộ trình"> 
                        Cách thức internet hoạt động</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/benle" title="bên lề viết mã"> Bên lề</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/giao-thuc-tcp-ip-http-va-https" title="giao thức tcp/ip http và https">
                        <img src="/img/http.png" alt="giao thức">
                    </a>
                    <h3>
                        <a href="/giao-thuc-tcp-ip-http-va-https" title="giao thức tcp/ip http và https" class="relative__description">
                        Giao thức TCP/IP http và https</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh">
                        <img src="/img/benle2.png" alt="núi">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cách thức">
                        <img src="/img/internet.png" alt="interter">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" cách thức" class="relative__description">
                        Cách thức mạng lưới internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/mo-hinh-client-sever" title="mô hình client sever">
                        <img src="/img/sever.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/mo-hinh-client-sever" title=" mô hình client sever" class="relative__description">
                        Mô hình client sever</a>
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