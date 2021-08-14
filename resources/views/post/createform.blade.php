<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
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
    <h1>Create Post</h1>
        <h1><a href="/">Home page</a></h1>
    <form action="{{route('baiviet.store')}}" method = "POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name= "title" id="title">
        </div>
        <div>
            <label for="title">description</label>
            <textarea name="description" id="" cols="60" rows="10"></textarea>
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
</body>
</html>

