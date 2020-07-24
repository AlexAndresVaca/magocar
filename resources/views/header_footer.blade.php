<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Bienvenido a Mago Car</title>
    <link rel="stylesheet" href="{{ asset('/sources/css/header_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/sources/css/catalogo.css') }}">
    <link rel="stylesheet" href="{{ asset('/sources/css/lista_productos.css') }}">
    <link rel="stylesheet" href="{{ asset('/sources/css/quienes_somos.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>

    <nav>
        <div class="img">
            <a href="{{route('index')}}">
                <img src="sources/img/logo_ico.svg" alt="">
            </a>
        </div>
        <div class="title">
            <h3>@yield('nombre_pagina')</h3>
        </div>
        <div class="menu">
            <input type="checkbox" id="menu">
            <label for="menu">
                <i class="fa fa-list" aria-hidden="true"></i>
            </label>
            <ul>
                <li class="home"><a href="{{route('index')}}">Home</a></li>
                <li><a class="" href="{{route('producto')}}">Productos</a></li>
                <li><a href="{{route('quienes_somos')}}">Quienes Somos?</a></li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('cuerpo')
    </main>



    <footer id="footer">
        <div class="logo_footer">
            <img src="sources/img/logo.svg" alt="logo">
            <p>
                Mago Car es una empresa reconocida a nivel nacional.
            </p>
        </div>
        <div class="contact">
            <span class="title_footer">Contactanos</span>
            <ul>
                <li>
                    <span class="subtitle">Ubicación:</span>
                    <a href="https://goo.gl/maps/dMyPzsrcx4xbankm8" target="_blank">Av. Simón Rodriguez.</a>

                </li>
                <li>
                    <span class="subtitle">Contacto: </span>
                    <p>(022) 364 435</p>
                </li>
                <li>
                    <span class="subtitle">E-mail: </span>
                    <p>mago_car@gmail.com</p>
                </li>
            </ul>
        </div>
        <div class="follow">
            <span class="title_footer">Siguenos en nuestras redes sociales:</span>
            <ul>
                <li>
                    <a href="https:\\www.facebook.com" target="_blanck">
                        <img src="sources/img/facebook.svg" alt="ico_fb">
                    </a>
                </li>
                <li>
                    <a href="https:\\www.instagram.com" target="_blanck">
                        <img src="sources/img/instagram-sketched.svg" alt="ico_insta">
                    </a>
                </li>
                <li>
                    <a href="https:\\www.whatsapp.com" target="_blanck">
                        <img src="sources/img/whatsapp.svg" alt="ico_wsp">
                    </a>
                </li>
                <li>
                    <a href="https:\\www.youtube.com" target="_blanck">
                        <img src="sources/img/youtube.svg" alt="ico_yt">
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- <script src="sources/js/cerrar_video.js"></script> -->
</body>

</html>