<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
    <title>Bienvenido a Mago Car</title>
    <link rel="stylesheet" href="{{ asset('/sources/css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('/sources/css/video.css') }}">
</head>

<body>
    <div class="container" id="container">
        <video src="sources/video/intro2.mp4" autoplay muted></video>
        <!-- <video src="sources/video/solo_logo_blanco.mp4" autoplay id="video" muted ></video> -->
        <!-- <video src="sources/video/solo_logo_negro.mp4" autoplay id="video" muted ></video> -->
        <div class="preloader">
            <p>
                Cargando
            </p>
        </div>
    </div>
    <div class="principal_baner">
        <img src="sources/img/Envios-Ecuador.png" alt="Envios a nivel nacional">
        <p>
            <span class="f1">Distribución a</span>
            <span class="f2">nivel nacional</span>
        </p>
            
        <a href="{{route('lineas')}}">
            Catalogo de Productos
        </a>
        <div class="logo">
            <img src="sources/img/logo.svg" alt="">
        </div>
    </div>
    <script src="sources/js/cerrar_video.js"></script>
</body>

</html>
