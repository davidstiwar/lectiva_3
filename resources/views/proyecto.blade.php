<!doctype html>
<html lang="es">

<head>
  <title>Proyectos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="{{ asset('asset/css/estilo.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <header>
    <nav class="navbar" id="navbar">
      <ul class="navbar-list">
        <div class="logo"><img src="{{ asset('asset/img/logo-renta_hogar.png') }}" alt="logo"></div>
        <li><a href="{{ route('welcome') }}">Inicio</a></li>
        <li><a href="{{ route('servicio') }}">Servicios</a></li>
        <li><a href="{{ route('proyecto') }}">Proyectos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>

      <div class="navbar-login">
        <a href="{{ route('login') }}">
          <button class="login-btn">Iniciar sesión</button>
        </a>
      </div>
    </nav>
  </header>
  <main>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('asset/img/carrusel.png') }}" class="d-block w-100" alt="pareja">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="slider_h2">Tenemos los mejores proyectos para ti</h2>
            <h2 class="slide_h2">DE LA FANTACIA A LA REALIDAD</h2>
          </div>
        </div>
      </div>
    </div>
  </main>

  <br>
  <br>
  <br>
  <br>


  <div class="container_p">
    <h1>Proyectos</h1>
  </div>

  <!-- Lista de proyectos -->
  <div class="projects-list">
    <ul>
      <li>
        <div><a href="{{ route('proyecto_venta') }}">Proyectos en Venta</a></div>
      </li>
      <li>
        <div><a href="{{ route('proyecto_invertir') }}">Proyectos para Invertir</a></div>
      </li>
    </ul>
  </div>


  <div class="content-wrapper">
    <div class="text-content">
      <h2>Estamos orgullosos del alcance que hemos logrado a través de los años junto a nuestro altamente capacitado equipo de trabajo. Hasta el día de hoy contamos con presencia en diferentes regiones del país con variados proyectos de diferentes clases, desde edificios de vivienda multifamiliar hasta construcciones empresariales.</h2>
    </div>
    <div class="image-content">
      <img src="{{ asset('asset/img/mapa.png') }}" alt="mapa">
    </div>

  </div>


  <footer id="footer">
    <div class="container">
      <div class="footer-menu-list">
        <div class="row d-flex flex-wrap justify-content-center"> <!-- Usamos justify-content-center para centrar -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">D-S Propiedades</h5>
              <p>_______________________</p>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="about.php">Acerca de nosotros</a>
                </li>
                <li class="menu-item">
                  <a href="#">Condiciones </a>
                </li>
                <li class="menu-item">
                  <a href="blog.php">Nuestras experiencia</a>
                </li>
                <li class="menu-item">
                  <a href="#">Carrera</a>
                </li>
                <li class="menu-item">
                  <a href="#">Programas afiliados</a>
                </li>
                <li class="menu-item">
                  <a href="#">D-S Press</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Servicios a clientes</h5>
              <p>__________________________</p>
              <ul class="menu-list list-unstyled">
                <li class="menu-item">
                  <a href="faqs.html">FAQ</a>
                </li>
                <li class="menu-item">
                  <a href="contact.php">Contacto</a>
                </li>
                <li class="menu-item">
                  <a href="#">Politica privada</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <h5 class="widget-title">Contamos</h5>
              <p>__________________________</p>
              <p>Quibdó – Chocó/Colombia
                <a href="#" class="email">stiwarcordoba4@gmail.com</a>
                <strong>Cell: +57 323 444 11 00 35</strong>
              </p>
              <p>creado por: <a href="https://www.facebook.com/stiwar.villa.31">David comiunity</a></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-menu">
              <div class="colored-image">
                <img src="{{ asset('asset/img/logo-renta_hogar.png') }}" alt="logo" class="img-fluid white-image">
              </div>
              <div class="social-icons">
                <a href="https://www.instagram.com/stiwar_cordoba25/?hl=es-es">
                  <img src="{{ asset('asset/img/icono_instagram.png') }}" alt="instagram" class="img-fluid white-image">
                </a>
                <a href="https://www.youtube.com/@stiwarmarmolejo4819">
                  <img src="{{ asset('asset/img/icono_youtube.png') }}" alt="youtube" class="img-fluid white-image">
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <hr>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
  <script src="{{ asset('asset/js/script.js') }}" type="module"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>