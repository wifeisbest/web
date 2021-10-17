@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Arrow function</h1>
                <div class="pots__body" itemprop="articleBody">
                <p>
                   Javascript luôn luôn phát triển và cải tiến từ đó chúng ta có các phiên bản nâng cao và tiến bộ hơn, và ở phiên bản Javascript ES6 thì chúng ta có 
                   khái niệm Arrow function. Việc ra đời của hàm mũi tên với mục đính để code của chúng ta dễ đọc, dễ hiểu hơn, viết code nhanh hơn ngắn gọn hơn.
                   Chúng ta cùng tìm hiểu qua các ví dụ sau cùng mình nhé.
                </p>
                <h2 class="section__h2"> Hàm không có tham số</h2>
                <p>
                    <img src="/img/muiten1.png" alt="Mũi tên">
                </p>
                <p>
                   Trong ví dụ trên điểm khác nhau giữa 1 function bình thường và hàm mũi tên đó là chúng ta bỏ từ khóa function thay bằng dấu <b> =></b> và code 
                   của chúng ta nằm chỉ nằm trên một dòng, với 
                   trường hợp khối code của chúng chỉ gồm 1 câu lệnh duy nhất thì chúng ta có thể bỏ luôn dấu ngoặc như code ở dòng 40.
                   
                </p>
                <h2 class="section__h2"> Hàm có tham số</h2>
                <p>
                    <img src="/img/muiten2.png" alt="Mũi tên">
                </p>
                
                <p>
                    Đối với hàm có từ 2 tham số trở lên cách viết hàm mũi tên được viết như dòng code 48, với trường hợp chỉ có 1 tham số chúng ta có thể bỏ luôn 
                    dấu ngoặc () bao quanh và nếu  khối code sau dấu mũi tên chỉ 
                    có 1 dòng code thì chúng ta có code như dòng code 52. 
                </p>
                <h2 class="section__h2"> Hàm có từ khóa return</h2>
                <p>
                    <img src="/img/muiten3.png" alt="Mũi tên">
                </p>
                <p>
                    Đối với hàm có từ khóa return thì các viết vẫn như trên chúng ta có thể bỏ luôn từ khóa return nếu code chỉ có 1 dòng. Khi dùng hàm mũi tên mà kết quả chúng ta 
                    muốn trả về là một object thì chúng ta cần phải lưu ý nhé, xét ví dụ sau:
                </p>
                    
                <p>
                    <img src="/img/muiten4.png" alt="Mũi tên">
                </p>
                <p>
                    Trong ví dụ này chúng ta muốn hàm trả về là 1 đối tượng thì bắt buộc sau dấu => chúng ta cần phải nhóm lại đối tượng bên trong dấu ngoặc tròn () ,
                    nếu không có dấu ngoặc này chúng ta sẽ gặp lỗi sai cú pháp vì trình biên dịch mã hiểu sau dấu => sẽ là kết quả mà hàm trả về, nếu không có dấu  ngoặc tròn () ,
                    trình biên dịch sẽ trả về 1 khối code như vậy sẽ bị sai cú pháp để nhận được đúng kết quả và đúng cú pháp thì chúng ta cần đặt đối tượng cần trả về trong dấu ngoặc tròn.
                </p>
                <h2 class="section__h2"> Chú ý khi dùng với từ khóa <b>this</b></h2>
                <p>
                    <img src="/img/muiten5.png" alt="Mũi tên">
                </p>
                <p>
                    Trong ví dụ này với cách viết bình thường thì mọi chuyện đều không sao code từ dòng 4 đến 9, nhưng khi chúng viết với hàm mũi tên code dòng 13 đến  18, thì code 
                    chúng ta không chạy đúng và trả về lỗi undefined. Chính vì thế mà chúng ta không dùng hàm mũi tên trong các hàm khai báo đi cùng với đối tượng ( Object) trong 
                    javascript.
                </p>
               

                <h2 class="section__h2"> Tổng Kết</h2>
                <p>
                   Arrow function Javascript làm cho code của chúng ta tường minh hơn, dễ đọc và ngắn ngọn, nhưng với những bạn đã quen với cú pháp cũ khi đọc code 
                   được viết theo hàm mũi tên thì thấy rất bất ngờ và lúng túng , để thành thạo và hiểu rõ được arrow function thì cách duy nhất đó là code thật nhiều 
                   viết đi viết lại rồi chúng ta sẽ hiểu và yêu thích cách viết này. Hiện nay các framework hầu như đều viết theo phiên bản ES6 nhất là Arrow function trong ReactJS được 
                   sử dụng rất nhiều, nên việc viết được và hiểu được về hàm mũi tên là điều tiên quyết. Cảm ơn đã đọc chúc bạn thành công.
                </p>
                
                <div class="next__pre">
                    <a href="/hieu-ro-ve-ham-trong-javascript" class= "pre"title="hiểu rõ về hàm trong javascript">
                        Hiểu rõ về hàm trong javascript
                    </a>
                        <!-- <a href="/arrow-function-trong-javascript" class= "next"title="Hàm mũi tên trong javascript">
                            Hàm mũi tên trong javascript
                        </a> -->
                        
                </div> 
                
                <div class="tag">
                    Tag: <a href="/javascript" title="javascript"> Javascript</a>
                </div>
                
                <!-- <div class="fb-comments" data-href="https://xyzabc.xyz/hieu-ro-ve-ham-trong-javascript" data-width="" data-numposts="5"></div> -->

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

@endsection