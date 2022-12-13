<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/assets/css/style.css">
        <title>Advaced Live Design</title>
    </head>
    <body>
        @include('partials.menu')
            <div id="portada">
                <div><img id="logoPortada" src="/assets/img/logo.png" alt=""></div>
            </div>
            @yield('content')
    </body>
    <footer>
        <div class="columna center">
          <h4><a href="{{ url('/') }}">Home</a></h4>
          <h4><a href="{{ url('/servicios') }}">Servicios</a></h4>
          <h4><a href="#">Clientes</a></h4>
          <h4><a href="#">Contacto</a></h4>
        </div>
        <div class="columna center">
          <p>¡Hola! Hacemos una reunion inicial?</p>
          <ul>
            <li><b>Escribenos un email aqui</b></li>
            <li>Atencion al Cliente: (+34)999-999-999</li>
          </ul>
        </div>
        <div class="columna center">
          <img class="logo" src="/assets/img/logo.png" alt="">
        </div>
        <div class="columna">
          <p><b>Aviso Legal y Políticos</b></p>
          <ul>
            <li>Aviso Legal</li>
            <li>Política de Privacidad</li>
            <li>Política de Cookies</li>
          </ul>
        </div>
        <div class="columna center">
          <h4>Redes Sociales</h4>

          <a href="#"><img class="social-media" src="/assets/img/facebook.svg" alt=""></a>
          <a href="#"><img class="social-media" src="/assets/img/instagram.svg" alt=""></a>
          <a href="#"><img class="social-media" src="/assets/img/twitter.svg" alt=""></a>
          <a href="#"><img class="social-media" src="/assets/img/linkedin.svg" alt=""></a>
        </div>
      </footer>
</html>

