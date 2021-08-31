@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Biến và biểu thức toán học</h1>
                <div class="pots__body" itemprop="articleBody">

                <h2 class="section__h2"> Biến</h2>
                    <p>
                        Khi mới bắt đầu làm quen với javascript cũng như các ngôn ngữ lập trình chúng ta sẽ đều được học về biến, 
                        với mỗi một ngữ lập trình thì đều có những quy tắc khác nhau trong việc sử dụng, khái báo, và lưu trữ giá trị của biến.
                        Như vậy <b>Biến</b> được dùng để lưu trữ giá trị. Giá trị là gì ? có những loại nào ? biến trong javascript thuộc loại 
                        <i>dynamic typing </i> nghĩa  là sao ?
                    </p>
                    <p>
                        Giá trị mà biến được sử dụng để lưu trữ đó là số, là chuỗi ký tự văn bản, là mảng, là giá trị logic đúng và sai, là đối tượng... ,
                        Trong javascript để miêu tả tính linh động của biến chúng ta thường hay sử dụng ví dụ sau <span class="code">var a = 2</span>
                         rồi ở đâu đó chúng ta lại viết <span class="code">var a = "abcxyz"</span> . Đây là câu lệnh khai báo biến cơ bản 
                         trong javascript <span class="code">var</span> là từ khóa đây là cú pháp khai báo biến trong javascript , còn cú pháp là gì thì đó 
                         là những yêu cầu bắt buộc người viết mã phải tuân theo để khi chương trình được biên dịch và máy tính chạy không bị lỗi, đúng theo ý định 
                         của người viết mã.

                    </p>
                    <p>
                        Trở lại với ví dụ trên việc biến <b>a</b> lúc thì giữ giá trị số, lúc thì giữ giá trị là chuỗi là điều cho phép và được chấp nhận 
                        trong javascript , nhưng với 1 số ngôn ngữ khác thì điều này không thể. Vậy bản chất mà chúng ta cần quan tâm ở đây là gì ?. Đó là 
                        javascript chỉ quan tâm đến giá trị mà biến đó lưu trữ , chứ không quan tâm đến biến đó thuộc kiểu nào. Khác hẳn với 1 số ngôn ngữ 
                        khác khi khai báo có kiểu là số, hoặc chuỗi thì phải viết rõ ra như <span class="code">int , string ,float ...</span> Các ngôn ngữ này lại đặt trọng 
                        tâm vào kiểu của biến. Chính điều này tạo ra sự linh hoạt của javascript.
                    </p>
                    <p>
                        <img src="/img/bien.png" alt="biến trong js" > 
                    </p>
                    <h2 class="section__h2"> Biểu thức toán học</h2>
                    
                    <p>
                       Khi đã có biến để lưu trữ giá trị để thực hiện hành động trên các giá trị này chúng ta cần đến các phép toán sau đây chúng ta sẽ có 
                       1 số biểu thức trong javascript.
                    </p>
                    <p>
                        <ul class="ul">
                            <li> <b>Gán = :</b> var a = 2 Giá trị 2 được gán cho biến a</li>
                            <li> <b>Toán :</b> + (cộng), -(trừ), *(nhân), /(chia)</li>
                            <li> <b>Tổ hợp :</b> Là sự kết hợp giữa gán và toán +=, -=, *=, (a+=3 tương đương a = a +3)</li>
                            <li> <b>Tăng/Giảm</b> ++, --, (a++ tương đương a = a + 1 ) </li>
                            <li> <b>Truy cập "."</b>Chúng ta sẽ tìm hiểu khi nghiên cứu về đối tượng trong Js.</li>
                            <li> <b>Tương Đương :</b> ==(bằng tương đối) === (bằng tuyệt đối) != (khác tương đối) !== (khác tuyệt đối) </li>
                            <li> <b> So Sánh:</b> < , >, <= ,=> </li>
                            <li> <b>Logic:</b> && (và) || (hoặc)</li>
                        </ul>
                    </p>
                    <p>
                        Trên đây là các biểu thức được sử dụng trong javascript mỗi một biểu thức sẽ cho chúng ta các kết quả khác nhau ,
                        từ các kết quả này chúng ta sẽ điều khiển để cho máy tính cần biết việc gì cần làm tiếp theo. Chúng ta sẽ sẽ dụng và hiểu các 
                        biểu thức này trong các bài viết tiếp theo nhé. Trong bài viết này là chia sẻ đặc thù của biến trong javascript, trong quá trình 
                        mình học và sửa lỗi và tìm lỗi thì mình luôn đặt câu hỏi trong đầu là giá trị của biến ở đây là thế này , sau khi chạy đến đây giá 
                        trị của nó là bao nhiêu ? Mình quan tâm đến giá trị của biến thì việc theo dấu và sửa lỗi cũng nhanh hơn. Cảm ơn các bạn đã đọc.
                    </p>
                    
                    <div class="next__pre">
                        <a href="/ngon-ngu-lap-trinh-javascript" class= "pre"title="Ngôn ngữ lập trình">
                            Ngôn ngữ lập trình
                         </a>
                         
                    </div> 
                    
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
                 <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc">
                        <img src="/img/internet.png" alt="internet">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" internet" class="relative__description">
                        Cách thức internet hoạt động</a>
                    </h3>
                </li> 
                <li class="relative__post-item">
                    <a href="/contact" title="giao thức mạng">
                        <img src="/img/html1.png" alt="http">
                    </a>
                    <h3>
                        <a href="/contact" title=" html" class="relative__description">
                        Giao thức TCP/IP http https</a>
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