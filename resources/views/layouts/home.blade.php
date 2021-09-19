<!DOCTYPE html>
<html lang="vi" >
<head>
       
    <title>{{$title}}</title>
    <link rel="shortcut icon"  href="img/favicon.png">
    <link rel="icon" type="image/gif" href="img/favicon.png">

    <meta content="index, follow" name="robots">
    <meta name='dmca-site-verification' content='Rzc1dkFQZnhCQlRsV0RLN1dwNzFOUT090' />
    <meta content="text/html ; charset=UTF-8" http-equiv="Content-Type">
    <meta name="description" content="{{$description}}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700;900&display=swap" rel="stylesheet">              
    

    <meta property="og:description" content="Lập trình website, blog cơ bản nhất cho người mới bắt đầu,chi tiết từ Z đến A">
    <meta property="og:url" content="https://xyzabc.xyz/">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://xyzabc.xyz/img/roadmap.png">
    <meta property="og:image:width" content="250">
    <meta property="og:image:height" content="250">
    <meta property="og:image:type" content="image/jpeg">
    
    <link rel="stylesheet" href="css/main.css" > 
    

       
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LTTFH1JP73');
    </script>
    @yield('css')
    
    <meta property=”fb:app_id” content=”4314618238628568” />
    
    <meta property=”fb:admins” content=”100071669782551”/>
    
</head>
<body>
        
    @include('includes.header')  
        <div class="banner">
            <a href="/" class="banner_link">
                <h1 class="banner__heading">
                    Blog Của 1 Người Tay Ngang 
                <span class="banner__heading-description">
                    Là nơi tôi chia sẻ mọi thứ tôi biết để làm nên blog này
                </span>          
            </h1>
            </a>
        </div>


        @yield('content')

    @include('includes.footer')
    <script src="js/main.js"></script>
    
</body>
</html>

