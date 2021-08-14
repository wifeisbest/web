<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        #title{
            width: 500px;
        }
        h1,form{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Edit form</h1>
    <form action="{{route('baiviet.update',$post->id)}}" method = "POST">
        
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Title</label>
            <input type="text" name= "title" id="title" value="{{ $post -> title }}">
        </div>
        <div>
            <label for="description">description</label>
            <textarea name="description" id="" cols="60" rows="10">{{$post -> description}}</textarea>
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
</body>
</html>



