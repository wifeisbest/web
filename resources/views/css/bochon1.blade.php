@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Cách sử dụng các bộ chọn trong CSS3 phần 2</h1>
                <div class="pots__body" itemprop="articleBody">
                <p>
                   
                </p>
                <h2 class="section__h2"> Phân loại bộ chọn : Có 5 loại</h2>
                <h3>
                    3 . * Bộ chọn theo lớp giả ( Pseudo-classes )
                </h3>
               
                <p>
                   Bộ chọn này được sử dụng để xác định trạng thái đặc biệt của một phần tử, nói nôm na dễ hiểu thì khi tác động vào 1 thẻ nào đó thì nó không còn bình thường nữa 
                   , hoặc chúng ta thay đổi trạng thái bình thường mặc định của nó. Các hành động ở đây mà chúng ta có thể làm ví dụ như hơ chuột vào 1 phần tử thì nó sẽ biến đổi như nào ,
                   hoặc khi chúng ta tích chọn vào 1 hộp chọn nam hay là nữ chẳng hạn, và còn có hành động khác, chúng ta cũng chú ý là CSS cung cấp cho chúng ta những thay 
                   đổi này khá là đơn giản, còn để có thể tác động mạnh và sâu hơn tùy biến được nhiều hơn thì chúng ta cần dùng đến javascript. Chúng ta hãy xem cú pháp của nó như sau.
                </p>
                <p>
                    selector:pseudo-class { <br>
                       <span id ="bochon"> thuộc tính : giá trị ;</span>
                     <br> }
                </p>
                   
                <p> 
                   Trong đó <b>selector</b> có thể là tên thẻ ví dụ thẻ <b>p, h1, h2 , div </b> hoặc tên <b>class và id </b> của phần tử chúng ta muốn style 
                   <b>pseudo-class </b> là tên lớp giả chúng ta muốn, ví dụ.
                </p>
                
                <p>
                    <img src="/img/bochon5.png" alt="bộ chọn">   

                </p>
                <p>
                    Trong ví dụ này thẻ p là đối tượng chúng ta chọn và chúng ta muốn khi chúng ta di chuột ( hover ) vào thì màu sắc của nó sẽ chuyển thành màu hồng,
                    chỉ cần style css đơn giản như vậy là chúng ta đã làm được thành công.Theo cách css này thì tất cả các thẻ p khi chúng ta hơ chuột vào đều thành màu hồng hết,
                    như vậy thì không được thẩm mỹ chút nào. Trong thực tế chúng ta ít dùng cách này bởi vì hầu như tất cả các thẻ trong 
                    tài liệu của chúng ta đều được đặt theo ID và class từ đó chúng ta có cách kết hợp bộ chọn này theo cách sau ví dụ :
                </p>
                <p>
                    p.hightline:hover { <br>
                       <span id ="bochon"> color : violet ;</span>
                     <br> }
                </p>
                <p>
                  Ví dụ trên chúng ta có thể hiểu nó là , chọn thẻ p có class là <i>hightline</i> khi hơ chuột vào thẻ p đó thì màu chữ sẽ chuyển sang màu hồng, đây là ví dụ 
                  giúp chúng ta hiểu được cách linh hoạt trong việc sử dụng bộ chọn này. Có 1 lưu ý là khi viết css cho dòng <i>p.hightline:hover</i> chúng ta viết liền luôn 
                  không có dấu cách ( space ) giữa các ký tự nhé.

                </p>
                    
                <p>
                   Chúng ta cùng đi tìm hiểu thêm 1 số cách chọn khác trong rất hay gặp và được sử dụng trong bộ chọn này.
                </p>
               
                <h3>  3.1  Bộ chọn <i>:first-child</i> </h3>
                <p>
                    <img src="/img/bochon6.png" alt="bộ chọn">   
                </p>
                <p>
                   Chúng ta hiểu ví dụ này là <i>chọn phần tử p đầu tiên thuộc class có tên là <b>one</b></i> và áp cho nó giá trị màu chữ cho nó là màu xanh. Lưu ý khi viết dòng css 
                   .one p:first-child chúng ta có 1 khoảng trắng dấu (space ) giữa tên class <i>one</i> và thẻ <i>p</i>.
                </p>
                <h3>  3.2  Bộ chọn <i>:last-child</i> </h3>
                <p>
                    <img src="/img/bochon7.png" alt="bộ chọn">   
                </p>
                <p>
                   Ví dụ này tương tự như trên xong  phần tử chúng ta chọn là phần tử cuối cùng của class. Nhớ lưu ý về cách viết css.
                </p>
                <p>
                   Sau đây chúng ta có thêm 1 trường hợp sử dụng bộ chọn này chúng ta cùng xem và tự nhận ra sự khác biệt nhé.     
                </p>
                <p>
                    <img src="/img/bochon8.png" alt="bộ chọn">
                </p>     
                <p>
                       
                </p>
                <p>
                   
                </p>  
               

                
               
                
                <div class="next__pre">
                    <a href="/cach-su-dung-cac-bo-chon-trong-css3" class= "pre"title="bộ chọn css">
                       Cách sử dụng các bộ chọn trong css
                    </a>
                        <!-- <a href="/arrow-function-trong-javascript" class= "next"title="Hàm mũi tên trong javascript">
                            Hàm mũi tên trong javascript
                        </a> -->
                        
                </div> 
                
                <div class="tag">
                    Tag: <a href="/css3" title="CSS"> CSS</a>
                </div>
                
                <!-- <div class="fb-comments" data-href="https://xyzabc.xyz/cach-su-dung-cac-bo-chon-trong-css3" data-width="" data-numposts="5"></div> -->
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
    <!-- <div id="fb-root"></div> -->
    <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=4314618238628568&autoLogAppEvents=1" nonce="NJmAtdR1"></script> -->
@endsection