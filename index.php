<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GI - Inicio</title>
    
<!--importacion de librerias-->
    <?php include('lib/librerias.php');?>
    
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
        });
    </script>
 
</head>

<body>
    
    <header id="header" class="fixed-top">
      <div class="container">
        <div class="logo float-left">
          <a href="#intro" class="scrollto">
            <!-- encabbezado -->
            <img src="img/icon/logo_gi_01.svg" id="logo_encabezado">
<!--                <span class="encabezado">LOGO DE EMPRESA</span>-->
            <!-- encabbezado -->
<!--          <img src="img/logo.png" alt="" class="img-fluid">-->
          </a> 
        </div>

        <nav class="main-nav float-right d-none d-lg-block" id="sidemenu">
          <ul>
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="productos.php" class="ancla">Productos</a></li>
            <li><a href="historia.php" class="ancla">Historia</a></li>
            <li><a href="about.php" class="ancla">Acerca de GI</a></li>
<!--            <li><a href="ubicacion.php" class="ancla">Ubicación</a></li>-->
            <li><a href="#footer" class="ancla">Contactos</a></li>
          </ul>
        </nav>
        <!-- .main-nav -->
      </div>
    </header>
    

    <section id="local" name="intro">
      <div class="local-info">
          <h2><span>GASTRONOMIA</span> <br>INDUSTRIAL S.A DE C.V</h2>
      </div>
    </section>
    
    <hr>
    <div class="titulo-servicios">CON GI OBTIENES</div>
    <div class="tarjetas-servicios">
        <div class="tarjetas-hijo">
           <ul>
               <li>Servicio completo de preparación de alimentos.</li>
               <li>Recetarios preparados por los mejores Chef con estudios internacionales.</li>
               <li>Variedad de menús.</li>
               <li>Facturación quincenal.</li>
               <li>Precios accesibles.</li>
               <li>Certificados de Salud.</li>
               <li>Crédito a 15 días.</li>
               <li>Productos de calidad.</li>
               <li>Trabajamos con los mejores proveedores.</li>
           </ul>
        </div>
        <div class="tarjetas-hijo" style="padding: 0px" id="home-img-servicios">
            <img src="img/home/03.jpg" width="100%" alt="">
        </div>
    </div>
    <hr>
    <div class="titulo-servicios">CONOCE ALGUNO DE NUESTROS PLATILLOS</div>

    <div id="carouselExampleControls" class="carousel slide micarrusel" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/home/carrusel/01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/03.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/06.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/08.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/09.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/10.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/11.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/12.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/13.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/14.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/15.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/16.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/17.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/18.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/home/carrusel/19.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <hr>
    <div class="titulo-servicios">EQUIPO DE TRABAJO</div>
    <div id="fotos-fund">
        <div>
            <div class="foto_fund">
                <a href="img/home/pers1.png" rel="shadowbox"><img src="img/home/equipo.jpg" title="Click para ampliar"></a>
            </div>
        </div> 
        <div>
           <div class="foto_fund">
                <a href="img/home/pers2.png" rel="shadowbox"><img src="img/home/equipo01.jpg" title="Click para ampliar"></a>
           </div>
        </div>
        <div>
           <div class="foto_fund">
                <a href="img/home/pers3.png" rel="shadowbox"><img src="img/home/equipo02.jpg" title="Click para ampliar"></a>
           </div>
        </div>
        <div> 
           <div class="foto_fund">
                <a href="img/home/pers4.png" rel="shadowbox"><img src="img/home/equipo03.jpg" title="Click para ampliar"></a>
           </div>
        </div>
    </div>

<!--footer-->
    <?php include('lib/footer.php');?>

 
 <!-- JavaScript -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="js/animate.js"></script>
</body>
</html>
