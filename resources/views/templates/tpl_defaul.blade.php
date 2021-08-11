<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$title}}</title>
    <link rel="shortcut icon"  href="img/favicon.png">
    <link rel="icon" type="image/gif" href="img/favicon.png">

    <meta content="index, follow" name="robots">

    <meta content="text/html ; charset=UTF-8" http-equiv="Content-Type">
    <meta name="description" content="{{$description}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700;900&display=swap" rel="stylesheet">              
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta property="og:description" content="Lập trình website, blog cơ bản nhất cho người mới bắt đầu,chi tiết từ Z đến A">
    <meta property="og:type" content="Article">
    <meta property="og:title" content="">
    
    <link rel="stylesheet" href="css/main.css" > 
    @yield('css')
    
    
</head>
<body>
    @include('includes.header')
    <div>
        
        @yield('content')
    </div>
    @include('includes.footer')
    <script src="js/main.js"></script>
    
</body>
</html>

