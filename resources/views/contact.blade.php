@extends('layouts.detail')


@section('content')
    <div class="bd-grid">
        <section class="detail">    
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Liên Hệ</h1>
                <div class="pots__body" itemprop="articleBody">
                
                    <p>
                        Nếu bạn muốn liên hệ trực tiếp với mình bạn hãy lựa chọn các phương thức dưới đây nhé, mình luôn sẵn sàng trong 
                        tâm thế, lắng nghe và học hỏi. Cũng như toàn bộ các phản hồi của bạn.
                    </p>
                    
                    <h2 class="section__h2">Facebook</h2>
                    <p>
                        <a href="https://www.facebook.com/profile.php?id=100072067791537"> Facebook</a>
                        <span class="hide">duongf5vcu@gmail.com</span>
                        
                    </p>
                    <h2 class="section__h2">Twitter</h2>
                    <p>
                       <a href="https://twitter.com/xyzabc__xyz"> Twitter</a>
                        
                    </p>
                    <h2 class="section__h2">Gmail</h2>
                    <p>
                        <b>xyzabc.vietnam@gmail.com</b> 

                        
                    </p>
                    
                    
                    <input type="text">
        </section>  



        <!-- <h1>Cảm ơn bạn đã ghé thăm</h1>
            <h2> Bạn kết nối với mình qua Facebook nếu có thời gian mình sẵn sàng giải đáp mọi thắc mắc của bạn</h2>
            <a href="https://www.facebook.com/profile.php?id=100072067791537">
                https://www.facebook.com/profile.php?id=100072067791537
            </a>
            <h2>Twitter</h2>
            <a href="https://twitter.com/xyzabc__xyz">
            https://twitter.com/xyzabc__xyz
            </a>
            <h2>Gmail</h2>
            <b>xyzabc.vietnam@gmail.com</b>
       
       <h3>Mình luôn sẵn sàng</h3> -->
    
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/detail.css">
@endsection