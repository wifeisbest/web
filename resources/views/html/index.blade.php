@extends('layouts.detail')

@section('content')

<div class="bd-grid">
    <h4>Bạn có thể xem <a href="#list">chi tiết danh sách tại đây</a> </h4>

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
        <a href="/website-la-gi">Website là gì ?</a>
        <a href="/html-la-gi">HTML là gì ?</a>
        <a href="/hoat-dong-cua-cac-the-trong-tai-lieu-html">Hoạt động của các thẻ trong tài liệu HTMl</a>
        <a href="/the-html-co-ban-nhat">Thẻ Html cơ bản nhất</a>
        <a href="/thuoc-tinh-trong-the-html" title="Thuộc tính "> Thuộc tính thẻ HTML</a>
        <a href="/bo-cuc-website-nhu-the-nao" title="bố cục website như thế nào ? "> Bố cục website như thế nào ?</a>
         -->
        
    
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
@endsection