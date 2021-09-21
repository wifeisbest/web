@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Hướng dẫn sử dụng dev tools cơ bản</h1>
                <div class="pots__body" itemprop="articleBody">
                    
                    <p>
                       Trong khuôn khổ bài viết này chúng ta cùng nhau đi tìm hiểu những cách dùng cơ bản nhất, và làm quen với Chrome DevTools nhé. Bắt đầu thôi nào
                    </p>
                    <h2 class="section__h2">Cách mở Developer Tools trên Chrome</h2>
                    <p>
                        Với hệ điều hành Windows , bạn mở website bạn đang làm bằng Chrome và <b>click chuột phải </b> vào bất kỳ đâu trên trang và chọn vào dòng <b>Kiểm tra</b> 
                        lập tức Chrome DevTools sẽ hiện ra.
                        
                    </p>
                    <p>
                       <img src="/img/devtool.png" alt=" devtool">

                    </p>
                    
                    <p>
                        Trong hình mình có khoanh vùng và đánh số thành 3 vùng chính mà chúng ta hay dùng nhất, <b> khu vực màu đỏ </b> là nơi sẽ hiện thị tất cả các thẻ HTML, 
                        ở trên trình soạn thảo mã chúng ta viết như thế nào thì ở đây sẽ hiện thị như thế. Khi <b> hơ chuột </b> vào thẻ nào ở trong vùng này  Dev Tools sẽ 
                        hightline phần tử đó lên trên trang cho chúng ta thấy. Khi <b>click</b> vào thẻ chúng ta sẽ chuyển qua khoanh vùng màu xanh.
                    </p>
                    <p>
                        Ở <b>khung xanh </b> sẽ là nơi hiện thị các thuộc tính css mà thẻ đó đang được áp dụng, chúng ta có thể click vào các dòng css này và chỉnh
                         sửa 1 cách trực tiếp luôn, rất tiện nhé và chúng ta cũng rất hay làm cách này. Lưu ý là khi chúng ta chỉnh sửa xong mà reload lại trang thì những gì 
                         chúng ta vừa chỉnh sửa sẽ bị mất đi, khi chỉnh sửa đã xong rồi chúng ta nên coppy lại và viết vào file css nhé. 
                        Phía trên cùng khung xanh là các tab chuyển đổi cho chúng ta nhìn 
                        trực quan hơn , chúng ta thử chuyển qua tab computer xem như nào .
                        
                    </p>
                    
                    <p>
                       <img src="/img/devtool2.png" alt=" devtools">
                    </p>
                    
                    <p>           
                       Nhìn rất trực quan và chúng ta có thể click vào các con số để chỉnh sửa luôn các màu sắc được dev tools thể hiện cho mỗi thuộc tính css mà thẻ đó đang áp dụng. Sau này khi 
                       đã thành thạo hơn chúng ta cũng ít hay dùng tab này vì khi đã quen chúng ta sẽ mường tượng ra được trong đầu vị trí và các thuộc tính css của thẻ đó. Các tab còn 
                       lại trong <b>vùng xanh </b> mình hầu như rất ít dùng đến. Khi dùng css chúng ta rất hay sử dụng thuộc tính <b>hover</b> cho 1 phần tử nào đó và số <b>4 </b>
                       mình đánh dấu là nơi khi mình click vào đó thì các đoạn mã css khi hover vào phần tử đó mới hiện ra để chúng ta thấy và chỉnh sửa. Và phần số <b>5</b> là phần khá  
                       quan trọng là nơi mình biết được thẻ đó đang được thừa hưởng những thuộc tính css nào từ thẻ cha. 
                    </p>
                    
                    <p>
                        <b>Vùng vàng </b> là nơi chúng ta chuyển qua chuyển lại giữa các tab của dev tools tab <b>console</b> là nơi hiện thị những thông báo của chúng ta hoặc của trình duyệt khi thực 
                        thi file javascript . Nếu bạn học javascript thì chắn chắn bạn sẽ dùng tab này rất thường xuyên. <b>Sources</b> đúng như tên của nó tab này là nơi hiện thị 
                        những tài nguyên của trang, hay các tài nguyên mà trang đang dùng, khi link 1 file css file js chúng ta hãy vào tab này để kiểm tra xem chúng ta đã nhúng được file 
                        đó vào trang chưa nhé . Các tab còn lại như <b>Network  application</b> được dùng rất nhiều trong lập trình phía Backend chúng ta sẽ trở lại các tab này trong phần 
                        backend nhé.

                    </p>
                    <p>
                       Mặc định dev tools khi được mở sẽ nằm ngang như ảnh phía trên, để thuận tiện và có nhiều không gian làm việc hơn, dễ quan sát và điều chỉnh hơn thì khi click 
                       vào số <b>3</b> trên ảnh chúng ta sẽ có thể chọn lựa cho mình cách nhìn vị trí các khung màu sao thuận tiện nhất. Số <b>1</b> đây là nơi giúp chúng chọn nhanh phần 
                       tử mà chúng ta muốn, như trong ảnh mình click vào và chọn phần tử <i>Là nơi tôi chia sẻ mọi thứ tôi biết để làm nên blog này</i> thì phần tử này sẽ hightline lên cho chúng ta cái nhìn 
                       trực quan hơn, khi muốn tắt chức năng này chúng ta chỉ việc click vào nó 1 lần nữa. Số <b>2</b> là nơi chúng ta chuyển qua xem trang của chúng ta trên các thiết bị khác 
                       như mobile, tablet, ... chúng ta sẽ dùng nhiều phần này ở lúc thiết kế responsive.
                    </p>
                    <h2 class="section__h2">Kết lại </h2>
                    <p>
                        Trên đây là những gì khái quát nhất về cách sử dụng Chrome DevTools hi vọng bạn thích và có được chút gì đó về Chrome Devtools. Trong Chrome DevTools còn 
                        khá là nhiều chức năng nữa khi nào có bài viết liên quan mình sẽ chia sẻ cùng các bạn, bạn có ý kiến gì về bài viết này hãy để lại comment bên dưới cho mình nhé. 
                        Cảm ơn bạn đã đọc, chúc bạn thành công.
                    </p>
                    <div class="next__pre">
                        <a href="/css-co-ban-cho-nguoi-moi-bat-dau" class= "pre"title="Css cơ bản cho người mới bắt đầu">
                            Css cơ bản cho người mới bắt đầu
                         </a>
                        <!-- <a href="/html-la-gi" class= "next"title="bên lề viết mã"> HTMl là gì ?</a> -->
                    </div>
                    
                    <div class="tag">
                        Tag: <a href="/css3" title="CSS"> CSS</a>
                    </div>
                    <div class="fb-comments"
                        data-href="https://xyzabc.xyz/huong-dan-su-dung-dev-tools-co-ban" 
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