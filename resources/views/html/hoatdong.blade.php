@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Hoạt động của các thẻ trong tài liệu HTML</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Thật sự thì văn bản HTMl ( sau đây mình sẽ gọi tắt là văn bản nhé ) cũng dễ thôi các bạn ạ, các bạn mới thường chưa hiểu kỹ nên đôi khi khá lúng túng 
                        nhiều khi không hiểu tại sao thẻ này lại hiện thị như này, mình lúc đầu mới tìm hiểu cũng khá là khó khăn 
                        và lúng túng như các bạn.
                    </p>
                    <p>
                        Cùng ôn lại bài trước 1 chút thì trong văn bản chúng ta có 2 phần quan trọng nhất đó là tất cả các thẻ con nắm 
                        trong thẻ cha <span class="code"> &lt;head &gt;.. &lt;/head &gt;</span> ( các thẻ con trong này rất hay các bạn ạ , mình sẽ 
                        chia sẻ khi chúng ta đến phần deploy và tối ưu công cụ tìm kiếm nhé !). Và tất cả các thẻ con nằm trong thẻ <span class="code"> &lt;body &gt;..... &lt;/body &gt; </span>
                        các thẻ con này sẽ hiện thị lên trình duyệt của chúng ta.


                    </p>
                    <h2 class="section__h2">Cách thức hiển thị</h2>
                    <p>
                        Trong phần thẻ <span class="code"> &lt;body &gt;.. &lt;/body &gt; </span> sẽ chứa rất nhiều thẻ con khác và việc của chúng 
                        ta là phải phân loại chúng ra, trong bài viết chúng ta sẽ phân loại theo cách cơ bản nhất và quan trọng nhất đó là 
                        <strong> cách các thẻ được hiển thị mặc định</strong>
                        
                    </p>
                    <p>
                        Đối với 1 thẻ ở điều kiện mặc định chúng sẽ thuộc về 1 trong 2 loại hiển thị sau 1 là dạng <strong> Block</strong> 
                        2 là <strong>Inline</strong>.
                    </p>
                    
                    <h2 class="section__h2">Block</h2>
                    <p>
                        Thẻ Block ( dạng khối ) sẽ hoạt động theo cách khi nó được hiển thị trên trình duyệt nó sẽ chiếm chiều rộng theo chiều từ trái sang 
                        phải hết mức có thể, nó luôn chiếm trọn 1 dòng, và nó có khoảng cách trên dưới với các phần tử khác.
                        
                    </p>
                    <p>
                        <img src="/img/block.png" alt="block  " > 
                    </p>
                    <p>
                       Dòng mình gạch thẳng đỏ là chiều rộng mà 1 thẻ dạng khối chiếm, nó chiếm hết nhưng nội dung của nó lại chỉ ngắn có 
                       1 đoạn thế, các khu vực mình khoanh tròn đó là khoảng cách trên dưới giữa chúng, đã là thẻ ở dạng khối thì trên và dưới 
                       chúng luôn có khoảng cách, và 1 điều nữa chúng ta thấy đó là 2 thẻ dạng khối thì không nằm trên 1 dòng.
                        
                    </p>
                    <h2 class="section__h2">Inline</h2>
                    <p>
                        Thẻ dạng inline thì lại ngược lại so với thẻ dạng khối, nó giống như dạng câu chữ trong văn bản thuần túy của chúng ta vậy 
                        . Nó chỉ chiếm chiều rộng cần thiết với nội dung của nó, nó không có khoảng cách trên dưới, và nó không cần phải 
                        bắt đầu bằng 1 dòng mới.                           
                    </p>
                    <p>
                        <img src="/img/inline.png" alt="inline  " > 
                    </p>
                    
                    <p>
                        Phần mình bôi đỏ là khoảng cách mặc định thuộc về trình duyệt nhé, điều này có nghĩa là mỗi trình duyệt sẽ có
                         những quy định về khoảng cách mặc định của thẻ body , trong thực tế sau này thì chúng ta reset lại trình duyệt 
                         để văn bản của chúng ta hiển thị như nhau trên mọi trình duyệt nhé ( vấn đề này cũng đơn giản thôi , bạn không cần 
                         phải lo lắng về nó đâu ). Phần mình bôi xanh là điểm kết thúc của câu 1 và bắt đầu câu 2, nếu là dạng block thì câu 2 sẽ 
                         nhảy xuống dưới và chiếm trọn 1 dòng mới. Vì là dạng inline nên chúng nằm cùng với nhau trên cùng 1 hàng.

                    </p>
                    <h2 class="section__h2"> Tổng kết</h2>
                    <p>
                        Các thẻ trong tài liệu HTMl thì đều thuộc về 1 trong 2 cách hiển thị <strong>Block hoặc Inline</strong> việc nắm rõ 
                        cách hoạt động hiển thị của mỗi thẻ là rất quan trọng nó sẽ giúp chúng ta sau này dễ dàng điều chỉnh vị trí cũng như 
                        kích thước của mỗi thẻ.
                    </p>
                    <div class="next__pre">
                        <a href="/html-la-gi" class= "pre"title="html là gì">
                            HTMl là gì ? 
                         </a>
                        <a href="/the-html-co-ban-nhat" class= "next"title="Thẻ HTML cơ bản nhất"> Thẻ html cơ bản</a>
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