@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Hiểu rõ về hàm trong javascript</h1>
                <div class="pots__body" itemprop="articleBody">
                <p>
                    Hàm (function) là tập hợp các câu lệch được sắp xếp lại với để cùng thực hiện 1 chức năng nào đó và function được viết ra 
                    có đôi khi được viết ra chỉ để gọi 1 lần, nhưng cũng có function được viết ra và tái sử dụng nhiều lần.
                </p>
                <p>
                    Một chương trình máy tính một phần mềm được tạo nên bởi rất rất nhiều các function , function chính là đơn vị nhỏ nhất thực thi những 
                    hành động nhỏ nhất , công việc nhỏ nhất trong 1 chương trình máy tính.
                </p>
                
                <h2 class="section__h2"> Function được xây dựng sẵn</h2>
                <p>
                   Trong bất kỳ 1 ngôn ngữ lập trình nào thì cũng đều luôn có những function được xây dựng sẵn ( Built-in Functions ) chúng ta chỉ việc hiểu và áp dụng function này tùy theo tình huống và mục đích sử dụng
                   
                </p>
                <p>
                    Các Built-in Functions mà chúng ta rất hãy sử dụng <b>map() , reduce() ,toFixed() , toString() , charAt(), concat() , ....</b> còn rất nhiều các function khác,  trong các bài sau  mình sẽ giới 
                    thiệu với các bạn nhé.
                </p>
               
                <!-- <p>
                    <img src="/img/hieu.png" alt="Biến">
                </p> -->
                <h2 class="section__h2"> Phân loại hàm trong javascript</h2>
                <p>
                    Tùy thuộc theo tham số chúng ta có 2 loại function đó là :
                    <ul class="ul">
                        <li>Hàm không có tham số </li>
                        <li>Hàm có tham số </li>
                    
                    </ul>
                    <p>
                    
                    </p>
                </p>
                <p>
                    Đến đây chúng ta lại phải làm quen với 2 khái niệm mới đó là <b>tham số </b> và <b>đối số</b>
                </p>
                <p>
                    <img src="/img/ham.png" alt="Hàm">
                </p>
                <p>
                    <b>Tham số </b> là biến khi chúng ta đã định nghĩa và khai báo hàm .
                    <!--   -->
                </p>
                <p>
                    Trong ví dụ trên chúng ta có hàm <i>tinhTong</i> hàm này có 2 tham số <b>a </b>và <b>b</b> đây là tham số vì khi chúng ta khai báo hàm 
                    chúng ta cũng khai báo luôn 2 biến này. 
                </p>
                <p>
                    <b>Đối số</b> trong ví dụ ở dòng 36 chúng ta thực hiện 1 lời gọi hàm, hay chạy hàm chúng ta thay <b>a và b </b> bằng <b>6 và 9 </b> lúc này <b>6 và 9</b> 
                    được gọi là đối số . Vậy <b>đối số</b> là giá trị chúng ta truyền vào hàm thông qua tham số <b> a và b </b> khi hàm <b>được chạy </b>.
                </p>
                <p>
                    Tóm lại :<b>hàm có tham số </b> là hàm có đầu vào để cho ra đầu ra, tùy thuộc vào đầu vào là gì thì sẽ cho ra kết quả khác nhau. Để  hiểu thêm về tham số và đối số chúng ta cùng lấy ví dụ về máy pha cà phê, chúng ta coi cái máy là function ,
                    để máy cho sản phẩm là 1 cốc cà phê thì chúng ta giả sử phải cần có 2 nguyên liệu đầu vào , 2 nguyên liệu này chúng ta gọi là tham số . Khi chúng ta bỏ vào máy,  hạt cà phê và nước nóng 
                    ok ổn máy chạy tốt và cho ra cà phê. hạt cà phê và nước nóng là đối số. Chuyện gì sẽ xảy ra nếu chúng ta cho vào máy gạo rang và nước nóng 
                    tất nhiên là không thể cho ra côc cà phê được rồi. Như vậy việc viết hàm theo mục đính và nắm chắc được đối số truyền vào hàm qua tham số để 
                    hàm chạy đúng theo ý chúng ta muốn là điều cực kỳ quan trọng.
                </p>
                <p>
                    <b>Hàm không có tham số </b> là hàm khi được viết ra và thực thi thì kết quả không bao giờ thay đổi. Trở lại ảnh bên trên chúng ta có hàm <i>xinchao()</i> hàm này không có tham 
                    số, chính vì không có tham số nên dù gì đi chăng nữa khi hàm này chạy thì cũng sẽ mãi mãi chỉ cho chúng ta kết quả là in trên màn hình Console câu "xin chào xyzabc.xyz".
                </p>
                <h2 class="section__h2"> Phân loại hàm theo cách hàm được khai báo</h2>
                <p>
                   <ul class="ul">
                       <li>  Declaration Function </li>
                       <li>Expression Function </li>
                       <li>Arrow Function (Hàm mũi tên) </li>
                   </ul>
                </p>
                <p>
                    <b>  Declaration Function </b> là dạng function được khai báo đầy đủ bắt đầu bằng từ khóa <b>function</b> sau đó đến tên của  <b>function</b> tiếp theo là đến tham số nếu có thì tham số nằm trong () hoặc không có tham số thì để trống, 
                    tiếp theo là phần các câu lệch được bọc trong dấu { }.   Declaration Function  cách khai báo và chạy hàm được thể hiện trên ảnh trên.
                <p>
                <p>
                    <b>Expression Function </b> là hàm có phần ngược lại 1 chút với hàm   Declaration Function  có nghĩa là hàm này không bắt buộc phải có từ khóa <b>function</b>
                    tên của hàm có cũng được không có cũng được. Khi hàm được khai báo mà không có tên chúng ta gọi nó là hàm ẩn danh (Anonymous Function). Và thường được gán cho 1 biến chúng ta 
                    cùng xem hình ảnh sau để hiểu rõ hơn.
                <p>
                <p>
                    <img src="/img/ham1.png" alt="Hàm">
                </p>   
                <p>
                    Trong ví dụ trên biến <b>hello và hello1</b> đều được gán bằng 1 function và function này thì đều thuộc Expression Function. Dòng 13 và 14 là các dòng lệch thực thi 
                    chạy các function này.
                </p>
                <p>
                    Các dạng khai báo Expression Function mà chúng ta cũng rất hay gặp trong 1 hàm callback và khai báo 1 đối tượng như trong ví dụ sau:
                </p>       
                <p>
                    <img src="/img/ham2.png" alt="Hàm">
                </p>   
                <p>
                    Trong ví dụ này hàm setTimeout bản thân nó đã là 1 hàm và nó nhận 1 tham số lại là 1 hàm, hàm hello() lúc này cũng thuộc loại Expression Function,
                     Khi khai báo 1 đối tượng human tại dòng 10 chúng ta có 1 hàm không tên và nó là giá trị của sayHi , function này cũng thuộc Expression Function.
                </p>

                <p>
                    <b>Arrow Function (Hàm mũi tên)</b> về loại hàm này mình sẽ viết trong bài tiếp theo nhé.
                </p> 
                <h2 class="section__h2"> Tóm lại</h2>
                <p>
                    Hiểu về các loại function trong javascript giúp cho quá trình khi chúng ta mới tiếp cận đến ngôn ngữ này khỏi bỡ ngỡ , 
                    sau này khi đã làm việc nhiều với javascript thì mọi thứ ở trên nó sẽ như nằm lòng của tất cả mọi người. Chúc các bạn thành công, trong bài viết 
                    tiếp theo chúng ta sẽ cùng đi tim hiểu về hàm mũi tên, cũng như 1 số lưu ý về hàm và cách sử dụng hàm nhé.
                </p>
                <div class="next__pre">
                    <a href="/bien-va-bieu-thuc-toan-hoc-trong-javascript" class= "pre"title="Ngôn ngữ lập trình">
                        Biến và biểu thức toán học
                        </a>
                        <!-- <a href="/kieu-gia-tri-cua-bien-trong-javascript" class= "next"title="Kiểu giá trị của biến">
                        Kiểu giá trị của biến
                        </a> -->
                        
                </div> 
                
                <div class="tag">
                    Tag: <a href="/javascript" title="javascript"> Javascript</a>
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