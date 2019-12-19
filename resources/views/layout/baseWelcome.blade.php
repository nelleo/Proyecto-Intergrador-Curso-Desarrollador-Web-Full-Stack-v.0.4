<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <header>
   <!-- Barra de navegacion -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">ProWeb</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="FAQS.html">FAQS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>
  <main>
    @yield("main")
  </main>
  <footer class="py-5 bg-dark">
    <div class="footer">
    <ul class="redes">
      <li class="nav-item" type="none">
        <a class="nav-link"href="#"></a>
        <img src="resources\img\facebook.svg"width="25px"></a>
          </li>
        <li class="nav-item" type="none">
          <a class="nav-link" href="#"></a>
          <img src="resources\img\insta-ico.svg"width="25px"></a>
          </li>
        <li class="nav-item" type="none">
          <a class="nav-link" href="#"></a>
          <img src="resources\img\tick.png"width="25px"></a>
          </li>
      </ul>
      <p class="m-0 text-center text-white">Copyright &copy; ProWeb 2019</p>
    </div>
  </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>