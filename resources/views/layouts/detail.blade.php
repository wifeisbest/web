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
    
    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId      : '4314618238628568',
            cookie     : true,
            xfbml      : true,
            version    : 'v12.0'
            });
            
            FB.AppEvents.logPageView();   
            
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=4314618238628568&autoLogAppEvents=1" nonce="u20ioB1s"></script>
    <meta property=”fb:app_id” content=”4314618238628568” />
    
    <meta property=”fb:admins” content=”100071669782551”/>
</head>
<body>
   
    @include('includes.header')        
        @yield('content')
    @include('includes.footer')
    <script src="js/main.js"></script>
    
</body>
</html>

