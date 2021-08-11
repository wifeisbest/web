<h1>Edit form</h1>

<form action="{{route('baiviet.update',$post->id)}}" method = "POST">
    
    @csrf
    @method('PATCH')
    <div>
        <label for="title">Title</label>
        <input type="text" name= "title" value="{{ $post -> title }}">
    </div>
    <div>
        <label for="description">description</label>
        <textarea name="description" id="" cols="20" rows="10">{{$post -> description}}</textarea>
    </div>
    <div>
        <label for="src">Src</label>
        <input type="text" name= "src" value="{{$post -> src}}">
    </div>
    <div>
        <label for="cate">Cate</label>
        <input type="text" name= "cate" value="{{ $post ->cate}}">
    </div>
    <button type = "submit">Post</button>
</form>