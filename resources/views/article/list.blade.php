<h1>Danh sach bai viet</h1>
<h2>day la phan them ra {{$description}}</h2>

@foreach($articles as $article)
    <div>
        {{$article -> title}}
    </div>
@endforeach