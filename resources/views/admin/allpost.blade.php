<h1>day la phan them ra {{$heading}}</h1>


@foreach($posts as $post)
    <div>
       <h3> {{$post -> title}}
        <a href="/baiviet/{{$post -> id}}/edit" target="_blank">Edit</a>
       
       </h3>
        
    </div>
@endforeach