@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Lựa chọn lối đi </h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Từ cuối  những năm 2017 khi thông tin về cách mạng công nghiệp 4.0 lan tỏa trên các phương tiện thông tin, 
                        sống trong bầu không khí của 1 cuộc cách mạng đó sẵn với niềm đam mê vọc vạch máy tính mình đã chọn đến với công nghệ thông tin,
                        với những người không được đào tạo bài bản như mình đến được với hôm nay, có được 1 cái blog nhỏ nhỏ mà mình tự tay làm từ <span class="hightline"> Z đến A</span> đó là 1 chặng
                        đường không ngắn. Mình viết blog này mục đính là để các bạn tay ngang, những bạn bắt đầu từ con số không,
                         có hứng thú với việc viết mã, và muốn tự tay làm ra 1 sản phẩm riêng 1 sản phẩm mà bạn quản lý từ đầu đến cuối.
                    
                    </p>
                    <p>
                        Các bài viết trong blog này mình hướng đến các mới tinh muốn tự học và trải nghiệm công việc viết mã, nếu bạn là chuyên gia hoặc bạn là người
                        đã có nhiều kinh nghiệm ghé ngang qua blog của mình nếu thấy có vấn đề nào cần bổ sung sửa chữa, hoặc góp ý vui lòng <a class="hightline" id="one" href="/contact">Liên hệ </a>, mình
                        chân thành cảm ơn bạn.
                        
                    </p>
                    <p>
                        <span class="hightline">Khi bạn là người mới tinh khi bắt đầu sẽ có vô vàn khó khăn,</span> khó khăn đầu tiên đó là tìm đáp áp cho những lựa chọn hướng đi của mình
                        Chọn mảng mobile thì học ngôn ngữ gì ? Lộ trình ra sao ? Học ở đâu ? Có những khóa học nào ? Học mảng web thì học những gì ? Webapp là gi ?
                        Học mobile mới là xu thế  ? Hay là AI Bigdata, IOT những thứ này giờ đang hot ? Mình cũng đã như gặp phải những câu hỏi như thế và
                        bạn nếu cũng như mình lựa chọn mảng web thì trong khuôn khổ blog này mình sẽ viết mọi thứ mình tìm hiểu được để viết nên blog này.

                    </p>
                    <p>
                        <img src="/img/benle2.png" alt="Chinh phục thử thách" >
                    </p>
                    <h2 class="section__h2">Tạo ra blog như này có khó không ? lâu không ?</h2>
                    <p>
                        Để hiểu về cách thức hoạt động 1 website 1 blog cách tạo ra nó thì có rất rất nhiều kiến thức bạn cần phải biết, phải học
                        từ những gì mình trải qua và cảm nhận được và đến bây giờ những kiến thức đó thì mình cũng mới chỉ hiểu được ở mức độ cơ bản nhất,
                        bạn hãy yên tâm khi mọi thứ bạn đã hiểu rồi thì "cũng dễ thôi mà".
                    </p>
                    <p>
                        Nếu bạn có quyết tâm và muốn chinh phục thì hãy bắt đầu thôi nào. Ngọn núi cao nhất nằm trong chính con người bạn.
                    </p>
                    <div class="next__pre">
                        <a href="/benle" class= "next"title="bên lề viết mã" > </a>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" class= "pre"title="bên lề viết mã" > >>>Lộ trình xây dựng blog</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span> thường xuyên dùng đến. -->
                    <div class="tag">
                        Tag: <a href="/benle" title="bên lề viết mã" > Bên lề</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/node" title="nodejs" >
                        <img src="/img/node-detail1.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title=" Lộ trình" class="relative__description">Lộ trình việc viết mã xây dựng...</a>
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
                    <a href="/nodejs-la-gi" title="Nodejs là gì " >
                        <img src="/img/http.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/nodejs-la-gi" title=" Nodejs là gì " class="relative__description">
                        Nodejs là gì ?</a>
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