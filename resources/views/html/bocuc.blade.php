@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Bố cục website như thế nào ?</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Hiện nay phiên bản HTML mà hầu hết mọi người sử dụng và tuân theo đó là phiên bản HTML5, phiên bản ra đời giúp 
                        cải thiện khả năng đọc hiểu cho con người và các phương tiện thiết bị khác như công cụ tìm kiếm, trình duyệt 
                        web, các công cụ phân tích .... Chính vì thế mà mỗi thẻ đều có ý nghĩa riêng.
                    </p>
                    <h2 class="section__h2"> Bố cục của 1 trang web </h2>
                    
                    <p>
                        
                        <img src="/img/bocuc.png" alt="bố cục" > 

                    </p>
                    <p>
                        Trước tiên bố cục của 1 trang web rất đa dạng và linh hoạt tùy theo nhu cầu thẩm mỹ, phân loại web .... nên có rất 
                        rất nhiều các bố cục khác nhau. Nhưng tựu chung 1 web cơ bản đều chứa 3 phần <b>Đầu trang , phần thân trang,
                         phần cuối trang</b>
                    </p>
                    <h2 class="section__h2"> Đầu trang </h2>
                    <p>
                        Đây là phần đầu tiên của mỗi trang chứa logo , menu, ô tìm kiếm, thông tin thời tiết, ngày tháng ... Theo chuẩn HTML5 để cho 
                        người và các công cụ khác hiểu được đây là phần đầu tiên của trang thì chúng ta  dùng thẻ <span class="code"> &lt;header &gt;... &lt;/header &gt; </span>
                        bên trong thẻ này có thể sẽ chứa rất nhiều thẻ con khác nhưng nếu chúng ta viết mã phần đầu trang thì nên có thẻ này đầu tiên.
                        Trong phần này chúng ta cũng có thẻ <span class="code"> &lt;nav &gt;... &lt;/nav &gt; </span> thẻ này mục đính là chứa những nội dung chính 
                        của trang và giúp <b>điều hướng </b> chuyển người dùng đến các chủ đề khác trong trang.
                    </p>
                    <h2 class="section__h2"> Thân trang </h2>
                    <p>
                        Đây là phần quan trọng nhất của bất kỳ trang web nào nó thể hiện nội dung mà trang đó truyền đạt thông thường để bắt đầu xây dựng 
                        phần thân chúng ta sẽ bắt đầu với thẻ <span class="code"> &lt;section &gt;... &lt;/section &gt; </span> thẻ này dùng để xác định hay chọn lấy 1 vùng , 1 phần tử độc lập (như 1 đoạn văn bản 
                         1 bức ảnh ...) Nó như 1 cái thùng catton nơi mà bạn có thể bỏ vào đó bất cứ thứ gì bạn muốn.
                         
                    </p>
                    <p>
                        Thẻ <span class="code"> &lt;artical &gt;... &lt;/artical &gt; </span> thường được sử dụng để đánh dấu một bài viết trong trang như 
                        1 bài báo, 1 bài review đây là các nội khung khép kín và độc lập . Phân biệt 2 thẻ này nhé các bạn. Thẻ <span class="code"> &lt;section &gt; </span> bên trong nó bắt 
                        buộc phải có thẻ tiêu đề ( thẻ <span class="code"> &lt;h1 -> h6 &gt; </span> ) và các nội dung bên trong phải cùng 1 chủ đề. Thẻ 
                        <span class="code"> &lt;artical &gt; </span> nội dung trong thẻ độc lập riêng biệt tách rời với các nội dung khác của web.
                    </p>
                    
                    <p>
                        Thẻ <span class="code"> &lt;aside &gt; </span> các thành phần bên trong thẻ này có liên quan đến phần nội dung chính, và hay 
                         được sử dụng để thiết kế sidebar các phần như bài viết liên quan, video liên quan ... Trong thực tế thì việc sử dụng 2 thẻ này rất linh hoạt 
                         thẻ <span class="code"> &lt;artical &gt; </span> có thể là thẻ cha của thẻ <span class="code"> &lt;section &gt; </span> hoặc ngược lại. 
                         Ví dụ như blog này của mình , thẻ <span class="code"> &lt;section &gt; </span> là thẻ cha của thẻ <span class="code"> &lt;artical &gt; </span>.
                    </p>
                    <h2 class="section__h2"> Cuối trang </h2>
                    <p>
                        Đây là phần cuối của mỗi trang web thường chứa các thông tin liên quan đến web như thông tin liên hệ , chính sách và điều khoản, nhưng lưu 
                        ý , .... Và để xây dựng phần cuối trang chúng ta nên bắt đầu với thẻ <span class="code"> &lt;footer &gt; </span> . Thường thì lúc mới đầu thiết kế 
                        mình thường không thấy được phần quan trọng của phần này, nhưng giờ thì mình đã biết nó có độ quan trọng trong việc Google cảm thấy 
                        web của bạn là an toàn và uy tín.
                    </p>
                    <p>
                       


                    </p>
                    <h2 class="section__h2"> Kết lại </h2>
                    <p>
                       Xây dựng bố cục website đẹp và ưng ý không hẳn dễ dàng những thứ mình chia sẻ bên trên hầu như website nào cũng phải có 
                       và tùy theo từng mục đính thiết kế mà chúng ta sử dụng linh hoạt các thẻ trên. Chúc các bạn 1 ngày thành công. Cảm ơn bạn đã đọc.
                    </p>
                    <div class="next__pre">
                        <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html" class= "pre"title="html là gì">
                            Hoạt động của thẻ HTML
                         </a>
                        <a href="/cach-su-dung-cac-the-html-co-ban" class= "next"title="cách sử dụng các thẻ html cơ bản"> Cách sử dụng các thẻ HTMl cơ bản</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/html" title="bên lề viết mã"> HTML</a>
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
                <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh">
                        <img src="/img/benle2.png" alt="muc dich">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li>
                <!-- <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc">
                        <img src="/img/internet.png" alt="internet">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" internet" class="relative__description">
                        Cách thức internet hoạt động</a>
                    </h3>
                </li> -->
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