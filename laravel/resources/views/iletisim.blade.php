<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iletisim</title>
    <style>
        *{
            margin : 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
            scroll-behavior: smooth;
        }
        body
        {
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .container{
            display: flex;
            margin-top: 16px;
        }
        .py-3{
            top: 0;
            left: 0;
            height: 11%;
            width: 100%;
            padding: 5px 120px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
            transition: 0.6s;
            background:white;
            margin-bottom: 20px;
        }
        h1{
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin-top: -200px;
            margin-left: 200px;
            font-size: 400%;
        }
        .baslik {
            color: black;
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 700;
            margin-right: 1rem;
            font-size: 1.25rem;
            margin-left: 80px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .py-3 ul
        {
            display: flex;
            margin-top: 10px;
            margin-left: 620px;
            justify-content: center;
            align-items: center;
        }
        .py-3 ul li{
            list-style: none;
            margin-left: 30px;
        }
        .py-3 ul li a{
            color: black;
            font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-weight: 700;
            font-size: 0.85rem;
            padding: 0.75rem 0;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.5s;
            text-transform: uppercase;
        }
        .resim{
            width: 100%;
            height: 250px;
            z-index: 9;
        }
        .kart{
            margin-left: 400px;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 10;
        }
        footer{
            margin-top: 290px;
            height: 80px;
            background-color:#f9f7f7 ;
        }
        footer div{
            margin-top: 50px;
            margin-left: 330px;
        }



    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger baslik" href="\">REHBERİM</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="\">Hakkımızda</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="\">Hizmetler</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="\">Galeri</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="iletisim">İletişim</a></li>
            </ul>
        </div>
    </div>
</nav>

<form action="{{route('iletisim-sonuc')}}" method="post">
    @csrf
    <div class="resim">
        <img src="https://www.loborezidans.com/wp-content/uploads/2021/04/image-6.jpg" alt="">
    </div>
    <div class="kart">
        <h1>İLETİŞİM</h1><br><br><br><br><br><br>
        <label for="">Ad Soyad</label><br>
        <input type="text" name="adsoyad"><br>
        <label for="">Telefon</label><br>
        <input type="text" name="telefon"><br>
        <label for="">E-Mail</label><br>
        <input type="text" name="mail"><br>
        <label for="">Mesaj</label><br>
        <textarea name="metin" style="width: 300px; height: 200px;"></textarea><br>
        <input type="submit" name="ilet" value="Gönder">
    </div>
</form>

<footer class="bg-light py-5">
    <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Sidar Polat</div></div>
</footer>

</body>
</html>
