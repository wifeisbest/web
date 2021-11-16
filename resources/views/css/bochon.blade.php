@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Cách sử dụng các bộ chọn trong CSS3</h1>
                <div class="pots__body" itemprop="articleBody">
                <p>
                    Trong 1 file mã html của chúng ta có vô số thẻ, thẻ này lồng thẻ kia và các thẻ đều này có mối liên quan với nhau theo kiểu cha con, ông bà..
                    Việc chọn được 1 phần tử để chúng ta <b> style</b> thường khá gây lúng túng cho anh em mới bắt đầu. Trong bài này mình sẽ cùng các bạn đi tìm hiểu 
                    các cách để chọn được 1 phần tử để áp dụng <b>css</b> vào nó nhé.

                </p>
                <h2 class="section__h2"> Phân loại bộ chọn : Có 5 loại</h2>
                <h3>
                    1 . * Bộ chọn đơn giản 
                </h3>
               
                <p>
                   Bộ chọn đơn giản nhưng đầy sức mạnh và là bộ chọn được sử dụng nhiều nhất, đây là cách chọn theo tên của thẻ nhưng không nên dùng các bạn nhé, chúng ta nên dùng <b>id và class</b>,vì nó 
                    là cách chọn đơn giản nên mình giới thiệu cùng các bạn.
                </p>
                <p>
                    p { <br>
                       <span id ="bochon"> color : red;</span>
                     <br> }
                </p>
                   
                <p> 
                    Nếu chúng ta chọn theo cách này thì tất cả chữ trong các thẻ p trong tài liệu của chúng ta sẽ biến thành màu đỏ hết nên cách chọn này rất ít được 
                    dùng , và thực tế mình làm thì cũng không dùng cách này. Chúng ta cùng nhớ lại là trong mỗi thẻ của tài liệu html chúng ta có thể đặt các thuộc tính 
                    cho mỗi thẻ, và thuộc tính ( attribute ) thì chúng ta đặt bao nhiêu cũng được dựa theo tính chất này chúng ta thêm cho mỗi thẻ html các thuộc tính 
                    <b>id</b> và <b>class</b> dựa theo 2 thuộc tính này chúng ta sẽ chọn được đúng thẻ mà chúng ta mong muốn.
                </p>
                
                <p>
                    <b>id</b> là thuộc tính mang ý nghĩa định danh duy nhất cho thẻ đó nó như căn cước hay chứng minh thư của chúng ta vậy, mỗi thẻ thì chúng ta đặt 
                    <b>id </b> cho thẻ đó và trong toàn bộ tài liệu html thì id đó là duy nhất. Còn với <b> class </b> thì linh hoạt hơn với cùng 1 <b>class</b> thì chúng 
                    ta có thể đặt cho nhiều thẻ.

                </p>
                <p>
                   Dưới đây là ví dụ về code của trang chủ xyzabc.xyz khi mở bằng devtolls.
                </p>
                <p>
                    <img src="/img/bochon.png" alt="bộ chọn">
                </p>
                <p>
                  Như trên chúng ta thấy các thẻ lồng vào nhau theo khá là nhiều lớp, nhưng mỗi thẻ mình đều đặt cho mỗi class riêng. Và trong mỗi thẻ <b>section</b> thì cấu trúc nó cũng 
                  y như vậy, nhưng chỉ có class là giống nhau còn <b>id</b> thì chỉ 1 thẻ duy nhất, việc <b>class</b> trùng nhau như thế này giúp mình tiết kiệm thời 
                  gian và không bị trùng lặp code. Ngoài <b>class</b> và <b>id</b> ra trong thẻ của mình còn có nhiều thuộc tính khác, thì đó là những thuộc tính phục vụ 
                  cho việc SEO website về vấn đề này mình sẽ chia sẻ cùng các bạn trong các bài viết tiếp theo.

                </p>
                    
                <p>
                   <b>Lưu ý :</b> trong 1 phần tử html hay 1 thẻ chúng ta hoàn toàn có thể có cả 2 thuộc tính <b>id và class</b> cũng như có số lượng bao nhiêu cũng được việc này 
                   giúp chúng ta linh hoạt trong việc chọn và style thẻ đó. Với <b>id</b> là duy nhất nên chúng ta nên tránh việc hiểu lẫn với <b>class</b>. Ví dụ chúng ta có thẻ 
                   <b>h2 có id = "number" </b> thì trong tất cả thẻ còn lại chúng ta cũng không nên dùng  <b>id = "number"</b> này cho bất kỳ thẻ nào nữa . Ngược lại với  <b>id</b> 
                   chúng ta có thẻ <b>h2 có class = "two"</b> class này có thể được dùng lại ở bất kỳ thẻ nào chúng ta muốn. 
                </p>
                <p>
                   
                </p>
                <h3>  2 . * Bộ chọn dựa trên mối quan hệ giữa các thẻ </h3>
                <p>
                   Trong bộ chọn này chúng ta lại có 4 loại con khác mỗi loại đi theo 4 ký tự đó là ký tự khoảng trắng (phím cách trên bàn phím), dấu > dấu + , dấu ~ .
                   Trong chính blog này mình cũng dùng bộ chọn này nhưng rất ít nên mình chỉ giới thiệu thôi nhé, các bạn hãy code và thử 1 vài lần để hiểu cách thức các 
                   bộ chọn này hoạt động nhé.
                </p>
                <p>
                    <img src="/img/bochon1.png" alt="bộ chọn">
                </p>
                <p>
                        Trong ví dụ trên chúng ta chú ý bộ chọn dùng dấu cách trên bàn phím ( space ) với cách chọn này thì tất cả thẻ p bên trong thẻ <b>div 
                        có class = "space"</b>  thì đều chịu style hết, dù thẻ p đó có là con hay là cháu của thẻ <b>div</b>.
                </p>
                <p>
                    <img src="/img/bochon2.png" alt="bộ chọn">
                </p>
                <p>
                        Trong ví dụ này với bộ chọn sử dụng dấu > thì chỉ những thẻ p là con của thẻ <b>div có class = "space"</b> mới chịu style còn thẻ <b>p</b> cháu hoặc chắt 
                        nếu có sẽ không chịu style.
                </p>
                <p>
                    <img src="/img/bochon3.png" alt="bộ chọn">
                </p>     
                <p>
                        Trong bộ chọn sử dụng dấu + thì có nghĩa là chúng ta sẽ  <b>chỉ chọn 1 thẻ p </b>  bên ngoài và ở phía dưới <b>div có class = "space"</b> lưu ý với bộ chọn này 
                        là chúng ta chỉ chọn 1 thẻ ngay sau thẻ  <b>div có class = "space"</b>.
                </p>
                <p>
                    <img src="/img/bochon4.png" alt="bộ chọn">
                </p>  
                <p>
                        Trong bộ chọn dấu ~ chúng ta sẽ chọn tất cả các thẻ <b>p</b> sau thẻ  <b>div có class = "space"</b>. Bộ chọn này chỉ có như này khá đơn giản.
                </p>

                
                <p>
                 <i>Vẫn còn 3 bộ chọn nữa bài hôm nay khá dài rồi mình sẽ viết vào bài sau nhé. </i> Chúc bạn có 1 ngày tốt lành.
                </p>
                
                <div class="next__pre">
                    <a href="/cach-su-dung-cac-don-vi-do-trong-css" class= "pre"title="bộ chọn css">
                       Cách sử dụng các đơn vị đo trong css
                    </a>
                        <!-- <a href="/arrow-function-trong-javascript" class= "next"title="Hàm mũi tên trong javascript">
                            Hàm mũi tên trong javascript
                        </a> -->
                        
                </div> 
                
                <div class="tag">
                    Tag: <a href="/css3" title="CSS"> CSS</a>
                </div>
                
                <!-- <div class="fb-comments" data-href="https://xyzabc.xyz/cach-su-dung-cac-don-vi-do-trong-css" data-width="" data-numposts="5"></div> -->

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
    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=4314618238628568&autoLogAppEvents=1" nonce="ZxpiQs5E"></script> -->
@endsection