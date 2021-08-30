@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Thẻ HTML cơ bản nhất</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Trong bài trước dựa theo cách thức hiển thị trên trình duyệt Website chúng ta đã phân ra làm 2 loại đó là <strong>
                         Block và Inline</strong>. Trong bài này chúng ta sẽ đi sâu hơn vào cấu trúc tạo nên 1 thẻ html , và theo mục đích sử dụng 
                         chúng ta sẽ phân loại chúng thành các nhóm khác nhau.
                    </p>
                    <p>
                        <img src="/img/thehtml1.png" alt="thẻ html  " > 
                    </p>
                    
                    <p>
                        Trên hình ta có 1 thẻ h1 là thẻ con của thẻ <span class="code"> &lt;body &gt;.. &lt;/body &gt; </span>. <strong> Phần tròn đỏ 1 </strong>
                        chúng ta gọi thẻ mở dùng để đánh dấu vị trí bắt đầu của thẻ. <strong> Phần tròn đỏ 2 </strong> chúng ta gọi là thẻ đóng dùng để đánh dấu vị trí kết thúc của thẻ và <strong>Phần tròn đỏ 3</strong> 
                        chúng ta gọi là phần nội dung của thẻ h1 và thẻ h1 thuộc dạng khối (block). Trên đây là cấu trúc đầy đủ của 1 thẻ cơ bản 
                        , từ đây chúng ta lại có nhưng cách phân chia loại thẻ khác theo cấu trúc đó là :


                    </p>
                    <p>
                        <strong>Thẻ chỉ có thẻ mở</strong> Là những thẻ chỉ có thẻ mở mà không có thẻ đóng ví dụ như thẻ <span class="code"> &lt;img &gt;</span>
                        là thẻ để hiển thị hình ảnh, dánh dấu đây là thẻ ảnh trong văn bản html của chúng ta. Và còn nhiều thẻ khác nữa 
                        <span class="code"> &lt;link &gt;</span> , <span class="code"> &lt;meta &gt;</span>,
                    </p>
                    <p>
                        <strong>Thẻ không có nội dung</strong> ví dụ thẻ <span class="code"> &lt;br &gt;</span> chức năng của thẻ này 
                        là để ngắt dòng.
                    </p>
                    <p>
                        Qua ví dụ trên chúng ta cũng thấy được tên thẻ bao giờ cũng đc bao quanh bởi ký tự  &lt;  &gt; điểm khác nhau 
                        giữa thẻ đóng và thẻ mở đó là thẻ đóng thì có thêm ký tự "/" .
                    </p>
                   
                    <h2 class="section__h2"> Chút Lưu Ý </h2>
                    <p>
                        Thẻ trong html không phân biệt chữ hoa và thường nhưng trong thực tế thì chúng ta chỉ nên dùng chữ thường thôi nhé, 
                        Bài này khá ngắn và cũng có chút ít chia sẻ của mình, sau này vào thực tế viết code với sự hỗ trợ của các công cụ 
                        viết code như VScode thì chúng ta cũng không hay để ý về những thẻ đóng mở này. Nhưng trên hết với những bạn mới tinh thì 
                        đây lại là những khái niệm rất cơ bản mà chúng ta không thể bỏ qua.
                    </p>
                    <div class="next__pre">
                        <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html" class= "pre"title="html là gì">
                            Hoạt động của thẻ HTML
                         </a>
                        <a href="/thuoc-tinh-trong-the-html" class= "next"title="Thuộc tính "> Thuộc tính thẻ HTML</a>
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