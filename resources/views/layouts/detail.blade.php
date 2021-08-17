<!DOCTYPE html>
<html lang="vi" >
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

    <meta property="og:description" content="{{$description}}">
    <meta property="og:type" content="Article">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:url" content="https://xyzabc.xyz/{{$url}}">
    <meta property="og:image" content="https://xyzabc.xyz/img/{{$src}}.png">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <meta property="og:image:type" content="image/jpeg">
    <!-- Ads -->
    <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5420031609625386"
     crossorigin="anonymous"></script> -->
    <!-- end ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LTTFH1JP73"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LTTFH1JP73');
    </script>
    <link rel="stylesheet" href="css/main.css" > 
    @yield('css')
    
    
</head>
<body>
    @include('includes.header')        
        @yield('content')
    @include('includes.footer')
    <script src="js/main.js"></script>
    
</body>
</html>

