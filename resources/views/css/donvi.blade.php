@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Cách sử dụng các đơn vị đo trong CSS</h1>
                <div class="pots__body" itemprop="articleBody">
                <p>
                    Các bạn có bao giờ tự hỏi tại sao trong CSS có nhiều đơn vị đo đến như thế ? Tại sao không dùng 1 đơn vị đo thôi ?.... 1 phần  
                    lý do và mục đích là để <b> linh hoạt trong hiển thị cho từng thiết bị </b> , ngày nay với rất nhiều thiết bị với kích cỡ màn hình 
                    khác nhau việc sử dụng 1 đơn vị cố định sẽ gây nhiều bất cập, việc hiển thị sẽ không đúng như mong muốn thiết kế ban đầu. Chính thế nên việc 
                    hiểu và sử dụng linh hoạt các đơn vị trong CSS là rất cần thiết.

                </p>
                <h2 class="section__h2"> Phân loại</h2>
                <p>
                    Chúng ta có 2 loại đơn vị đó là <b>tuyệt đối</b> và <b>tương đối</b> 
                </p>
                <!-- <p>
                    <img src="/img/muiten1.png" alt="Mũi tên">
                </p> -->
                <p>
                   <b>Đơn vị đo tuyệt đối </b> có nghĩa là kích thước dài, rộng , cao  của 1 phần tử sẽ luôn cố định dù cho phần tử đó hiển thị trên laptop, 
                   mobile, tablet , PC ... trong CSS chúng ta hay dùng đơn vị loại này nhất đó chính là <strong> đơn vị px</strong>;
                   
                </p>
                <p>
                    <b>px</b> là đơn vị đo kích thước màn hình hiển thị thông qua điểm ảnh, liên quan đến điểm ảnh chúng ta lại có khái niệm độ phân giải , độ phân giải 
                    là số điểm ảnh trong 1 inch . Có thể đến đây chúng ta vẫn chưa mường tượng 
                    ra được,  mình sẽ quy đổi về đơn vị thân quen để chúng ta cùng hiểu hơn 1px = 0.026458333 cm.
                </p>
                
                <p>
                    <b>Đơn vị đo tương đối</b> là các đơn vị đo chiều dài phụ thuộc vào các thành phần khác, chúng ta có các đơn vị sau thường xuyên được sử dụng 
                    đó là <b>em, rem, và % </b>. Chúng ta cùng đi tìm hiểu cũng như phân biệt sự khác nhau giữa các đơn vị này luôn nhé nhất là giữa <b>em và rem</b>
                </p>
                
                <p>
                    Đơn vị % thì dễ rồi mình sẽ không nói chi tiết về % nữa mà đi luôn vào <b>em và rem </b> luôn. Giống nhau chúng đều phụ thuộc vào giá trị front-size của phần tử khác. Khác nhau 
                    giữa chúng là là <b>rem </b> phụ thuộc vào font-size của phần tử gốc của trang, phần tử <i>cụ tổ</i> luôn đó là phần tử <span class="hightline">&lt;html &gt;</span>. Một điều lưu ý là nếu chúng ta 
                    không set font-size cho phần tử <i>cụ tổ</i> thì trình duyệt sẽ chọn mặc định là font-size là 16px luôn nhé.

                </p>
                <p>
                    Để hiểu về <b>em</b> chúng ta cùng xem ví dụ dưới
                </p>
                <p>
                    <img src="/img/donvi1.png" alt="đơn vị">
                </p>
                <p>
                   Giả sử chúng ta có thẻ b có class là classb là thẻ con của thẻ a nào đó. theo đó <b>em</b> sẽ được quy đổi ra đơn vị px nhưng ra bao nhiêu px thì 
                   lại phụ thuộc vào chính font-size của thẻ b đó. Điều gì xảy ra nếu thẻ b không có giá trị font-size nhưng thẻ a lại có giá trị font-size , khi này giá trị 
                   <b>em </b> sẽ theo giá của thẻ a vì thẻ b là thẻ con của a nên b sẽ kế thừa thuộc tính font-size của thẻ cha là a. Việc dùng <b>em</b> cần phải 
                   cân nhắc vì trong tài liệu html việc các thẻ có quan hệ cha con, ông cháu là thường xuyên và điều rất nhiều và hiển nhiên vì thế khi dùng <b>em</b> chúng ta cần 
                   biết rõ phần tử đó đang có font-size là bao nhiêu ? có thừa hưởng giá trị font-size này từ thẻ cha, ông, cụ nào không.Cũng chính vì lý do này mà <b>rem</b> được dùng 
                   rất là nhiều và cũng khuyến khích được dùng nữa.

                </p>
                    
                <p>
                   Trong khi dùng <b> em và rem</b> chúng ta luôn quy đổi ra giá trị font-size  bởi vì cỡ chữ trong 1 website là rất 
                   quan trọng nó ảnh hưởng đến thiết kế và bố cục của 1 website. Chúng ta dùng <b>em và rem </b> sẽ đảm bảo được với cỡ chữ là như thế nào thì bố cục 
                   trang web của chúng ta sẽ luôn phù hợp.
                </p>
                <p>
                   
                </p>
                <h2 class="section__h2"> Một số đơn vị đo hay được dùng khác</h2>
                <p>
                    Khi bạn thao khảo ở đâu đó thì chắc hẳn các bạn cũng bắt gặp đơn vị đo <b>vh và vw</b> đây cũng là các đơn vị tương đối. Các thức hoạt động như sau chúng 
                    ta chia chiều rộng và chiều cao của khung nhìn thành 100% <b>vh</b> sẽ ứng với chiều cao, <b>vw</b> ứng với chiều rộng và như vậy thì 1vh sẽ chiếm 1% của khung nhìn. Tương tự với vw.
                </p>
                <h2 class="section__h2"> Tổng Kết</h2>
                <p>
                  Còn một vài đơn vị tương đối và tuyệt đối khác trong CSS mà mình chưa nêu ra, nhưng theo mình những đơn vị mà chúng ta cùng xem ở trên là các đơn vị thông dụng 
                  và được sử dụng nhiều nhất. Việc sử dụng các đơn vị tương đối mang lại rất nhiều lợi ích nó giúp chúng ta hạn chế việc chỉnh sửa mã tương ứng với các thiết bị khác nhau.
                  Việc tìm hiểu và lựa chọn sử dụng hợp lý các đơn vị đo trong css sẽ giúp chúng ta linh hoạt cũng không gặp lúng túng khi lựa chọn các đơn vị đo.
                  Bài viết của mình chắc hẳn vẫn còn nhiều hạn chế bạn có thể để lại bình luận ở phía dưới nhé. Cảm ơn bạn đã đọc chúc bạn thành công.
                </p>
                
                <div class="next__pre">
                    <a href="/huong-dan-su-dung-dev-tools-co-ban" class= "pre"title="hướng dẫn sử dụng dev-tools cơ bản">
                        hướng dẫn sử dụng dev-tools cơ bản
                    </a>
                        <!-- <a href="/arrow-function-trong-javascript" class= "next"title="Hàm mũi tên trong javascript">
                            Hàm mũi tên trong javascript
                        </a> -->
                        
                </div> 
                
                <div class="tag">
                    Tag: <a href="/css3" title="CSS"> CSS</a>
                </div>
                
                <div class="fb-comments" data-href="https://xyzabc.xyz/cach-su-dung-cac-don-vi-do-trong-css" data-width="" data-numposts="5"></div>

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
                    <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title="cach thuc">
                        <img src="/img/internet.png" alt="internet">
                    </a>
                    <h3>
                        <a href="/cach-thuc-mang-luoi-internet-hoat-dong" title=" internet" class="relative__description">
                        Cách thức internet hoạt động</a>
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

@section('facebook')
    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=4314618238628568&autoLogAppEvents=1" nonce="HARSRbRv"></script> -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=4314618238628568&autoLogAppEvents=1" nonce="ZxpiQs5E"></script>
@endsection