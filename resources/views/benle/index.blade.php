@extends('layouts.home')

@section('content')

<div class="bd-grid">
    <h4>Blog được thiết kế theo mẫu <a href="https://laptrinhcuocsong.com/">laptrinhcuocsong.com</a> </h4>

    @foreach($posts as $post)
    
    <section>    
        
        <article class="section__article" itemscope itemtype="http://schema.org/Article">
                <a itemprop="url" href="/{{$post -> title}}" title="{{$post -> title}}" >
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
</div>
@endsection

@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
@endsection