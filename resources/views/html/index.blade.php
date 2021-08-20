@extends('layouts.detail')

@section('content')

<div class="bd-grid">
    <h4>Bạn có thể xem <a href="#list">chi tiết danh sách Tại Đây</a> </h4>

    @foreach($posts as $post)
    
        <section>    
            
            <article class="section__article" itemscope itemtype="http://schema.org/Article">
                    <a itemprop="url" href="/{{$post -> slug}}" title="{{$post -> title}}" >
                        <h1 class="section__title" itemprop="name"> {{$post -> title}} </h1>
                        <div class="section__wrap" itemprop="description">                                                                                                                     
                            <p class="section__description"> 
                                <img itemprop="image" title="{{$post -> title}}" src="img/{{$post -> src}}.png" class="section__img" alt="{{$post -> title}}">{{$post -> description}}
                            </p>                   
                        </div>                                
                    </a>
                </article>       
        </section>  
    
    @endforeach
    <div id="list">
            <h3>Danh sách bài viết</h3>
        <a href="/muc-dinh-ma-minh-tao-ra-blog-nay-la-gi">Mục đính mình tao ra blog này là gì</a>
        <!-- <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website">Lộ trình cơ bản nhất</a>
        <a href="/cach-thuc-mang-luoi-internet-hoat-dong">Cách thức mạng lưới internet hoạt động</a>
        <a href="/giao-thuc-tcp-ip-http-va-https">Giao thức TCP/Ip http và https</a>
        <a href="/mo-hinh-client-sever">Mô hình client sever</a> -->
        <!-- <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website">1. Lộ trình học viết mã</a>
        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website">1. Lộ trình học viết mã</a>
        <a href="/lo-trinh-hoc-viet-ma-xay-dung-blog-website">1. Lộ trình học viết mã</a> -->
    
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
@endsection