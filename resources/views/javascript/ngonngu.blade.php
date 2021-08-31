@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Ngôn ngữ lập trình</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Chúng ta học viết mã và đều hiểu rằng máy tính của chúng ta không thể hiểu được những gì mà chúng ta viết,
                        máy tính chỉ hiểu và đọc được 2 số 0 và 1 thôi đó là ngôn ngữ máy. Khi chúng ta <i> chạy chương trình </i> các 
                        dòng mã của chúng ta sẽ được dịch từ trên xuống dưới, từ trái sang phải thành các câu lệnh mà máy tính hiểu được. Quá 
                        trình này gọi là thông dịch mã.

                    </p>
                    <p>
                        Đối với 1 số ngôn ngữ lập trình mã code được dịch xong xuôi hết rồi sau đó mới  <i>chạy chương trình</i> quá trình này gọi 
                        là biên dịch mã. Để hiểu rõ hơn minh sẽ lấy 1 ví dụ nhỏ sau,  bạn có 10 dòng mã sau khi bạn viết xong bạn nhấn <i>Enter</i> để chạy chương trình  
                        mình hãy cùng tưởng tượng là sau khi bạn nhấn phím <i> Enter</i> sẽ có 1 người trung gian ở giữa dịch xong 10 dòng mã của bạn ra thành 
                        số 0 và 1 rồi đưa cho máy tính thực hiện. Quá trình này là biên dịch mã. <br>

                        Đối với Javascript khi mã của bạn viết xong và <i>chạy chương trình</i> thì quá trình dịch mã và chạy hay thực thi 
                        được thực hiện luôn. Người trung gian dịch được câu nào thì đưa cho máy tính chạy luôn theo thời gian thực. Chính vì thế mà Javascript có 
                        tốc độ thực thi rất là nhanh.
                    </p>
                    <p>
                        <img src="/img/ngonngu.png" alt="ngon ngu" > 
                    </p>
                    <h2 class="section__h2"> Khái niệm cơ bản</h2>
                    
                    <p>
                        Khi tiếp xúc hay học ngôn ngữ lập trình chúng ta đều bắt gặp các khái niệm <strong> Biến , Điều kiện, Vòng lặp 
                            Hàm
                        </strong> và chúng ta phải tuân theo các quy tắc của thể hiện các khái niệm đó hay chính xác hơn là cú pháp.
                        Vậy bạn đã bao giờ tự hỏi tại sao lại có các khái niệm đó không ? Chúng sinh ra để làm gì ? Tại sao trong ngôn ngữ nào 
                        cũng đều có ?
                    </p>
                    <p>
                        <strong>Biến : </strong>  Biến được sinh ra dùng để lưu trữ dữ liệu và theo dõi sự thay đổi các giá trị mà biến lưu trữ 
                        trong quá trình chương trình được thực thi.
                    </p>
                    <p>
                        <strong>Điều kiện : </strong> sinh ra với mục đính là ra quyết định thực thi ứng với mỗi điều kiện đúng sai.
                    </p>
                    <p>
                        <strong>Vòng lặp :</strong> Có những công việc tác vụ lặp đi lặp lại khi đó chúng ta cần đến vòng lặp, vòng lặp không thể 
                        là lặp vô hạn mà sẽ có điểm dừng khi điều kiện lặp không thõa mãn.
                    </p>
                    <p>
                        <strong>Hàm : </strong> là những đoạn mã được tổ chức thành những thành phần logic và tái sử dụng được.
                    </p>
                    
                    <h2 class="section__h2"> Kết thúc </h2>
                    <p>
                       Khi bắt đầu học 1 ngôn ngữ mình gặp khá nhiều khó khăn trong việc làm quen với cú pháp của các ngôn ngữ, mình nhận thấy 
                       chúng đều có những điểm chung, và mình tìm hiểu chia sẻ cùng các bạn trong bài viết này, nếu bạn thấy chưa chính xác hoặc 
                       cần bổ sung hay liên hệ mình để mình hoàn thiện thêm. Cảm ơn các bạn đã đọc.
                    </p>
                    <div class="next__pre">
                        <!-- <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html" class= "pre"title="html là gì">
                            Hoạt động của thẻ HTML
                         </a> -->
                        <a href="/bien-va-bieu-thuc-toan-hoc-trong-javascript" class= "next"title="biến trong js">
                         Biến và biểu thức toán học
                         </a>
                    </div> -->
                    <!-- <span class="hightline">require, import, exports</span> 
                    <div class="tag">
                        Tag: <a href="/javascript" title="javascript"> Javascript</a>
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