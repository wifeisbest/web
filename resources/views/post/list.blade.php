<h1>Danh sach bai viet</h1> <a href="/">Home page</a>
<h2>day la phan them ra {{$description}}</h2>


@foreach($posts as $post)
    <div>
        {{$post -> title}}
        {{$post -> description}}
        {{$post -> src}}
        {{$post -> cate}}
    </div>
@endforeach