<h1>Create Post</h1>

<form action="{{route('baiviet.store')}}" method = "POST">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name= "title">
    </div>
    <div>
        <label for="title">description</label>
        <textarea name="description" id="" cols="20" rows="10"></textarea>
    </div>
    <div>
        <label for="title">Src</label>
        <input type="text" name= "src">
    </div>
    <div>
        <label for="title">cate</label>
        <input type="text" name= "cate">
    </div>
    <button type = "submit">Post</button>
</form> 