@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Mục đính của việc học lập trình </h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Thời gian là thứ đáng quý nhất trên cái cuộc đời này. Và việc học lập trình quả thật tốn không ít thời gian, và nếu bạn đã chọn theo ngành, thì 
                        phía trước chắc hẳn sẽ gặp không ít khó khăn. Nhưng mọi vấn đề đều có nguyên căn và mọi khó khăn đều có giải pháp. Hãy luôn kiên trì với mục tiêu mà mình đã chọn 
                        khi đã bắt đầu những bước chân đầu tiên, nếu có khó khăn xin hãy nhìn vào mục tiêu mà mình đã chọn.
                    
                    </p>
                    <h2 class="section__h2">Con đường đi</h2>
                    <p>
                       Mỗi người trong chúng ta ai cũng có mục tiêu của mình khi đến với việc học viết mã, có bạn chọn việc này với mục tiêu thay đổi thế giới, có bạn chọn học 
                       để đi làm kiếm được thật nhiều tiền ... .Nhưng liệu trong chúng ta đã bao giờ tự hỏi chúng ta phải làm những gì ? làm ra sao ? làm như thế nào chưa ? 
                       Việc xác định được đường lối đúng đắn là vô cùng quan trọng giúp chúng ta nhanh nhất để đạt được mục đính của mình. Hãy lên kế hoạch cho từng ngày nhỏ thôi 
                       nhưng chắn chắn làm được. Hãy hình dung ra kết quả mà chúng ta sẽ nhận được và làm từng bước và hãy kiếm cho mình 1 người đồng hành.
                       
                        
                    </p>
                    <h2 class="section__h2">Lựa Chọn</h2>
                    <p>
                        Hãy chọn và tìm cho mình 1 người thầy, thầy có thể là sách, là người bạn làm tốt hơn mình, là internet, ... Đừng tập trung quá nhiều vào 
                        code hãy dành thời gian để đánh giá, để suy ngẫm và nhìn lại quá trình mình đã làm được, đã đi được đến đâu, có bị lệch hướng hay không ?
                        Cần điều chỉnh những gì ? Cách mình đang học đã chính xác hay chưa ? Và luôn có rất nhiều lựa chọn hãy chọn đúng và chính xác nhất.

                    </p>
                    <p>
                        <img src="/img/dauhoi.png" alt="Mục đính học lập trình để làm gì ?" >
                    </p>
                    <h2 class="section__h2">Chút cá nhân</h2>
                    <p>
                        Theo mình việc có được tư tưởng và lộ trình những việc cần làm (todo list) đúng là việc rất quan trọng, có những lúc mình bỏ ra khá nhiều 
                        thời gian để tìm hiểu 1 chức năng nào đó trong code , vùi đầu vào code việc đó cũng đem lại lợi ích cho mình, nhưng nó lại làm chệch đi mục đích 
                        của mình, mình lại phải dừng lại ngẫm nghĩ. Và cái thiếu nhất của mình đó là 1 người chỉ đường 1 người đồng hành. Để đạt được mục đính của mình các bạn 
                        hãy có cho mình 1 mục đính rõ ràng, kiên định , 1 phương pháp đúng dắn nhất phù hợp với mình , và luôn luôn kiểm tra xem mình đã làm được những gì nhé. 
                        Chúc chúng ta sẽ thành công. Cảm ơn bạn đã đọc.
                    </p>
                    
                    <div class="next__pre">
                        <a href="/cac-buoc-khi-ban-da-co-1-website" class= "next"title="các bước khi bạn đã có 1 website" > 
                            Các bước khi bạn đã có 1 website
                        </a>
                        <!-- <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" class= "pre"title="bên lề viết mã" > >>>Lộ trình xây dựng blog</a> -->
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