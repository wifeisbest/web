@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">Các bước khi bạn đã có 1 website</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        Bạn có 1 sản phẩm và bạn đem giới thiệu nó cho tất cả bạn bè của bạn, những người mà bạn biết, nhưng bạn bè 
                        của bạn, những người bạn biết cũng chỉ có giới hạn và bạn cũng muốn rất nhiều người khác biết đến nữa. Vậy thì 
                        phải làm cách nào ?. Cách duy nhất đó là tìm đến Google và các công cụ tìm kiếm. Lúc này bạn đã thật sự bước 
                        vào sân chân của Google. Nơi có rất nhiều quy tắc và sự cạch tranh khốc liệt. Từ đây chúng ta thấy có được thuật 
                        ngữ SEO. SEO là gì ? Làm thế nào SEO tốt nhất ?. Mình sẽ viết bài về thuật ngữ này và cách làm trong các bài khác.  
                        Đơn giản SEO là tối ưu công cụ tìm kiếm, là cách để đưa website của bạn lên top tìm kiếm.
                    
                    </p>
                    
                    <h2 class="section__h2">Index Website</h2>
                    <p>
                         Việc đầu tiên bạn làm với Google đó là báo cho Google biết bạn 1 có sản phẩm và đây là cách làm chủ động. Còn không 
                         thì google rồi cũng sẽ biết đến sản phẩm của bạn thôi nhưng nó mất nhiều thời gian. Và thời gian với ai cũng đáng quý 
                         cả. Bạn hãy tưởng tượng sản phẩm của bạn , blog của bạn như là 1 quyển sách mỗi 1 bài viết trong đó như 1 là trang sách 
                         Google sẽ đánh đấu quyển sách và từng trang sách đó rồi để vào đâu đó trong 1 thư viện sách cực khổng lồ của Google. Và 
                         mỗi khi thấy có ai đó tìm kiếm liên quan đến cuốn sách, trang sách của bạn thì google sẽ hiện thị lên cho người dùng.
                         Việc này chúng ta gọi là index hay <span class="hightline">lập chỉ mục website </span> việc này rất quan trọng để sản phẩm 
                         của bạn được hiện thị lên kết quả tìm kiếm của google chứ chưa phải là được đứng ở top 1 2 trong kết quả tìm kiếm.
                        
                    </p>
                    <p>
                        Cách kiểm tra xem trang của bạn đã được google tìm thấy và lập chỉ mục hay chưa bạn gõ vào thanh công cụ tìm kiếm của google 
                        như sau <strong>site:xyzabc.xyz</strong>, nếu kết quả hiện lên bài viết và trang của bạn thì google đã lập chỉ mục cho trang 
                        của bạn nếu không thì bạn phải dùng công cụ sau của Google.
                        
                    </p>
                    <h2 class="section__h2">Các công cụ cần dùng</h2>
                    <p>
                        Google khủng như nào thì ai cũng biết và họ cũng cung cấp cho chúng ta khá nhiều công cụ để quản lý, cũng như phân tích và cung cấp 
                        các chỉ số thiết yếu và trang của chúng ta. Hiện tại trong lúc viết bài này mình cũng đang dùng 2 công cụ google và mình sẽ chia 
                        sẻ cùng các bạn đó là Google Search Console Và Google Analytics.
    
                       
                    </p>
                    <p>
                        Google Analytics công cụ này cho bạn rất nhiều chỉ số ví dụ như người dùng mới, người dùng đến từ đâu, các thiết bị được dùng là 
                        desktop hay mobile ? .... và rất nhiều chỉ số khác nữa cái này rất hay bạn cũng nên dùng sau này nhưng nó không giúp bạn lập chỉ 
                        mục với google được và Google Search Console sẽ giúp bạn làm điều này.
                    </p>
                    
                    <p>
                        Google Search Console nó là công cụ đo lường hiệu suất trang của bạn, kiểm tra các URL trong trang, lập chỉ mục cho từng trang 
                        của bạn. Việc làm thế nào để cài đặt 2 công cụ này bạn tham khảo trên google nhé, nếu khó khăn thì có thể liên hệ với mình.
                        Sau đây là màn hình trên Google Search Console khi bạn đăng nhập.
                    </p>
                    <p>
                        <img src="/img/console1.png" alt="console1 " >
                    </p>
                    <p>
                        Để được google lập chỉ mục nhanh hơn bạn chú ý vào phần tìm kiếm  "KIểm Tra Mọi URL trong xyzabc.xyz" đây là nơi bạn kiểm tra 
                        và yêu cầu google lập chỉ mục cho trang của bạn.
                    </p>
                    <p>
                        <img src="/img/console2.png" alt="console2" >
                    </p>
                    <p>
                        Như trên bạn thấy trang này của mình đã được google lập chỉ mục có dấu tích xanh là ok rồi, nếu 1 URl khác chưa được 
                        bạn nhấn chọn vào phần khoanh đỏ nhé khi đó bạn sẽ gửi yêu cầu đến google và đợi thôi. Không giống như trong quá trình 
                        viết mã và sửa lỗi kết quả bạn sẽ thấy được ngay làm với google là bạn phải đợi, bạn hãy đợi 1 vài ngày rồi quay lại bước kiểm 
                        tra ở bên trên xem trang của mình đã được hiện thị chưa nhé, mình tin là sau vài ngày bạn sẽ rất vui khi kiểm tra thấy 
                        website của bạn đã được hiện thị trên google. Câu hỏi được đặt ra đó là mỗi khi bạn có 1 url mới bạn phải làm 1 cách thủ công này sao ?
                        Thường thì google sẽ tự động kiểm tra trang của bạn thường xuyên sau 1 khoảng thời gian và nếu phát hiện ra điều gì đó mới thì 
                        google sẽ cập nhật cho bạn. Nhưng cũng kha lâu mà việc index thủ công như trên cũng không phải là cách tôi ưu lắm. Và khi đó 
                        thì sơ đồ trang web ra đời . Sơ đồ trang web cũng rất quan trọng trong việc google index trang của bạn bài này dài quá rồi mình sẽ 
                        chia sẻ thêm về công cụ Google Search Console trong các bài tiếp theo nhé. Nó rất hữa dụng và người quản lý web thì đều phải thành thạo nó. 
                        Chúc các bạn 1 ngày thành công.
                    </p>
                    <div class="next__pre">
                        <a href="/html-la-gi" class= "pre"title="html là gi" >
                            HTML là gì ?
                        </a>
                        <a href="/hoc-lap-trinh-de-lam-gi" class= "next"title="Học lập trình"> Học Lập trình để làm gì ?</a>
                    </div>
                    <!-- <span class="hightline">require, import, exports</span>  -->
                    <div class="tag">
                        Tag: <a href="/benle" title="bên lề viết mã" > Bên lề</a>
                    </div>
                </div>
            </article>
            <ul class="relative__post">
                <li class="relative__post-item">
                    <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title="lộ trình" >
                        <img src="/img/roadmap.png" alt="benle">
                    </a>
                    <h3>
                        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website" title=" lộ trình" class="relative__description">
                        Lộ trình cơ bản nhất</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title="muc dinh" >
                        <img src="/img/benle2.png" alt="núi">
                    </a>
                    <h3>
                        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi" title=" mục đính" class="relative__description">
                        Mục đính mình tạo ra blog</a>
                    </h3>
                </li>
                <!-- <li class="relative__post-item">
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cách thức" >
                        <img src="/img/internet.png" alt="interter">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" cách thức" class="relative__description">
                        Cách thức mạng lưới internet hoạt động</a>
                    </h3>
                </li>
                <li class="relative__post-item">
                    <a href="/giao-thuc-tcp-ip-http-va-https" title="giao thức tcp/ip và http https" >
                        <img src="/img/http.png" alt="nodejs">
                    </a>
                    <h3>
                        <a href="/giao-thuc-tcp-ip-http-va-https" title=" giao thức tcp/ip và http https" class="relative__description">
                        Giao thức TCP/IP và http https</a>
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