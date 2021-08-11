@extends('templates.tpl_defaul')

@section('content')

<div class="layout">
    <h1>This is homepage</h1>
    @foreach($posts as $post)
    <div>
        {{$post -> title}}
        {{$post -> description}}
        {{$post -> src}}
        {{$post -> cate}}
    </div>
    
@endforeach
</div>
@endsection

@section('css')
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/home.css">
@endsection