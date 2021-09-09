@extends('layouts.detail')


@section('content')
    <div class="bd-grid">
    <section class="detail">
            <article itemscope itemtype="http://schema.org/Article">
                <h1 class="section__title detail__h1" itemprop="name"> Giới Thiệu</h1>
                <div class="pots__body" itemprop="articleBody">
                <h2 class="section__h2">Cảm ơn bạn </h2>
                    <p>
                        Nếu như bạn đã truy cập trang này mình chân thành cảm ơn bạn. Mình là <strong>Nguyễn Văn Dương </strong> mình không phải 
                        là người được học hành đào tạo bài bản về CNTT, tất cả mình biết được đều là kiến thức mình gom nhặt trên internet. Mình đến 
                        với CNTT với 1 niềm yêu thích từ lâu, với mong muốn bao lâu mình cũng đã làm được ra blog này.
                    </p>
                    
                    <h2 class="section__h2">Mục đính </h2>
                    <p>
                        Mình làm ra blog này với mong muốn là được giãi bày , được chia sẻ những thứ mình biết để làm nên blog này, với tất cả 
                        những thứ mình tìm hiểu được, mong muốn được giúp đỡ những bạn có cùng sở thích, giúp bạn được 1 chút gì đó là mình rất vui rồi.
                        
                    </p>
                    <h2 class="section__h2">Blog này giống laptrinhcuocsong quá</h2>
                    <p>
                        Đúng vậy !. Mình làm rất giống laptrinhcuocsong nhưng mình không phải mẫu người thích copy sao chép. Mình rất thích 
                        sự đơn giản của laptrinhcuocsong và trước khi làm mình đã <strong>Xin Phép </strong> và được sự đồng ý mình mới làm.
                        
                    </p>
                    <h2 class="section__h2">Bài viết ngắn</h2>
                    <p>
                       Các bài viết của mình là trải nghiệm cá nhân , đứng trên cương vị người mới tinh bắt đầu tìm hiểu viết mã nên các bài viết 
                       của mình khá ngắn và đơn giản. Mình hi vọng là bạn thấy vui khi đọc các bài viết của mình.
                        
                    </p>
                    <h2 class="section__h2"> 1 lần nữa cảm ơn bạn</h2>
                    
                    <input type="text">
        </section>  
    
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/detail.css">
@endsection