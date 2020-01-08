<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
{{-- style="background-image:url('img/bg.jpg');" --}}
<body >
  <header >
  <!-- Barra de navegacion -->
  <nav class="navbar sticky-top navbar-expand-lg bg-dark">
      <a class="navbar-brand ml-5" href="#" style="font-size:xx-large;">ProWeb</a>
      <form action="">
        <input type="text" placeholder="buscar ..." class="" style="margin-left:25%;width:300px;border-radius: .4rem;">
      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/inicio" style="font-size:large;">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/miPerfil" style="font-size:large;">Mi perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/config" style="font-size:large;">Configuración</a>
          </li>
          <li class="nav-item">
            <a class="nav-link itm-nav" href="/logout" style="font-size:large;">Logout</a>
          </li>
        </ul>
      </div>
  </nav>
</header>
  <main>
    @yield("main")
  </main>
  <footer class="py-2 bg-dark" >
    <div class="row col-12" style="justify-content:center;">
      <a class="m-2" href="#">
      <img src="/img/facebook.svg" width="25px"></a>
      <a class="m-2" href="#">
      <img src="img/insta-ico.svg" width="25px"></a>
      <a class="m-2" href="#">
      <img src="/img/twitt-ico.svg" width="25px"></a>
    </div>
    <div class="row col-12"  style="justify-content:center;">
      <p class="m-0 text-center text-white">¡ INVITA A TUS CONTACTOS !</p>
    </div>
</footer>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>