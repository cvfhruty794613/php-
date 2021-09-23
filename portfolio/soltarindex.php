<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Rehabilitacion</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
  <link rel="stylesheet" href="css/soltarestilos.css">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <header>
    
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container-fluid">
        <li class="nav-item me-4">
          <a href="sobre-mi.php">
          <img src="images/logo.png" class="logosoltar"> 
          </a>
        </li>    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" ms-2 id="navbarCollapse">

          <ul class="navbar-nav me-auto mb-2 mb-md-2">
            <li class="nav-item me-4" >
              <a class="nav-link "  aria-current="page" href="servicios.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="urgencias.php">Urgencias</a>
            </li>
          </ul>

          <form class="d-flex">
            <!-- ancla a la api google maps-->
            <input class="form-control me-2" type="search" placeholder="Udaondo 4055, BsAs" aria-label="Search">
            <a href="#comoir"><img src="images/comoiracentrosoltar.png" class="comoiracentrosoltar"></a>
          </form>
        </div>
      </div>
    </nav>
 
  </header>

  <main>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">

        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="images/5.jpg" class="logosoltar">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption text-start">
              <h2>Cómo dejar de consumir drogas?</h2>
              <p>En SOLTAR sostenemos que la recuperación de la familia debe ser paralela a la recuperación del adicto.</p>
              <p><a class="btn btn-lg btn-primary" href="aprende.html">Aprendé más </a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/5.jpg" class="logosoltar">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption">
              <h1>Internación para adictos</h1>
              <p> Los pacientes trabajan con el plan la mayor parte del día acortando de este modo los periodos de
                internación.</p>
              <p><a class="btn btn-lg btn-primary" href="plan.php">Conocé el plan</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/5.jpg" class="logosoltar">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          </svg>

          <div class="container">
            <div class="carousel-caption text-end">
              <h2>Contención familiar </h2>
              <p>Brindamos reuniones semanales a familiares, parejas y amigos.</p>
              <p><a class="btn btn-lg btn-primary" href="controla.php">Controla situaciones</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing">

      <!-- redes sociales -->
      <div class="row">

        <div class="col-lg-4">

          <img src="images/facebooklogosoltar.png" class="redeslogosoltar">

          <h2><span class="text-muted"> Soltar </span>Comparte</h2>
          <p>Conocé las familias que quisieron compartir su valoración positiva sobre nuestro acompañamiento.</p>
          <p><a class="btn btn-primary" href="https://www.facebook.com/FundaSoltar/?hc_ref=ARQibkQGhdyBEQrmFnjMwe3lY0yDXHjd6djRYwKyZHOv5OYDS6oVc1S4l6McUO_Z69k&fref=nf&__xts__[0]=68.ARBMbbL989ycCTF8kuiBo5hOUSa2-4j9JPKt18C2aSLZOY3-w7Q-VCd0vC_QLdpAsxKgb6ucsUvy_p9wyVxhHkGt89RKsM2vFxVJXLl7v3bxQTljg13XkW2QCmIJqW4Tcxid4JFT6Kyf4YT3kf5SHilkT7zpfdCGiWNDtI_EvaJrzUKQ1tgIkcVz_Qdetw_FILLx-sqtZocFAnI7TqiYmIR-fCaZpjvHlMCKxYheRTwslu1d0qKeVoxw-uK9SJk3R_kv2KIeA1TcOVGOK8bi8So2IF8L-ukKy_0hZmOWXBI0a6jk9O0Mig&__xts__[1]=68.ARDZSPtKImLmPq26XFV6W7gJIBedX7aGlVBwGinB_JGGdqPpwd86fj9A4I1z850oNZg3qc2p7tyzbNFiWzGzpJp_U94Q_w8ww82KkOY6vcErgO7_n3b6LFr4BysWdDKLeZAloz06OW54VYgm7WaRpqbaiVFsz68Ro_8M-U27Nkh9Udv4RyGpv1ibceLr53ykmYSg5ombiQW1onK6g0FI9q2cquoVGjMiYg9WjDRtq_X4EjF2A-OYfeoM9muW1qd_Wf0hv_0OIFqgoU0LGMOtq6k0l3qWf2Sq5wc7twKgPDPJxQT3DP09eA&__tn__=kC-R">comparti &raquo;</a></p>
        </div>
        <div class="col-lg-4">

          <img src="images/instagramlogosoltar.png" class="redeslogosoltar">


          <h2><span class="text-muted"> Soltar </span>Inspira</h2>
          <p>La recuperación es POSIBLE y para ello es necesario estar expuesto a contenido sano y motivador.  </p>
          <p><a class="btn btn-secondary" href="https://www.instagram.com/centro.soltar.minnesota/">seguinos &raquo;</a></p>
        </div>  
        <div class="col-lg-4">
          <img src="images/whatsapp.png" class="redeslogosoltar">
          <h2><span class="text-muted"> Soltar </span>Responde</h2>
          <p> Escribinos tu consulta.<br> Dejanos tus datos y una asesora se contactará lo antes posible.</p>
          <p><a class="btn btn-secondary" href="https://api.whatsapp.com/send?phone=541170096760">Enviar &raquo;</a></p>
        </div>
      </div>

      <!-- Presentacion -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Somos Profesionales.</Em> <span class="text-muted"><br>Expertos en
              rehabilitación</span></h2>
          <p class="lead">El equipo de Soltar , es un equipo multidisciplinario abocado a la recuperación , reinserción
            y prevención de adicciones de todo tipo.<br>
            Nuestro plantel está a cargo de consejeros en rehabilitación de adicciones, operadores, supervisores
            ,nuctricionistas, psicólogos y psiquiatras.
          </p>
        </div>
        <div class="col-md-5 mt-5 pt-5">
          <img src="images/profesionalesenrecuperaciondeadicciones.png">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Solución para dejar las<span class="text-muted"> drogas.</span></h2>
          <p class="lead">Utilizamos el mundialmente reconocido Programa Minessota basado en los Doce Pasos , por su
            alto índice de eficacia y recuperación.<br>Cualquier adicto puede dejar de consumir, perder el deseo de hacerlo, renovar su calidad de vida y compromiso con esta.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images/programaminessota.png">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-6 ps-5 ms-5 md-5 order-md-2">
          <h2 class="featurette-heading text-center">Neurociencias de las <span class="text-muted">adicciones.</span></h2>
  
        </div>
        <div class="col-md-5 order-md-1 mt">
        
          <iframe width="650" height="405" src="https://www.youtube.com/embed/7wJvkIautCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
        </div>

      </div>

      


      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <!--Ancla al boton como ir-->
          <a name="comoir"></a>
          <h2 class="featurette-heading">Visitanos en Parque Leloir, Ituzaingo, Buenos Aires. <span
              class="text-muted"></span></h2>
          <p class="lead">
          <p>Predio 4500 mts cuadrados
            Aire acondicionado
            Loza radiante en todo el interior de la casa
            Cablevision Flow e internet wifi
            Pileta de natación.
            Biblioteca.</p>

        </div>
        <div class="col-md-5 mt-5 mb-5">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13135.315909200492!2d-58.6909061!3d-34.6084859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x44acf1147723f6a7!2sCentro%20Soltar!5e0!3m2!1ses-419!2sar!4v1631082430735!5m2!1ses-419!2sar"
            width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class ="eslogan" mt-5>
        <h3>Lo que no dejas ir, lo cargas.<br>Es tiempo de crecer, es tiempo de SOLTAR</h3>
        </div>
        <hr class="featurette-divider">

      </div>



      <!-- FOOTER -->
      <footer class="container">
        
        <p class="float-end"><a href="#">Volver arriba</a></p>
        <p>2021 copyright centro soltar&copy;  &middot; <a href="mailto:centrosoltar@gmail.com">centrosoltar@gmail.com</a> &middot;   
        </p>
     
      </footer>
  </main>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>