@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Đăng ký đăng nhập sử dụng nodejs</h1>
                <div class="pots__body" itemprop="articleBody">
                    <h2 class="section__h2">Mục tiêu bài viết</h2>
                    <p>
                        Chức năng đăng ký và đăng nhập thật sự rất là khó nó liên quan nhiều đến bảo mật và thông tin người dùng, nên trong bài viết này mình 
                        sẽ chia sẻ những thứ cơ bản và chi tiết nhất mình hiểu về 2 chức năng này. Mình sẽ hoàn toàn sử dụng các framework vì việc <b>code chay</b> 
                        là cách mà chúng ta hiểu về cách hoạt động của ngôn ngữ chúng ta học , dùng <b>framework </b> là cách chúng ta tránh đi tạo lại " bánh xe ".
                        Framework là các dòng code đã được người khác viết và đã được kiểm nghiệm chúng ta sẽ học cách sử dụng nó trên nền kiến thức cơ bản mà chúng ta có. 
                        "Bánh xe" là 1 ví dụ kinh điển, khi chúng ta muốn tạo ra 1 chiếc ô tô  chúng ta chỉ việc mua bánh xe và lắp ghép cùng các bộ phận khác thành 1 chiếc ô tô chứ chúng ta không quan tâm 
                        nhiều đến cách làm ra "bánh xe." Chúng ta biết cách làm ra "bánh xe" nhưng chúng ta không trực tiếp  làm ra nó mà mua nó về sử dụng. Để hiểu được 
                        và dùng các <b>framework </b> chính xác nhất thì  hiểu sâu sắc <strong>kiến thức cơ bản</strong> là cực kỳ quan trọng.
                    </p>
                    <h2 class="section__h2">Các framework cần dùng</h2>
                    <p>
                        <ul class="ul">
                            <li><b>Express</b> : </li>
                        </ul>
                    </p>
                    <p>
                        
                    </p>
                    
                    <h2 class="section__h2">Nodejs được dùng ở đâu</h2>
                    <p>
                       
                        
                    </p>
                    <p>
                        <img src="/img/node-detail2.png" alt="nodejs " >
                    </p>
                    <p>
                        
                    </p>
                    
                    <h2 class="section__h2"> Cảm nhận cá nhân</h2>
                    <p>
                        

                    </p>
                
                    <div class="next__pre">
                        <a href="/nodejs-la-gi" class= "pre"title="Nodejs là gì ?">
                            Nodejs là gì ?
                         </a>
                        <!-- <a href="/dang-ky-dang-nhap-su-dung-nodejs" class= "next"title="Đăng ký đăng nhập sử dụng nodejs"> 
                            Đăng ký đăng nhập sử dụng nodejs
                        </a> -->
                    </div>
                    
                    <div class="tag">
                        Tag: <a href="/nodejs" title="nodejs"> Nodejs</a>
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
                <!-- <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh">
                        <img src="/img/benle2.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li> -->
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc">
                        <img src="/img/internet.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" nodejs" class="relative__description">
                        Cách thức internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/css-co-ban-cho-nguoi-moi-bat-dau" title="css cơ bản">
                        <img src="/img/css1.png" alt="http">
                    </a>
                    <h3>
                        <a href="/css-co-ban-cho-nguoi-moi-bat-dau" title=" css cơ bản" class="relative__description">
                        CSS cơ bản cho người mới bắt đầu</a>
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