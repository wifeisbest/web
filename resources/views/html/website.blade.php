@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Website, Webapp, Blog là gì ? </h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Trước khi đi vào phân tích các khái niệm trên chúng ta cần biết được<strong> 3 trụ cột </strong> tạo nên 1 website , đó là 
                        <strong> URL , HTTP, HTML</strong>
                    </p>
                    <p>
                        <strong>URL: </strong> Là 1 chuỗi ký tự văn bản giúp bạn có thể tìm thấy trang web 
                        ,video, hình ảnh,..trên internet.
                    </p>
                    <p>
                        <strong>HTTP: </strong>Khi bạn đã có url thông qua giao thức http bạn sẽ nhận được 
                        đúng những gì bạn cần thông qua đường dẫn url bạn đã cung cấp .
                         Nếu bạn chưa rõ ràng lắm về http bạn có thể xem qua bài viết này của mình 
                        <a href="/giao-thuc-tcp-ip-http-va-https"> Giao Thức là gì</a>

                    </p>
                    <p>
                        <strong>HTML: </strong> Ngôn ngữ đánh dấu siêu văn bản,
                         1 văn bản thuần túy là 1 tờ giấy bạn viết mà trên tờ giấy đó chỉ toàn là chữ, còn ngôn ngữ siêu văn bản 
                        là 1 văn bản trong đó có 1 cấu trúc riêng mà bạn phải tuân theo,
                         trong văn bản có thể chứa hình ảnh, video, âm thanh,...

                    </p>
                    <h2 class="section__h2">Website là gì ?</h2>
                    <p>
                        1 <strong>Website</strong> là tập hợp rất nhiều các siêu văn bản, các siêu văn
                         này lại được kết nối lại với nhau bằng rất nhiều cách.
                        Bạn thường hay nghe cụm từ "1 trang web" khi nghe đến cụm từ 
                        này chúng ta cần hiểu được là trang web này chứa rất nhiều các tài liệu 
                        siêu văn bản và mỗi 1 tài liệu siêu văn bản trong đó chính là 1 
                        web page (1 trang tài liệu trong rất nhiều trang thuộc về web đó);
                        Bạn cần phân biệt được website và web page nhé !.
                         Trong thực tế vẫn có những website chỉ chứa 1 trang duy nhất, 1 tài liệu siêu văn bản duy nhất.
                        
                    </p>
                    <p>
                       Sau khi đã có khái niệm website là gì thì tùy theo mục đính tạo ra website đó mà chúng ta phân loại ra các 
                       loại website khác nhau.
                       <strong>Blog </strong> định nghĩa của nó chính là " Nhật ký web" 1 dạng nhật ký trực tuyến đến đây
                        thì bạn cũng rõ rồi đấy 
                       đã là nhật ký thì là nó có những ý kiến cá nhân của người viết nhật ký,
                        chủ đề của blog thì thường liên quan đến kinh nghiệm của người viết blog.
                       Tùy theo mục đính của blog mà chúng ta cũng có rất nhiều loại blog như , 
                       blog ẩm thực, blog tin học, blog được làm cha ...
                        
                    </p>
                    
                    <p>
                        Một website cơ bản thì chỉ là nơi cung cấp thông tin cho người sử dụng nó chỉ có tác động 1 chiều, 
                        còn <strong> Web app</strong> 
                        khác biệt lớn nhất cơ bản nhất nằm ở khả năng tương tác,
                         người đọc hoàn toàn có thể tương tác ngược trở lại như cho phép tạo tài khoản , đăng bài, gửi hình ảnh ...
                        ví dụ điển hình nhất chính là các trang mạng xã hội.                            
                       
                    </p>
                    <h2 class="section__h2"> Tổng kết lại</h2>
                    <p>
                     Mục đính bài viết này mình muốn chia sẻ với các bạn về những gì mình hiểu về website, 1 trang web ( web page),
                     sự khác nhau giữa blog và web app. Nếu bạn là người mới, để có cơ sở vững chắc nhất trước khi đến với những dòng mã đầu tiên 
                     bạn cần thật sự hiểu và nắm rõ <strong> 3 trụ cột </strong> phía trên. Cảm ơn bạn đã đọc đến đây, chúc bạn có 1 ngày thành công.

                    </p>
                    <div class="next__pre">
                        <a href="/mo-hinh-client-sever" class= "pre"title="mô hình">
                            Mô hình client - sever 
                         </a>
                        <a href="/html-la-gi" class= "next"title="bên lề viết mã"> HTMl là gì ?</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/html" title="bên lề viết mã"> HTML</a>
                    </div>
                    <div class="fb-comments"
                     data-href="https://xyzabc.xyz/website-la-gi" 
                     data-width="" data-numposts="5"></div>

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
                <li class="relative__post-item">
                    <a href="/ngon-ngu-lap-trinh-javascript" title="ngôn ngữ">
                        <img src="/img/js6.png" alt="ngôn ngữ">
                    </a>
                    <h3>
                        <a href="/ngon-ngu-lap-trinh-javascript" title=" ngôn ngữ" class="relative__description">
                        Ngôn ngữ Lập trình</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc">
                        <img src="/img/internet.png" alt="internet">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" internet" class="relative__description">
                        Cách thức internet hoạt động</a>
                    </h3>
                </li>
                <!-- <li class="relative__post-item">
                    <a href="/contact" title="giao thức mạng">
                        <img src="/img/html1.png" alt="http">
                    </a>
                    <h3>
                        <a href="/contact" title=" html" class="relative__description">
                        Giao thức TCP/IP http https</a>
                    </h3>
                </li> -->
            </ul>
        </section>  
    </div>
@endsection

@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/detail.css">
@endsection