@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Cách sử dụng các thẻ HTML cơ bản</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Theo như trong tài liệu chuẩn về HTML của W3schools thì có rất nhiều thẻ html với những mục đích khác nhau, trong khuôn khổ bài viết 
                        này mình sẽ chia sẻ cùng các bạn về các thẻ HTMl hay dùng nhất theo trình tự từ trên xuống dưới.
                    </p>
                    <h2 class="section__h2"> Thẻ HTMl thông dụng trong thẻ <span class="code"> &lt;head &gt;  &lt;/head &gt; </span> </h2>
                    
                    <p>
                        Hầu hết các thẻ trong phần <span class="code"> &lt;head &gt;</span> không hiển thị cho độc giả thấy , nhưng rất quan trọng trong việc định hình , liên kết và miêu tả nội dung 
                        trang web cho các công cụ phân tích và tìm kiếm.
                        <ul class="ul">
                            <li><span class="code"> &lt;title &gt;... &lt;/title &gt; </span>: hiển thị tiêu đề trang web</li>
                            <li><span class="code"> &lt;link &gt;</span> : không có thẻ đóng , dùng để nhúng 1 tập tin vào trang web, như file css ...</li>
                            <li><span class="code"> &lt;meta &gt;</span>: không có thẻ đóng là thẻ mô tả tổng quát nội dung trang web với rất nhiều các thuộc tính đi cùng cực kỳ quan trọng trong việc <b>SEO</b> website</li>
                            <li><span class="code"> &lt;script &gt;  &lt;/script &gt;</span> : chuyên dùng để nhúng các tập tin javascript, thường là các file js ở bên thứ ba , file js chúng ta viết không nên đặt ở đây </li>
                        </ul>
                    </p>
                    <h2 class="section__h2"> Các thẻ HTMl được dùng nhiều trong thẻ <span class="code"> &lt;body &gt;  &lt;/body &gt; </span> </h2>
                    <p>
                       Đây là nơi mà chúng mình thỏa sức sáng tạo và hiện thực những thiết kế đẹp nhất, ngoài những thẻ bố cục quan trọng nhất ở bài trước chúng ta chắc 
                       chắn cũng sẽ dùng đến các thẻ này.
                       <ul class="ul">
                           <li><span class="code"> &lt;div &gt; &lt;/div &gt;</span> : Dùng cực nhiều là dạng thẻ khối với mục đích duy nhất là tạo một khối giữ 1 chỗ trên trang web và nhóm các thẻ có liên quan lại với nhau</li>
                           <li><span class="code"> &lt;h1-->h6 &gt;  &lt;/h1-->h6 &gt;</span> : Thể hiện tiêu đề cho 1 bài viết, 1 bức ảnh ... là thẻ dạng khối xác định tiêu đề quan trọng nhất và giảm dần mức độ quan trọng từ 
                           <b>h1-->h6</b> Trong một trang web cụ thể  nên dùng 1 hoặc 2 thẻ <span class="code"> &lt;h1 &gt;  &lt;/h1 &gt;</span> thôi , nếu có tiêu đề khác mà nội dung ít quan trọng hơn 
                           chúng ta dùng thẻ <span class="code"> &lt;h2 &gt;  &lt;/h2 &gt;</span> tương tự cho các thẻ <b>h3 , h4, h5, h6</b>, các thẻ này có cỡ chữ mặc định đen đậm và giảm dần vì thế chúng ta cũng không bao giờ 
                           dùng thẻ này cho mục đính viết chữ to và làm đậm.
                       </ul>
                       

                    </p>
                    <p>
                        
                        <img src="/img/tieude.png" alt="Tiêu đề" > 

                    </p>
                    <p>
                       <ul class="ul">
                           <li><span class="code"> &lt;p &gt;  &lt;/p &gt;</span> : thẻ khối chứa nội dung là 1 đoạn văn bản</li>
                           <li><span class="code"> &lt;img &gt;  </span>: dạng inline không có thẻ đóng dùng để hiển thị hình ảnh</li>
                           <li><span class="code"> &lt;a &gt;  &lt;/a &gt;</span>: dạng inline dùng để tạo link liên kết đến 1 trang khác</li>
                           <li><span class="code"> &lt;ul &gt;  &lt;/ul &gt;</span>: dạng khối,( block ) dùng kết hợp với thẻ <span class="code"> &lt;li &gt;  &lt;/li &gt;</span> để mô tả danh sách, dùng rất nhiều trong việc tạo phần điều hướng ở phần đầu mỗi website</li>
                           <li><span class="code"> &lt;span &gt;  &lt;/span &gt;</span> : dạng inline chứa nội dung là các đoạn văn bản nhỏ ...</li>
                           <li><span class="code"> &lt;b &gt;  &lt;/b &gt;</span>: dạng inline tạo chữ đậm</li>
                           <li><span class="code"> &lt;i &gt;  &lt;/i &gt;</span>: dạng inline tạo chữ in nghiêng</li>
                           <li><span class="code"> &lt;br &gt;</span>: làm chức năng ngắt và xuống dòng</li>
                           <li><span class="code"> &lt;form &gt;  &lt;/form &gt;</span> : dạng khối dùng kết hợp với thẻ <span class="code"> &lt;input &gt;</span> tạo chức năng nhập liệu </li>
                           <li><span class="code"> &lt;script &gt;  &lt;/script &gt;</span>: thường chứa những file js do chúng ta viết ra để cuối phần của <b>thẻ đóng</b> <span class="code"> &lt;/body &gt;</span> để đảm bảo các file js đó hoạt động đúng.
                       </ul>
                    </p>
                    
                    <p>
                       Trên đây là các thẻ HTML thông dụng nhất hay được dùng và tất cả các thẻ này mình cũng đều sử dụng để viết ra bài viết này ,nếu bạn thấy còn 
                       thiếu thẻ nào cần được bổ sung hãy comment bên dưới cho mình nhé. Cảm ơn bạn đã đọc chúc bạn nhiều niềm vui.
                    </p>
                    
                    <div class="next__pre">
                        <a href="/bo-cuc-website-nhu-the-nao" class= "pre"title="bố cục">
                            Bố cục trang web
                         </a>
                        <!-- <a href="/cach-su-dung-cac-the-html-co-ban" class= "next"title="cách sử dụng các thẻ html cơ bản"> Cách sử dụng các thẻ HTMl cơ bản</a> -->
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/html" title="bên lề viết mã"> HTML</a>
                    </div>
                    <div class="fb-comments"
                        data-href="https://xyzabc.xyz/cach-su-dung-cac-the-html-co-ban" 
                        data-width="" data-numposts="5">
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