<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GI - Productos</title>
    
    <!--importacion de librerias-->
    <?php include('lib/librerias.php');?>
    
</head>

<body>
    <!--menu-->
    <?php include('lib/menu.php');?>

   
    <div class="menu-contenedor">
      
       <h1>MENU</h1> <hr>
        <div class="menu-dia" id="menu_lunes" onclick="mostrarLunes()">
            <div class="menu-contenido">
                <span>Lunes</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/19.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Pollo asado</li>
                    <li class="list-group-item">Cuadros de Res entomatados</li>
                    <li class="list-group-item">Canelones con pollo</li>
                    <li class="list-group-item">Sopa de frijoles blancos con cerdo</li>
                    <li class="list-group-item">Rellenos de chile</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegetales al vapor</li>
                    <li class="list-group-item">Arroz con elotitos</li>
                    <li class="list-group-item">Casamiento</li>
                    <li class="list-group-item">Ensalada de tomate y oregano</li>
                    <li class="list-group-item">Puré de papa</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
        </div>
        <div class="menu-dia" id="menu_martes" onclick="mostrarMartes()">
            <div class="menu-contenido">
                <span>Martes</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/12.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Chop Suey de Pollo</li>
                    <li class="list-group-item">Chuletas de Cerdo con salsa de ciruela</li>
                    <li class="list-group-item">Empanadas de papa rellenas de res</li>
                    <li class="list-group-item">Sopa de res</li>
                    <li class="list-group-item">Rellenos de papa</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegetales al ajo</li>
                    <li class="list-group-item">Arroz con queso</li>
                    <li class="list-group-item">Gallo pinto</li>
                    <li class="list-group-item">Ensalada de papa</li>
                    <li class="list-group-item">Papas guisadas</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
        </div>
        <div class="menu-dia" id="menu_miercoles" onclick="mostrarMiercoles()">
            <div class="menu-contenido">
                <span>Miércoles</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/17.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Pollo frito</li>
                    <li class="list-group-item">Salpicón</li>
                    <li class="list-group-item">Chao Mein de cerdo</li>
                    <li class="list-group-item">Sopa de pollo con espinaca</li>
                    <li class="list-group-item">Relleno de repollo</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegetales salteados</li>
                    <li class="list-group-item">Arroz con vegetales</li>
                    <li class="list-group-item">Casamiento</li>
                    <li class="list-group-item">Ensalada Nieve</li>
                    <li class="list-group-item">Papas fritas</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
        </div>
        <div class="menu-dia" id="menu_jueves" onclick="mostrarJueves()">
            <div class="menu-contenido">
                <span>Jueves</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/16.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Muslos de pollo con melocotón</li>
                    <li class="list-group-item">Carne asada</li>
                    <li class="list-group-item">Lasaña de carne de res</li>
                    <li class="list-group-item">Sopa de gallina</li>
                    <li class="list-group-item">Picado de vegetales con pollo</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegtales horneados</li>
                    <li class="list-group-item">Arroz negrito</li>
                    <li class="list-group-item">Pollo pinto</li>
                    <li class="list-group-item">Chirimol</li>
                    <li class="list-group-item">Papas en gajo</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
        </div>
        <div class="menu-dia" id="menu_viernes" onclick="mostrarViernes()">
            <div class="menu-contenido">
                <span>Viernes</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/19.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Pollo encebollado</li>
                    <li class="list-group-item">Carne guisadas</li>
                    <li class="list-group-item">Spaguetti con camarones</li>
                    <li class="list-group-item">Sopa de tortilla</li>
                    <li class="list-group-item">Rellenos de güisquil</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegetales al vapor</li>
                    <li class="list-group-item">Arroz amarillo</li>
                    <li class="list-group-item">Casamiento</li>
                    <li class="list-group-item">Ensalada mixta</li>
                    <li class="list-group-item">Puré de papas con jamón</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
        </div>
        <div class="menu-dia" id="menu_sabado" onclick="mostrarSabado()">
            <div class="menu-contenido">
                <span>Sábado</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/10.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Pechuguitas de pollo con salsa bufalo EMP</li>
                    <li class="list-group-item">Costillas de cerdo encebolladas</li>
                    <li class="list-group-item">Carne deshilada con huevo</li>
                    <li class="list-group-item">Sopa de Wantan</li>
                    <li class="list-group-item">Pipianes con crema y pollo</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegetales salteados</li>
                    <li class="list-group-item">Arroz capeado</li>
                    <li class="list-group-item">Gallo pinto</li>
                    <li class="list-group-item">Ensalada de Zukini</li>
                    <li class="list-group-item">Papas al ajo</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
        </div>
        <div class="menu-dia" id="menu_domingo" onclick="mostrarDomingo()">
            <div class="menu-contenido">
                <span>Domingo</span><hr>
                <img class="img-encabezado" src="img/home/carrusel/01.jpg" alt="">
                <ul class="list-group">
                    <li class="list-group-item">Pechuguitas de pollo con salsa bufalo EMP</li>
                    <li class="list-group-item">Costillas de cerdo encebolladas</li>
                    <li class="list-group-item">Carne deshilada con huevo</li>
                    <li class="list-group-item">Sopa de Wantan</li>
                    <li class="list-group-item">Pipianes con crema y pollo</li>
                </ul>
                <hr>
                <span>Guarniciones</span><hr>
                <ul class="list-group">
                    <li class="list-group-item">Vegetales salteados</li>
                    <li class="list-group-item">Arroz capeado</li>
                    <li class="list-group-item">Gallo pinto</li>
                    <li class="list-group-item">Ensalada de Zukini</li>
                    <li class="list-group-item">Papas al ajo</li>
                    <li class="list-group-item">Ensalada fresca</li>
                </ul>
            </div>
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
    
    <script>
        function mostrarLunes(){
            if  (document.getElementById('menu_lunes').style.height!= '950px') {
                document.getElementById('menu_lunes').style.height= '950px'; 
                document.getElementById('menu_martes').style.height= '80px'; 
                document.getElementById('menu_miercoles').style.height= '80px'; 
                document.getElementById('menu_jueves').style.height= '80px'; 
                document.getElementById('menu_viernes').style.height= '80px'; 
                document.getElementById('menu_sabado').style.height= '80px'; 
                document.getElementById('menu_domingo').style.height= '80px'; 
            }
            else
                document.getElementById('menu_lunes').style.height= '80px'
        }  
        function mostrarMartes(){
            if  (document.getElementById('menu_martes').style.height!= '950px'){
                document.getElementById('menu_lunes').style.height= '80px'; 
                document.getElementById('menu_martes').style.height= '950px'; 
                document.getElementById('menu_miercoles').style.height= '80px'; 
                document.getElementById('menu_jueves').style.height= '80px'; 
                document.getElementById('menu_viernes').style.height= '80px'; 
                document.getElementById('menu_sabado').style.height= '80px'; 
                document.getElementById('menu_domingo').style.height= '80px'; 
            }
            else
                document.getElementById('menu_martes').style.height= '80px' 
        } 
        function mostrarMiercoles(){
            if  (document.getElementById('menu_miercoles').style.height!= '950px'){
                document.getElementById('menu_lunes').style.height= '80px'; 
                document.getElementById('menu_martes').style.height= '80px'; 
                document.getElementById('menu_miercoles').style.height= '950px'; 
                document.getElementById('menu_jueves').style.height= '80px'; 
                document.getElementById('menu_viernes').style.height= '80px'; 
                document.getElementById('menu_sabado').style.height= '80px'; 
                document.getElementById('menu_domingo').style.height= '80px'; 
            }
            else
                document.getElementById('menu_miercoles').style.height= '80px'
        } 
        function mostrarJueves(){
            if  (document.getElementById('menu_jueves').style.height!= '950px'){
                document.getElementById('menu_lunes').style.height= '80px'; 
                document.getElementById('menu_martes').style.height= '80px'; 
                document.getElementById('menu_miercoles').style.height= '80px'; 
                document.getElementById('menu_jueves').style.height= '950px'; 
                document.getElementById('menu_viernes').style.height= '80px'; 
                document.getElementById('menu_sabado').style.height= '80px'; 
                document.getElementById('menu_domingo').style.height= '80px'; 
            }
            else
                document.getElementById('menu_jueves').style.height= '80px'
        } 
        function mostrarViernes(){
            if  (document.getElementById('menu_viernes').style.height!= '950px'){
                document.getElementById('menu_lunes').style.height= '80px'; 
                document.getElementById('menu_martes').style.height= '80px'; 
                document.getElementById('menu_miercoles').style.height= '80px'; 
                document.getElementById('menu_jueves').style.height= '80px'; 
                document.getElementById('menu_viernes').style.height= '950px'; 
                document.getElementById('menu_sabado').style.height= '80px'; 
                document.getElementById('menu_domingo').style.height= '80px'; 
            }
            else
                document.getElementById('menu_viernes').style.height= '80px' 
        } 
        function mostrarSabado(){
            if  (document.getElementById('menu_sabado').style.height!= '950px'){
                document.getElementById('menu_lunes').style.height= '80px'; 
                document.getElementById('menu_martes').style.height= '80px'; 
                document.getElementById('menu_miercoles').style.height= '80px'; 
                document.getElementById('menu_jueves').style.height= '80px'; 
                document.getElementById('menu_viernes').style.height= '80px'; 
                document.getElementById('menu_sabado').style.height= '950px'; 
                document.getElementById('menu_domingo').style.height= '80px'; 
            }
            else
                document.getElementById('menu_sabado').style.height= '80px'
        } 
        function mostrarDomingo(){
            if  (document.getElementById('menu_domingo').style.height!= '950px'){
                document.getElementById('menu_lunes').style.height= '80px'; 
                document.getElementById('menu_martes').style.height= '80px'; 
                document.getElementById('menu_miercoles').style.height= '80px'; 
                document.getElementById('menu_jueves').style.height= '80px'; 
                document.getElementById('menu_viernes').style.height= '80px'; 
                document.getElementById('menu_sabado').style.height= '80px'; 
                document.getElementById('menu_domingo').style.height= '950px'; 
            }
            else
                document.getElementById('menu_domingo').style.height= '80px'
        } 

    </script>


</body>
</html>
