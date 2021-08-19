@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Clients và Sever </h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Khi máy tính , điện thoại của bạn kết nối internet và bạn vào trình duyệt gõ vào thanh url 1 địa chỉ, hay bất kỳ ký tự văn bản nào vào đó
                        và gõ phím enter thì bạn đã gửi 1 yêu cầu của bạn đến 1 máy chủ nào đó. Khi đó bạn là <strong>client</strong>  (là máy khách) , còn chiếc máy tính nằm ở đâu đó trên
                        thế giới trả về cho bạn những thông tin bạn nhận được được gọi là máy chủ ( <strong>sever</strong> ).
                    
                    </p>
                    <p>
                        <img src="/img/sever.png" alt="mô hình client sever" >
                    </p>
                    <h2 class="section__h2">Chi Tiết Hơn</h2>
                    <p>
                        Như vậy clients là máy đưa ra yêu cầu và máy chủ là máy trả lời cho những yêu cầu cầu đó, client không mất gì cả không phải trả phí gì 
                        để được máy chủ yêu cầu, clients chỉ nhận và sử dụng những gì được máy chủ cung cấp.
                        
                    </p>
                    <p>
                        Sever sinh ra là để đáp ứng các yêu cầu của phía clients mỗi khi nhận được yêu cầu của clients thì sever sẽ tìm kiếm và trả về đúng yêu cầu
                        mà clients muốn nhận. Trong nhiều trường hợp
                        khi có yêu cầu từ clients để xử lý yêu cầu này Sever A cần 1 yêu cầu từ Sever B để có thể trả về kết quả cho clients. Khi này Sever A lại thành 
                        client và máy chủ lại là Sever B.
                        
                    </p>
                    
                    <h2 class="section__h2">Tổng kết lại</h2>
                    <p>
                        Như vậy trong một mạng máy tính rất nhiều các thiết bị kết nối với nhau bất cứ khi nào 1 thiết bị gửi yêu cầu đến 1 thiết bị khác thì thiết bị đó 
                        đóng vai trò là máy khách (client) thiết bị chịu trách nhiệm phản hồi lại yêu cầu từ máy khách thì thiết bị đó đóng vai trò là sever.
                        1 điểm lưu ý quan trọng trong mô hình client - sever sử dụng giao 
                        thức http là : với mỗi bất kì yêu cầu nào từ máy khách thì máy chủ luôn  phải có phản hồi về cho máy khách kết quả mà sever xử lý với yêu cầu 
                        mà máy khách đó gửi lên.
                        
    
                       
                    </p>
                    
                    <p>
                      Cơ bản nhất về mô hình và cách thức hoạt động của client và sever chỉ có bấy nhiêu đó mình hi vọng bạn đã biết thêm được 
                      chút thông tin hữu ích khi đọc xong bài này. Cảm ơn bạn.

                    </p>
                    <div class="next__pre">
                        <a href="/giao-thuc-tcp-ip-http-va-https" class= "pre"title="cách thức" target="_blank">
                            Giao thức TCP/IP http https
                         </a>
                        <a href="/benle" class= "next"title="bên lề viết mã" target="_blank"> bài tiếp theo</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/benle" title="bên lề viết mã" target="_blank"> Bên lề</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title="lộ trình" target="_blank">
                        <img src="/img/roadmap.png" alt="benle">
                    </a>
                    <h3>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title=" lộ trình"target="_blank" class="relative__description">
                        Lộ trình cơ bản nhất</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh" target="_blank">
                        <img src="/img/benle2.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính"target="_blank" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc" target="_blank">
                        <img src="/img/internet.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" nodejs"target="_blank" class="relative__description">
                        Cách thức internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/giao-thuc-tcp-ip-http-va-https" title="giao thức mạng" target="_blank">
                        <img src="/img/http.png" alt="http">
                    </a>
                    <h3>
                        <a href="/giao-thuc-tcp-ip-http-va-https" title=" giao thức http"target="_blank" class="relative__description">
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