<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GI - Inicio</title>
    
<!--importacion de librerias-->
    <?php include('lib/librerias.php');?>

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
            <li><a href="ubicacion.php" class="ancla">Ubicación</a></li>
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
    <div class="titulo-servicios">SERVICIOS</div>
    <div class="tarjetas-servicios">
        <div class="tarjetas-hijo">Servicio completo de preparación de alimentos</div>
        <div class="tarjetas-hijo">Recetarios preparados por los mejores Chef con estudios internacionales</div>
        <div class="tarjetas-hijo">Variedad de menús</div>
        <div class="tarjetas-hijo">Facturación quincenal</div>
        <div class="tarjetas-hijo">Precios accesibles</div>
        <div class="tarjetas-hijo">Certificados de Salud</div>
        <div class="tarjetas-hijo">Crédito a 15 días</div>
        <div class="tarjetas-hijo">Productos de calidad</div>
        <div class="tarjetas-hijo">Trabajamos con los mejores proveedores</div>
    </div>
    <hr>
    <section id="fotos-local">
        <div class="foto-local">
            <a href="img/home/cafeteria.jpg" rel="shadowbox"><img src="img/home/cafeteria.jpg" title="Click para ampliar"></a>
        </div>
        <div class="foto-local">
            <a href="img/home/pizzeria-fachada.jpg" rel="shadowbox"><img src="img/home/pizzeria-fachada.jpg" title="Click para ampliar"></a>
        </div>
        <div class="foto-local">
            <a href="img/home/comedor.jpg" rel="shadowbox"><img src="img/home/comedor.jpg" title="Click para ampliar"></a>
        </div>
        <div class="foto-local">
            <a href="img/home/pizzeria-interior.jpg" rel="shadowbox"><img src="img/home/pizzeria-interior.jpg" title="Click para ampliar"></a>
        </div>
    </section>
     
    <hr>
    <div class="titulo-servicios">NUESTRO EQUIPO</div>
    <section class="infos"> 
        <p>
        Contamos con <strong>40 EMPLEADOS</strong>, centro de producción, cafeteria, camión industrial. <br>
        Un excelente equipo dispuesto a dar su mejor servicio para que nuestros clientes se sienta de la mejor manera.</p>
    </section>
    <hr> 
    
    <section id="fotos-equipo">
        <div>
            <a href="img/home/equipo.jpeg" rel="shadowbox"><img src="img/home/equipo.jpeg" title="Click para ampliar"></a>
        </div>
        <div>
            <a href="img/home/equipo.jpeg" rel="shadowbox"><img src="img/home/equipo.jpeg" title="Click para ampliar"></a>
        </div>
        <div>
            <a href="img/home/equipo.jpeg" rel="shadowbox"><img src="img/home/equipo.jpeg" title="Click para ampliar"></a>
        </div>
    </section>
    <hr> 
    
    <div id="fotos-fund">
        <div>
            <div class="foto_fund">
                <a href="img/home/pers1.png" rel="shadowbox"><img src="img/home/pers1.png" title="Click para ampliar"></a>
            </div>
            <h4>alejandro molina</h4>
            <h5>presidente</h5>
        </div>
        <div>
           <div class="foto_fund">
                <a href="img/home/pers2.png" rel="shadowbox"><img src="img/home/pers2.png" title="Click para ampliar"></a>
           </div>
            <h4>diana molina</h4>
            <h5>gerente general</h5>
        </div>
        <div>
           <div class="foto_fund">
                <a href="img/home/pers3.png" rel="shadowbox"><img src="img/home/pers3.png" title="Click para ampliar"></a>
           </div>
            <h4>emilio melara</h4>
            <h5>gerente de operaciones</h5>
        </div>
        <div> 
           <div class="foto_fund">
                <a href="img/home/pers4.png" rel="shadowbox"><img src="img/home/pers4.png" title="Click para ampliar"></a>
           </div>
            <h4>natalia molina</h4>
            <h5>gerente general</h5>
        </div>
    </div>

<!--footer-->
    <?php include('lib/footer.php');?>

 
 <!-- JavaScript -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="js/animate.js"></script>
</body>
</html>
