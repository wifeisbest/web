@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Thuộc tính của thẻ html</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Có 1 điều mà chúng ta cần lưu ý trong bài này đó là các thẻ trong tài liệu HTMl thì được sinh ra và định nghĩa 
                        với một mục đính nhất định, ví dụ như thẻ <span class="code"> &lt;h1 &gt;.. &lt;/h1 &gt; </span> mục đính để xác đinh tiêu 
                        đề của 1 văn bản và nhiều thẻ khác nữa, mỗi thẻ đều có ý nghĩa riêng.
                    </p>
                    <h2 class="section__h2"> Thuộc Tính </h2>
                    
                    <p>
                        Thuộc tính sinh ra là để cung cấp thông tin bổ sung cho thẻ HTMl, với nhiệm vụ là bổ sung cho thẻ HTMl , chúng ta thường 
                        hay xem nhẹ vai trò của thuộc tính , nhưng trong thực tế nó lại là thành phần rất quan trọng của mỗi thẻ, có những thẻ mà bắt buộc phải  
                        có những thuộc tính đi cùng, không có thuộc tính đi cùng thì thẻ đó không thể nào hoạt động đúng được. Vậy thuộc tính là rất 
                        quan trọng nhé các bạn.


                    </p>
                    <p>
                        Sau đây chúng ta sẽ tìm hiểu những khái niệm quan trọng nhất thuộc về thuộc tính sau đó chúng ta hãy cùng nhìn qua 1 vài ví 
                        dụ để hiểu về cách thuộc tính hoạt động.
                    </p>
                    <p>
                        <strong>Tất cả các thẻ HTML đều có thể có thuộc tính</strong> điều này có ý nghĩa là thẻ nào chúng ta cũng có thể đặt được thuộc tính 
                        vào , tùy theo mục đính và ý nghĩa của thuộc tính đó. Và có những thẻ thì không cần thuộc tính miêu tả thêm.
                    </p>
                    <p>
                        <strong>Các thuộc tính thì luôn nằm trong thẻ mở</strong> Không ai để thuộc tính trong thẻ đóng cả nó ko có ý nghĩa ví dụ :
                        ta có thẻ h1  
                        <span class="code"> &lt;h1 &gt;... &lt;/h1 &gt; </span> thì 
                        <span class="code"> &lt;h1 &gt;</span> đây là thẻ mở ,và đây là thẻ đóng
                        <span class="code"> &lt;/h1 &gt;</span> nội dung của thẻ h1 này là dấu <b>"..."</b> .
                    </p>
                    <p>
                        <strong>Thuộc tính thì luôn đi theo cặp name="value"</strong> trong đó <b>name</b> là tên của thuộc tính và <b>value</b> là giá trị 
                        của thuộc tính. Ví dụ <b>title = "Đây là thuộc tính title"</b>. Tên thuộc tính là <i>title</i> và nội dung của thuộc tính là 
                        <i>Đây là thuộc tính title</i>. Rất đơn giản phải không các bạn.
                    </p>
                    <h2 class="section__h2"> Ví dụ </h2>
                    <p>
                        <img src="/img/thuoctinh.png" alt="thẻ html  " > 
                    </p>
                    <p>
                        Trong ví trên phần code chúng ta viết thì thẻ <b>a</b> là thẻ liên kết thẻ này dẫn chúng ta đến 1 nơi khác,  có 2 thuộc tính là <b>href</b> và <b>title</b> 
                        nội dung của thẻ <b>a</b> là "Click here"  còn nội dung của <span class="hightline">thuộc tính  </span> <b>href</b> là "https://xyzabc.xyz" 
                        nội dung của <span class="hightline"> thuộc tính </span> <b>title</b> là "Trang chủ" . Khi chạy trên trình duyệt khi di chuột 
                        vào nội dung của thẻ <b>a</b> lúc này thuộc tính <b>title</b> hoạt động hiện thị lên cho chúng ta thấy nội dung của nó. Trong ví dụ này chúng ta 
                        kết luận được như sau : Đối với thẻ <b>a</b> thì <span class="hightline">thuộc tính</span>  <b>href</b> bắt buộc phải có 
                        thuộc tính <b>title</b> có cũng được không có cũng không sao, có thì nó miêu tả thêm cho thẻ <b>a</b> còn không có thì cũng không sao cả.
                        Thuộc tính thì luôn nằm trong thẻ mở.


                    </p>
                    <h2 class="section__h2"> Lưu ý </h2>
                    <p>
                        Trong thực tế khi thực hành viết code chúng ta thường hay bỏ qua những thuộc tính không mấy quan trọng mà chỉ tập trung 
                        vào những thuộc tính bắt buộc phải có để cho thẻ đó hoạt động đúng, điều này cũng dễ hiểu. Nhưng khi đã làm thành 1 sản phẩm hoàn chỉnh rồi thì ý nghĩa và 
                        vai trò của các thuộc tính này lại rất quan trọng trong việc đưa bài viết hay nội dung của bạn lên top tìm kiếm của các công cụ 
                        tìm kiếm. Hay dùng từ chuyên ngành là chuẩn SEO. Vì thế hãy nắm chắc các khái niệm vai trò và ý nghĩa của các thuộc tính trong 
                        mỗi thẻ HTML nhé. Chúc các bạn thành công.
                    </p>
                    <div class="next__pre">
                        <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html" class= "pre"title="html là gì">
                            Hoạt động của thẻ HTML
                         </a>
                        <a href="/bo-cuc-website-nhu-the-nao" class= "next"title="bố cục website"> Bố cục website như thế nào ?</a>
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