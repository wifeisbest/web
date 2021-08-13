<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found</title>
    <style>
        body{
            background-color: #00b5fe;
        }
        .page__404{
            text-align: center;
            margin-top: 5rem;
        }
        img{
            width: 750px;  
        }
        .page__404 h1{
            font-size: 3rem;

        }
        .page__404 p{
            font-size: 1.5rem;

        }
        a{
            text-decoration: none;
            color:red;
            padding: 8px 0;
        }
        .span{
            font-size: 1.5rem;

        }
        .danger{
            color: red;

        }
        @media screen and (max-width : 768px){
            .page__404{
                margin-top: 1rem;
            }
            img{
                width: 383px;
            }
            .page__404 h1{
                font-size: 2rem;
            }
            .danger{
                font-size: 20px;
            }
            a{
                text-decoration: underline;
            }
        }
    
</style>
</head>
<body>
    <div class="page__404">
            <div class="text">
                <h1>Ố .... ồ hình như đã có lỗi xảy ra  ! </h1>
                <h1 class="danger">Trang bạn tìm hiện không có </h1>
                <p> Không sao cả <a href="/">Bấm vào đây trở về trang chủ </a> <div class="span">và tiếp tục khám phá nhé người bạn</div></p>
            </div>
            <img src="img/404.gif" alt="404 not found" srcset="">
    </div>
</body>
</html>



