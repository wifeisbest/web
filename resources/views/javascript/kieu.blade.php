@extends('layouts.detail')

@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Hiểu thêm về biến trong javascript</h1>
                <div class="pots__body" itemprop="articleBody">
                <p>
                    Khẳng định từ bài trước đó là trong javascript chỉ có kiểu của <b>giá trị </b> không có kiểu của biến.
                    Ví dụ <span class="code">let a = 2 </span>. Với ví dụ rất đơn giản này chúng ta hay hiểu là <i>biến a bằng 2</i>. Chúng ta hiểu 
                    cách này không có gì sai cả, nhưng mình nghĩ còn đang thiếu, theo cách hiểu của mình và cách suy nghĩ của mình về ví dụ này là 
                    <strong>biến a tại thời điểm này đang lưu trữ giá trị là 2</strong>. tại sao mình lại suy nghĩ như vậy vì biến mình dùng  đang lưu trữ  kiểu dữ liệu 
                    là số, và tại thời điểm thì nó bằng 2, ít ai khai báo biến xong rồi để đấy mà không làm gì với biến đó cả . Vì vậy biến sẽ thay đổi 
                    và việc mình quan tâm đó là <b>giá trị của biến sẽ thay đổi như nào ra sao </b> khi mình chạy chương trình.                    
                </p>
                <p>
                    Bên trên chúng ta bắt gặp 2 khái niệm kiểu dữ liệu và giá trị chúng ta hãy đi phân biệt và hiểu rõ 2 khái niệm này nhé.
                   <i> Lưu ý </i> khi chúng ta đặt tên biến trong javascript khi đặt tên biến thì không được bắt đầu bằng số, và các từ keyword như : true, false, boolean... các từ này javascript dùng 
                    rồi chúng ta không được dùng nữa.
                    
                </p>
                <h2 class="section__h2"> Kiểu dữ liệu và giá trị</h2>
                <p>
                    Nếu dữ liệu không được phân loại ra thì  chúng ta không thể nào quản lý được, trong javascript chúng ta có 2 nhóm dữ liệu, 
                    dù phân chia như thế nào thì điều mà chúng ta quan tâm nhất vẫn là <b>giá trị </b> của dữ liệu đó nhé các bạn.
                </p>
                <p>
                    <h3>Dữ liệu nguyên thủy</h3>
                    <ul class="ul">
                        <li>Kiểu dữ liệu dạng <b>Number</b> có vô số giá trị vì số là vô hạn</li>
                        <li>Kiểu dữ liệu dạng  <b>String</b> (bao gồm các ký tự văn bản, câu chữ, khái báo biến giữ giá trị loại này chúng
                            ta để trong dấu nháy đơn hoặc nháy đôi .) số lượng cũng rất là nhiều</li>
                            <li>Kiểu dữ liệu dạng <b>Boolean:  chỉ có 2 giá trị </b> đúng (true) và (false).
                        </li>
                            <li>Kiểu dữ liệu <b>undefined</b> là trường hợp mà biến được khai báo mà không cho giữ 1 giá trị nào cả có 1 <b>giá trị 
                            duy nhất </b> cũng là undefined</li>
                            <li>Kiểu dữ liệu <b>null</b> là không có gì cả,  giá trị là <b>null</b> cái này khá là phức tạp và người ta coi đây 
                            là lỗi ngôn ngữ.</li>
                    </ul>
                    <h3>Dữ liệu không nguyên thủy</h3>
                    <ul class="ul">
                        <li><b> Object :</b> Thể hiện 1 đối tượng và các thuộc tính của nó</li>
                        <li><b>Symbol :</b> Kiểu này mỗi giá trị là duy nhất và không thể bị sửa đổi</li>
                    </ul>
                    
                </p>
                <p>
                    Kiểu dữ liệu không nguyên thủy thường khá phức tạp chúng ta sẽ nghiên cứu dần trong các bài tiếp theo.

                </p>
                <p>
                    <img src="/img/hieu.png" alt="Biến">
                </p>
                <h2 class="section__h2"> Chuyển kiểu và so sánh</h2>
                <p>
                    Trong thực tế để linh hoạt trong sử dụng tính toán chúng ta hoàn toàn có thể chuyển đối các kiểu dữ liệu 1 cách linh hoạt ,
                    cách mà mình thấy hay dùng nhất đó là chuyển đổi qua lại giữa kiểu <b>Số </b> và <b>Chuỗi</b> ví dụ 
                    <span class="code">let a = '69'</span> biến a có giá trị là 69 là thuộc kiểu chuỗi . Để chuyển biến a sang kiểu Số trong 
                    javascript người ta cung cấp nhiều cách để làm việc này, ở đây mình sẽ dùng hàm <b>Number</b> có sắn để chuyển biến a sang kiểu Number 
                    <span class="code">let b = Number(a) </span> lúc này biến b sẽ có giá trị là 69 và kiểu dữ liệu là số. Việc làm này của chúng ta gọi là 
                    <i>ép kiểu rõ ràng, minh bạch</i>
                </p>
                <h2 class="section__h2"> So sánh '==' và '===' trong javascript</h2>
                <p>
                    Nếu học javascript đủ lâu chắc chắn rồi bạn cũng sẽ phải sử dụng 2 phép so sánh này, và rồi khi chưa hiểu kỹ về chúng nó sẽ làm bạn 
                    thật sự hoang mang và không biết chuyện gì đang xảy ra, tại sao nó lại ra như vậy. Ví dụ bạn so sánh chuỗi "6969" với dãy số 6969. Đầu tiên 
                    ta thấy nó không sai mà cũng không đúng. Nó đúng về <strong>giá trị</strong> nhưng sai về kiểu dữ liệu. Khi đặt "69696" == 6969 trong javascript 
                    có nghĩa là chúng 
                    ta đang so sánh tương đối javascript tự động <i>ép kiểu ngầm</i> chuyển "6969" thành Number vậy nên kết quả so sánh tương đối này sẽ cho kết quả là đúng. 
                    Trong trường hợp bạn đặt "6969" === 6969 đây là so sánh tuyệt đối , không cho phép <i>ép kiểu</i> nên kết quả là sai là vì giá trị thì đúng, nhưng kiểu thì sai.
                    Vậy nên nếu chúng ta biết giá trị của 2 bên phép so sánh thì có thể yên tâm dùng == và nếu không chắc về giá trị 2 bên phép so sánh thì chúng 
                    ta dùng === 
                </p>
                <h2 class="section__h2"> Cô đọng lại</h2>
                    
                <p>
                    Việc xác định biến đang cầm giá trị nào là việc quan trọng để chúng ta hiểu,  kiểm soát và theo dõi sự thay đổi giá trị của biến khi chương 
                    trình thực thi. Bài khá dài và hơi miên man nếu bạn thấy phần nào cần sửa chữa, hãy góp ý với mình ở phần liên hệ nhé. Cảm ơn bạn.
                <p>
                    
                    
                       
                    
                    
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
                <li class="relative__post-item">
                    <a href="/contact" title="giao thức mạng">
                        <img src="/img/html1.png" alt="http">
                    </a>
                    <h3>
                        <a href="/contact" title=" html" class="relative__description">
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