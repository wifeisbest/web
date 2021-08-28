@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name">HTML là gì ? Và các phần tử cơ bản nhất</h1>
                <div class="pots__body" itemprop="articleBody">
                    <p>
                        <strong>HTML </strong> là ngôn ngữ đánh dấu theo 1 chuẩn nhất định , hiểu đơn giản nhất là văn bản HTML sẽ có rất 
                        nhiều đoạn nhỏ, và mỗi đoạn này được đánh dấu bằng những loại riêng, mục đính của việc đánh dấu này là để cho 
                        trình duyệt hiểu và hiển thị đúng những gì mà chúng ta mong muốn. Mỗi 1 đoạn nhỏ trong tài liệu HTML đó chúng ta 
                        gọi nó là 1 phần tử của tài liệu HTML.
                    </p>
                    <p>
                        Cách chúng ta sắp xếp các phần tử HTML đó sẽ tạo nên bộ khung, bộ xương trang website của chúng ta. Hiểu được cách thức 
                        hoạt động và hiển thị của mỗi phần tử là điều <span class="hightline">cực kỳ quan trọng và rất cơ bản</span> để làm nên 
                        1 website chuẩn chỉ.
                    </p>
                    
                    <h2 class="section__h2">Bắt đầu thôi</h2>
                    <p>
                        Để soạn thảo văn bản thuần túy chúng ta hay dùng Microsoft Word, để soạn thảo mã HTML mình dùng đó là Visual Studio 
                        Code hay còn gọi là VS Code nó có nhiều tính năng tự động rất hay và miễn phí các bạn có thể tải nó tại đây 
                        <a href="https://code.visualstudio.com/"> Tải VS Code</a>
                        
                    </p>
                    <p>
                       Sau khi tải và cài đặt VS Code về máy, bạn hãy tạo 1 thư mục, thư mục đó ở đâu ? Tên gì ? bạn hãy đặt theo sở thích của bạn nhé.
                       Trong bài này mình sẽ tạo 1 thư mục ngoài Desktop có tên là xyzabc , 
                       sau đó mình vào VS Code chọn File 
                       chọn Open Folder và chọn đến thư mục xyzabc sau khi xong rồi thì mình sẽ được màn hình như sau :           
                    </p>
                    <p>
                        <img src="/img/vscode.png" alt="Vscode  " >
                    </p>
                    <p>
                        Màn hình này có thể không giống với màn hình của các bạn vì mình đã cá nhân hóa VS Code của mình và cũng khác phiên bản VS Code 
                        so với các bạn nữa , nhưng không sao cả vấn đề là nội dung của mã và cấu trúc VS code thì vẫn vậy cả. Bạn hãy tìm hiểu thêm về 
                        VS code nhé. Sau đây mình sẽ giải thích 2 chỗ mình khoanh đỏ số 1 là tạo file nhanh, và số 2 là tạo folder nhanh, đơn giản chỉ có 
                        vậy, nhưng 2 chõ này mình sẽ dùng rất thường xuyên sau này.                         
                       
                    </p>
                    <h2 class="section__h2"> Lan man quá rồi</h2>
                    <p>
                     Bài viết về HTML mà đến đây vẫn chưa thấy dòng mã nào, thôi nào vào việc chính thôi, các bạn hãy vào lại VS Code click vào số 
                     1 và tạo 1 file htmt và đặt tên cho file là là index.html.

                    </p>
                    <p>
                        <img src="/img/vscode1.png" alt="Vscode  " >
                    </p>
                    <p>
                        Trên hình phần A là chứa cấu trúc thư mục xyzabc của chúng ta sau nay trong phần này sẽ chứa rất nhiều file và các thư 
                        mục khác nữa. Phần B là phần làm việc chính của chúng ta , nơi mà chúng ta sẽ soạn thảo ,viết những dòng mã. Để có được 
                        dòng mã như trên hình bạn nhấn chọn phím "Shift + 1" sẽ ra dấu chấm than, sau đó bạn nhấn phím "Tab" VS Code sẽ tạo nhanh
                         cấu trúc file html đơn giản nhất cho chúng ta.
                    </p>
                    <h2 class="section__h2"> Chi Tiết</h2>
                    <p>
                        <ul class="ul">
                            <li><span class="code">&lt;!DOCTYPE html &gt;</span> Tuyên bố đây là văn bản dạng HTML</li>
                            <li><span class="code">"Vòng 1" &lt;html &gt;..... &lt;/html &gt;</span> là phần tử gốc bao bọc mọi phần tử khác của tài liệu HTML,các phần tử các 
                            muốn hoạt động bình thường thì đều phải nằm trong phần tử này</li>
                            <li><span class="code">"Vòng 2" &lt;head &gt;..... &lt;/head &gt;</span> Nằm trong phần tử 1, Chứa nhiều phần tử khác mục đính là miêu tả tài liệu HTML 
                            cung cấp thông tin về tài liệu đó</li>
                            <li><span class="code">"Vòng 3" &lt;body &gt;..... &lt;/body &gt;</span> Nằm trong phần tử 1, Các phần tử nằm trong phần tử vòng 3 này 
                            sẽ hiển thị lên màn hình cho chúng ta thấy. </li>
                        </ul>
                    
                    </p>
                    <p>
                        Đây là kết quả của chúng ta khi chạy trên trình duyệt, dòng chữ "Xin chào XYZABC - Blog tự học viết mã" 
                        cỡ chữ to, màu đen tại sao nó lại hiện thị lên như vậy, vì nó là 1 phần tử của tài liệu HTML nó được <span class="hightline">Đánh dấu</span> 
                        bằng phần tử <span class="code"> &lt;h1 &gt;..... &lt;/h1 &gt;</span> và trình duyệt sẽ hiển thị màu, chữ cỡ chữ theo quy định của phần tử 
                        <span class="code"> &lt;h1 &gt;..... &lt;/h1 &gt;</span>. Từ bây giờ thay vì gọi là phần tử chúng ta sẽ gọi là các <span class="hightline">thẻ</span> 
                        nhé các bạn. Sẽ có rất rất nhiều thẻ trong 1 tài liệu HTML chúng ta sẽ cùng tìm hiểu những thẻ hay dùng nhất trong các bài tiếp theo.
                    </p>
                    <p>
                        <img src="/img/vscode2.png" alt="Vscode  " >
                    </p>
                    <h2 class="section__h2"> Tổng Kết Lại</h2>
                    <p>
                        Văn bản HTML được cấu trúc làm 3 phần với dòng đầu tiên <span class="code">&lt;!DOCTYPE html &gt;</span> báo cho trình duyệt đây là 
                        tài liệu loại cấu trúc html. Phần 1 là thẻ <span class="code"> &lt;html &gt;..... &lt;/html &gt;</span> bao bọc toàn bộ tài liệu HTML, trong thẻ này chứa 2 thẻ 
                        <span class="code"> &lt;head &gt;..... &lt;/head &gt;</span>, và <span class="code"> &lt;body &gt;..... &lt;/body &gt;</span>. <strong>Phần 2</strong> 
                        là thẻ <span class="code"> &lt;head &gt;..... &lt;/head &gt;</span> tất cả các thẻ khác nằm trong thẻ này thì sẽ không hiển thị lên trên 
                        trình duyệt các thẻ này với nhiều chức năng khác nhau có tác dụng mô tả văn bản HTML. <strong>Phần 3</strong> thẻ
                        <span class="code"> &lt;body &gt;..... &lt;/body &gt;</span> các thẻ trong phần này sẽ được hiển thị trên trình duyệt cho người đọc 
                        thấy được, tùy theo thẻ đó thuộc loại nào mà trình duyệt sẽ hiển thị khác nhau cho mỗi thẻ.
                    </p>
                    <p> 
                        Mục đính của bài viết này là để bạn có thể hiểu được cấu trúc cơ bản của 1 tài liệu HTML cũng như viết được dòng mã đầu tiên 
                        hi vọng các bạn sẽ có hứng thú để xem các bài viết tiếp theo.
                    </p>
                    <div class="next__pre">
                        <a href="/website-la-gi" class= "pre"title="website là gì ?">
                            Website là gì ?
                         </a>
                        <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html" class= "next"title="hoạt động của các thẻ html"> 
                            Hoạt động hiển thị của các thẻ
                        </a>
                    </div>
                    <!-- <span class="hightline">exports</span>  -->
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
                    <a href="/giao-thuc-tcp-ip-http-va-https" title="giao thức mạng">
                        <img src="/img/http.png" alt="http">
                    </a>
                    <h3>
                        <a href="/giao-thuc-tcp-ip-http-va-https" title=" giao thức http" class="relative__description">
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