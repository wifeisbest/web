@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Vai trò , cú pháp, vị trí </h1>
                <div class="pots__body" itemprop="articleBody">
                    <h2 class="section__h2">Vai trò</h2>
                    <p>
                       CSS giúp chúng ta làm đẹp và bố cục website, CSS sẽ tác động vào thẻ HTMl mà chúng ta chọn, chính vì thế mà chúng ta 
                       có 1 quan tâm nhỏ ở đây đó là, thẻ HTMl có cấu trúc phân tầng, hay có mối quan hệ cha con, cho nên khi chúng ta  áp dụng 
                       CSS vào đối tượng cha , thì đối tượng con cũng được thừa hưởng theo. Khi áp dụng CSS vào phần tử nào đó thì chúng ta cần xem 
                       xét mối tương quan của thẻ đó với các phần tử xung quanh, để xem nó đang được thừa hưởng những yếu tố nào, nó đang bị chi phối 
                       bởi những thành phần nào, từ đó chúng ta sẽ biết được và điều chỉnh 1 cách chính xác nhất những gì chúng ta muốn.
                    </p>
                    <h2 class="section__h2">Cú pháp</h2>
                    <p>
                        <img src="/img/csscoban.png" alt=" css cơ bản">
                    </p>
                    <p>
                        Trong ví dụ trên <b>Thẻ được chọn</b> là phần tử mà chúng ta muốn định kiểu, các giá trị được bao quanh bởi cặp dấu <b>{ }</b>
                         <b>Thuộc tính</b> và <b>giá trị </b> được phân tách bởi dấu 2 chấm <b> : </b> . Kết thúc mỗi dòng giá trị thì được kết thúc bằng dấu chấm 
                         phẩy <b> ; </b> .
                         Ta thấy trong tài liệu HTML các thẻ được sắp xếp lồng vào nhau theo dạng hình cây, thẻ này lồng trong thẻ kia , thẻ này là con, là cháu chắt, của 
                         thẻ kia .... chính vì thế để chọn được đúng thẻ html khi chúng ta mới học CSS thường hay gặp khó khăn. Bản thân ngôn ngữ CSS cũng cung 
                         cấp cho chúng ta nhiều cách để chọn chính xác nhất phần tử mà chúng ta muốn. Chúng ta sẽ cùng tìm hiểu trong các bài tiếp theo nhé. 
                         Theo kinh nghiệm lúc đầu khi mình mới học css thì việc khó khăn và làm mình lúng túng nhất đó là làm sao chọn được đúng thẻ mình cần css, 
                         rồi khi chọn được rồi áp dụng các thuộc tính css vào thẻ đó thì các chỗ khác lại nhảy tùm lum lên và mình không hiểu vì sao nó lại như thế ,
                         và rồi mình đã hiểu ra được là các thẻ html liên quan với nhau trong các mối quan hệ cha con .... chính vì thế khi áp dụng các thuộc tính css 
                         vào mỗi thẻ chúng ta cũng nên quan tâm việc áp dụng các thuộc tính vào thẻ đó sẽ làm thay đổi các thẻ xung quanh như nào, thuộc tính nào của các 
                         thẻ xung quanh đã bị thay đổi , từ đó chúng ta sẽ hiểu rõ hơn và kiểm soát được mọi thứ.

                    </p>
                    <h2 class="section__h2">Vị trí</h2>
                    <h3> Inline CSS : đặt thuộc tính và giá trị trực tiếp trong thẻ HTML</h3>
                    <p>
                        &lt;h1 <b> style="color:blue;font-size: 18px;" </b>>Đây là thẻ tiêu đề H1 &lt;/h1&gt; <br>
                        Nếu website của chúng ta có 100 trang và mỗi trang của chúng ta có 3 thẻ H1 thì không lẽ chỗ nào đặt thẻ H1 chúng ta cũng lại 
                        phải đặt css như này, rồi chỗ này H1 màu như này chỗ kia màu khác thì làm sao ... từ đó có rất nhiều vẫn đề nảy sinh 
                        dẫn đến mã code của chúng ta thật thảm họa. Chính vì thế cách này rất ít được dùng trong thực tiễn, nhưng trong 1 vài trường 
                        hợp nó lại rất hữu dụng nên cách này vẫn dược dùng nhé các bạn.
                        
                    </p>
                    <h3> Internal CSS : CSS cục bộ cho 1 trang</h3>
                    <p>
                       <img src="/img/csscoban1.png" alt=" Css cơ bản">
                    </p>
                    
                    <p>
                        Với cách css này chúng ta nhóm lại và để vào thẻ &lt;head&gt; mục đính là để khắc phục những nhược điểm của Inline CSS,
                        ví dụ như trên thì toàn bộ mọi thẻ H1 trong trang sẽ có màu xanh và cỡ chữ là 16px. Cách này được sử trong 1 trang tài liệu 
                        HTMl duy nhất, và nó vẫn chưa được tối ưu nhất vì website của chúng ta rất ít khi chỉ có 1 trang và mỗi trang đều dùng cách này 
                        thì code sẽ lặp đi lặp lại, việc sửa chữa thay thế gặp khó khăn ... Chính vì vậy mà chúng ta có cách 3 và là cách được sử dụng phổ biến nhất .            
                       
                    </p>
                    <h3> External CSS : Tạo 1 file riêng và nhúng vào trang website</h3>
                    <p>
                        Cách này khắc phục được những khuyết điểm của 2 cách trên và mang đến nhiều lợi ích to lớn như : chúng ta viết code chỉ ở 1 nơi 
                        nên việc chỉnh sửa và thay đổi dễ dàng, chúng ta chỉ phải viết 1 lần nhưng có thể áp dụng cho tất cả mọi trang, và nhiều lợi ích khác nữa 
                        . Cách làm khá đơn giản file html thì có phần mở rộng <b>.html</b>, chúng ta tạo file có phần mở rộng <b>.css</b> và dẫn nó đặt vào thẻ 
                        &lt;head&gt; trong văn bản html thông qua thẻ &lt;link&gt; <br> &lt;link rel="stylesheet" <b>href="style.css"</b>&gt; <br>
                        Lúc này việc định dạng các thẻ chúng ta nhóm vào file <b>style.css</b> thông qua thẻ <b>link</b> và thuộc tính <b>href</b> của thẻ 
                        <b>link</b> chúng ta dẫn file <b>style.css</b> và nhúng vào trang văn bản HTML. Lúc này các thẻ trong HTML chỉ có chức năng duy nhất là xây 
                        dựng nên khung website và không còn phải ôm thêm việc định dạng cho thẻ nữa.

                    </p>
                    <p>
                        Qua bài này chúng ta đã hiểu thêm được 1 chút về vai trò , cú pháp, vị trí của CSS trong việc làm đẹp website. Chân thành cảm ơn bạn 
                        đã đọc. Chúc bạn 1 ngày thành công.
                    </p>
                    <div class="next__pre">
                        <!-- <a href="/mo-hinh-client-sever" class= "pre"title="mô hình">
                            Mô hình client - sever 
                         </a> -->
                        <a href="/huong-dan-su-dung-dev-tools-co-ban" class= "next"title="Hướng dẫn sử dụng dev tools cơ bản">Hướng dẫn sử dụng dev tools cơ bản </a>
                    </div>
                    
                    <div class="tag">
                        Tag: <a href="/css3" title="CSS"> CSS</a>
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