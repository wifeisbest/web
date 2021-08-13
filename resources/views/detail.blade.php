@extends('layouts.home')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Welcome NodeJs</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Nodejs là gì ? Nó một nền tảng để javascript có thể chạy được ngoài trình duyệt, điều này có ý nghĩa như thế nào,
                        trước kia theo mình biết thì javascript ra đời và chỉ chạy trên trình duyệt hỗ trợ cho các hành động khi người dùng
                        tương tác với website, tỷ dụ như click, lăn chuột... Trước sự phát triển mạnh mẽ của javascript yêu cầu ngôn ngữ này có
                        thể chạy ngoài trình duyệt và khi nó NodeJs ra đời.
                    </p>
                    <p>
                        Thông thường khi một người mới học về javascript chuyển sang tìm hiểu về NodeJs thường hay bỡ ngỡ và lúng túng đó là
                        bạn chỉ quen với javascript trên trình duyệt nên gặp khá nhiều lúng túng với các cú pháp mới ở NodeJs , trong NodeJs các câu lệnh
                        <span class="hightline">require, import, exports</span> thường xuyên dùng đến.
                    </p>
                    <p>
                        Các câu lệnh này bạn vẫn có thể sử dụng ở các file .js khi
                        làm việc với trình duyệt nhưng không ai làm thế cả. Vậy điểm khác nhau ở đây là gì ? Nó nằm ngay ở câu đầu tiên của bài viết này,
                        đó là NodeJs giúp chúng ta thực thi các file javascript ngoài môi trường trình duyệt, ngay trên chính máy tính của chúng ta và tất nhiên rồi
                        bạn cần cài NodeJs trên máy tính của mình.
                    </p>
                    <p>
                        <img src="/img/node-detail2.png" alt="welcome nodejs" >
                    </p>
                    <h2 class="section__h2">Khái Niệm Mở Đầu</h2>
                    <p>
                        Đi cùng với NodeJs không thể thiếu được đó là npm là trình quản lý các các gói modul, các gói được xây dựng và phát triển trên một
                        cộng đồng cực kỳ rộng lớn các lập trình viên javascript , đôi khi sự rộng lón của nó cũng gây khó khăn trong việc lựa chọn các gói,
                        phù hợp.
                    </p>
                    <p>
                        Hãy tin tôi đi, các gói đi kèm với NodeJs thật sự là tuyệt vời nếu bạn dùng hết khả năng của nó, 1 chân trời mới về NodeJs đang ở ,
                        phía trước mình cùng bạn hãy cùng nhau khám phá thế giới của NodeJs thật hay và ly kỳ. 
                    </p>

                    <div class="tag">
                        Tag: <a href="/node" title="nodejs" target="_blank"> NodeJs cơ bản</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/node" title="nodejs" target="_blank">
                        <img src="/img/node-detail1.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/node" title=" nodejs"target="_blank" class="relative__description">Title của các bài viết, hay chính là slug</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/node" title="nodejs" target="_blank">
                        <img src="/img/js3.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/node" title=" nodejs"target="_blank" class="relative__description">Title của các bài viết, hay chính là slug</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/node" title="nodejs" target="_blank">
                        <img src="/img/html3.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/node" title=" nodejs"target="_blank" class="relative__description">Title của các bài viết, hay chính là slug</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/node" title="nodejs" target="_blank">
                        <img src="/img/css3.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/node" title=" nodejs"target="_blank" class="relative__description">Title của các bài viết, hay chính là slug</a>
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