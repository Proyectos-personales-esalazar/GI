<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GI - Acerca de GI</title>
    
<!--importacion de librerias-->
    <?php include('lib/librerias.php');?>

</head>

<body>
<!--menu-->
    <?php include('lib/menu.php');?>
    
    <div class="contenedor-padre">
        <section class="info">
            <h2 class="titulo-tarjeta">QUIENES SOMOS</h2>
        </section>
        <hr> 
        <section class="contenedor-tarjetas">
            <div class="tarjeta col-sm-12 col-xm-5 col-lg-5">
                <span class="titulo-tarjeta">GI</span>
                <p class="p-tarjeta">Gastronomia Industrial nace en el 2019 después de 7 años de experiencia en el mundo de los restaurantes, como una solución para cafeterias de empresas, con el objetivo de ofrecer comida accesible para empleados sin sacrificar la calidad y el sabor en cada uno de nuestros platillos.</p>
            </div>
            <div class="tarjeta col-sm-12 col-xm-5 col-lg-5" style="display: flex; align-items: center; justify-content: center;">
                <img src="img/icon/logo_gi_02.svg" height="100%" alt="">
            </div>
            
        </section> 
        <hr>
        <section class="contenedor-tarjetas">
            <div class="tarjeta col-sm-12 col-xm-5 col-lg-5">
                <span class="titulo-tarjeta">MISION</span>
                <p class="p-tarjeta">Asimilar, desarrollar y aplicar la mejor
                metodología existente para la elaboración
                de alimentos y prestación de servicios de
                cafeteria a empresas, superando las
                expectativas de nuestros clientes.</p>
            </div>
            <div class="tarjeta col-sm-12 col-xm-5 col-lg-5">
                <span class="titulo-tarjeta">VISION</span>
                <p class="p-tarjeta">Mantener productos y comida de calidad
                total y una completa orientación al servicio al
                cliente en la elaboración de alimentos
                higiénicos seguros y de alto valor para el
                comensal.</p>
            </div>
            
        </section> 
        
        <hr> 
        
        <section class="clientes">
            <section class="info" style="">
            <h2 class="titulo-tarjeta">NUESTROS CLIENTES</h2>
            </section>
            <hr>
            <section class="contenedor-tarjetas">
            <div class="tarjeta col-sm-12 col-xm-5 col-lg-5">
                <span class="titulo-tarjeta">AEROMAN - 2019</span>
                <p class="p-tarjeta">
                    • Cafetereria 1 <br>
                    • 3400 empleados <br>
                    • Preparación de 1000 platillos diarios <br>
                    • Servicio 24 horas (desayuno, almuerzo, típicos, cena,
                    nocturna) <br>
                    • Menús semanales <br>
                    • 10 Entregas alimentos darias <br>
                </p>
            </div>
            <div class="tarjeta col-sm-12 col-xm-5 col-lg-5" style="display: flex; align-items: center; justify-content: center;">
                <img src="img/icon/aeroman.jpg" width="300px" alt="">
            </div>
            
        </section> 
        </section>
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
