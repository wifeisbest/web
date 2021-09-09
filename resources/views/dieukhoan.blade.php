@extends('layouts.detail')


@section('content')
    <div class="bd-grid">
        <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Điều Khoản sử dụng</h1>
                <div class="pots__body" itemprop="articleBody">
                
                    <p>
                        Để đảm bảo duy trì hoạt động của blog mình xin mạn phép có 1 vài quy tắc nhỏ sau đây, rất mong các bạn ủng hộ.
                    </p>
                    
                    <h2 class="section__h2">Nội dung và trách nhiệm pháp lý</h2>
                    <p>
                        Tất cả các bài viết mình viết đều do chính mình tạo ra  vì vậy mình sẽ chịu toàn bộ trách nhiệm về các vấn đề pháp lý liên quan đến blog này
                        
                    </p>
                    
                    <p>
                       Nội dung các bài viết liên quan đến việc lập trình và công nghệ CNTT và đã được bảo hộ bởi <b>DMCA</b>. Tất cả các bài viết 
                       đều miễn phí.
                        
                    </p>
                    <h2 class="section__h2">Không copy bài</h2>
                    <p>
                       Các bài viết được mình biên soạn và viết hoàn toàn bằng sức lực cá nhân, vì thế nên việc copy mà không có lời nói với mình là 1 việc rất tệ hại ,
                       1 bài viết trông rất đơn giản nhưng thật sự nó mất rất nhiều thời gian.
                       Hình ảnh trên trang đa số là mình tự vẽ, còn lại mình cũng có lấy ở 1 số nguồn miễn phí, nếu bạn thấy ảnh nào vi phạm bản 
                       quyền hãy liên hệ cho mình nhé.

                        
                    </p>
                    
                    
                    <input type="text">
        </section>  
    
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/detail.css">
@endsection