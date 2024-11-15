<!doctype html>
<html lang="es">

<head>
  <title>Renta - hogar</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.3.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('asset/css/estilo.css') }}">
</head>

<body>
  <!-- Main Navigation -->
  <header>
    <nav class="navbar" id="navbar">
      <ul class="navbar-list">
        <div class="logo"><img src="{{ asset('asset/img/logo-renta_hogar.png') }}" alt="Logo"></div>
        <li><a href="{{ route('welcome') }}">Inicio</a></li>

        <!-- Menú desplegable para Servicios -->
        <li class="dropdown">
          <a href="{{ route('servicio') }}">Servicios</a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('servicio') }}">Desarrollo Web</a></li>
            <li><a href="{{ route('servicio') }}">Marketing Digital</a></li>
            <li><a href="{{ route('servicio') }}">Consultoría</a></li>
          </ul>
        </li>

        <!-- Menú desplegable para Proyectos -->
        <li class="dropdown">
          <a href="{{ route('proyecto') }}">Proyectos</a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('proyecto_venta') }}">Proyectos en Venta</a></li>
            <li><a href="{{ route('proyecto_invertir') }}">Proyectos para Invertir</a></li>
          </ul>
        </li>

        <li><a href="#">Contacto</a></li>
      </ul>
      <div class="navbar-login">
        <a href="{{ route('login') }}">
          <button class="login-btn">Iniciar sesión</button>
        </a>
      </div>

      <!-- Botón para abrir el menú hamburguesa (en móviles) -->
      <div class="menu-toggle" id="menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>

  <!-- Carousel -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('asset/img/apartamento1.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('asset/img/apartamento2.jpg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('asset/img/apartamento3.jpg') }}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only"></span>
    </a>
  </div>
  <br>

  <div class="section-header d-flex flex-wrap align-items-center justify-content-center">
    <h2 class="section-title">
      Proyecto De Inversion
    </h2>
  </div>
  <br>

  <div class="container1">
    <div class="service-cards">
      <div class="card">
        <img src="{{ asset('asset/img/card1.jpeg') }}" alt="First slide">
        <div class="card-body">
          <h5 class="card-title">RESERVA DEL CITARÁ</h5>
          <p class="card-text">
            Ventas<br>
            Desde $380 Millones COP<br>
            Tipo: 28 Casas en lotes independientes<br>
            20 Casas adosadas<br>
            Niveles: 1, 2 Niveles<br>
            Proyecto: Nuevo
          </p>
        </div>
      </div>

      <div class="card">
        <img src="{{ asset('asset/img/card2.jpeg') }}" alt="Second slide">
        <div class="card-body">
          <h5 class="card-title">CITADELA</h5>
          <p class="card-text">
            Próximamente preventas<br>
            Desde $180 MILLONES COP<br>
            Tipo: 20 Casas<br>
            Niveles: 2<br>
            Proyecto: Nuevo
          </p>
        </div>
      </div>

      <div class="card">
        <img src="{{ asset('asset/img/card3.jpeg') }}" alt="Third slide">
        <div class="card-body">
          <h5 class="card-title">MIRADOR DEL CITARÁ</h5>
          <p class="card-text">
            Próximamente preventas<br>
            Desde $120 Millones COP<br>
            Tipo: Apartamento<br>
            Niveles apto: 1<br>
            Niveles torre: 5<br>
            Proyecto: Nuevo
          </p>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <div class="section-header d-flex flex-wrap align-items-center justify-content-center">
    <h2 class="section-title">
      Con Nuestro Sitio Te Ofrecemos
    </h2>
  </div>
  <br>

  <div class="container">
    <div class="item">
      <img src="{{ asset('asset/img/lupa.png') }}" alt="Lupa">
      <br>
      <p>Información para conocer mejor el sector.</p>
    </div>
    <div class="item">
      <img src="{{ asset('asset/img/edi.png') }}" alt="Edificio">
      <br>
      <p>Una oferta amplia de servicios, productos y proyectos del sector construcción e inmobiliario.</p>
    </div>
    <div class="item">
      <img src="{{ asset('asset/img/mensaje.png') }}" alt="mensaje">
      <br>
      <br>
      <p>Acompañamiento en todo el proceso de inversión o compra.</p>
    </div>
    <div class="item">
      <img src="{{ asset('asset/img/servicio.png') }}" alt="reportes">
      <br>
      <br>
      <p>Reportes de tu inversión o compra en tiempo real.</p>
    </div>
  </div>


  <!-- Contenedor de estadísticas -->
  <div class="stats-container">
    <div class="stat-item">
      <div class="stat-number">500+</div>
      <div class="stat-text">Proyectos Exitosos</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">1720</div>
      <div class="stat-text">Clientes Felices</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">3</div>
      <div class="stat-text">Años de Experiencia</div>
    </div>
    <div class="stat-item">
      <div class="stat-number">600+</div>
      <div class="stat-text">Zonas Abarcadas</div>
    </div>
  </div>

  <br>

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


  <!-- Scripts -->
  <script src="{{ asset('asset/js/script.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>