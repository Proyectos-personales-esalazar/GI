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

   
    <!--MENU POR DIAS-->
    <h1 class="productos_titulo">MENU</h1>
    
    <div class="productos_menu">
        <div class="producto_item_menu" id="menu1" onclick="mostrarLunes()">
            <label for="dia1">Lunes</label>
        </div>
        <div class="productos_separador_menu"></div>
        <div class="producto_item_menu" id="menu2" onclick="mostrarMartes()">
            <label for="dia2">Martes</label>
        </div>
        <div class="productos_separador_menu"></div>
        <div class="producto_item_menu" id="menu3" onclick="mostrarMiercoles()">
            <label for="dia3">Miercoles</label>
        </div>
        <div class="productos_separador_menu"></div>
        <div class="producto_item_menu" id="menu4" onclick="mostrarJueves()">
            <label for="dia4">Jueves</label>
        </div>
        <div class="productos_separador_menu"></div>
        <div class="producto_item_menu" id="menu5" onclick="mostrarViernes()">
            <label for="dia5">Viernes</label>
        </div>
        <div class="productos_separador_menu"></div>
        <div class="producto_item_menu" id="menu6" onclick="mostrarSabado()">
            <label for="dia6">Sábado</label>
        </div>
        <div class="productos_separador_menu"></div>
        <div class="producto_item_menu" id="menu7" onclick="mostrarDomingo()">
            <label for="dia7">Domingo</label>
        </div>
    </div>
<!--    FIN DE MENU POR DIAS-->

   
<!--PRODUCTOS LUNES-->
    <div class="productos_lunes" id="prod_lunes">
       <div class="titulo_dia">LUNES</div>
       
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                pollo asado <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de POLLO ASADO" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                cuadros de res entomatados <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CUADROS DE RES ENTOMATADOS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                canelones con pollo <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CANELONES CON POLLO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo"> 
                sopa de frijoles blancos con cerdo <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE FRIJOLES BLANCOS CON CERDO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                rellenos de chile <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de RELLENOS DE CHILE"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES LUNES-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                VEGETALES AL VAPOR<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de VEGETALES AL VAPOR"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ CON ELOTITOS <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ CON ELOTITOS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CASAMIENTO <br> 
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CASAMIENTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSLADA DE TOMATE Y OREGANO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSLADA DE TOMATE Y OREGANO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PURE DE PAPAS <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PURE DE PAPAS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
    </div> 

<!--PRODUCTOS MARTES-->
    <div class="productos_martes" id="prod_martes">
       <div class="titulo_dia">MARTES</div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CHOP SUEY DE POLLO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CHOP SUEY DE POLLO" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CHULETAS DE CERDO CON SALSA DE CIRUELA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CHULETAS DE CERDO CON SALSA DE CIRUELA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                EMPANADAS DE PAPA RELLENAS DE RES <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de EMPANADAS DE PAPA RELLENAS DE RES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SOPA DE RES <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE RES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                RELLENOS DE PAPA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de RELLENOS DE PAPA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES MARTES-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                VEGETALES AL AJO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de VEGETALES AL AJO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ CON QUESO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ CON QUESO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                GALLO PINTO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de GALLO PINTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSLADA DE PAPA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSLADA DE PAPA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PAPAS GUISADAS <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PAPAS GUISADAS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
    </div>
    
<!--PRODUCTOS MIERCOLES-->
    <div class="productos_martes" id="prod_miercoles">
       <div class="titulo_dia">MIERCOLES</div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                POLLO FRITO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de POLLO FRITO" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SALPICON <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SALPICON"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CHAO MEIN DE CERDO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CHAO MEIN DE CERDO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SOPA DE POLLO CON ESPINACA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE POLLO CON ESPINACA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                RELLENOS DE REPOLLO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de RELLENOS DE REPOLLO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES MIERCOLES-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                VEGETALES SALTEADOS<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de VEGETALES SALTEADOS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ CON VEGETALES <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ CON VEGETALES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CASAMIENTO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CASAMIENTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSLADA NIEVE <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSLADA NIEVE"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PAPAS FRITAS <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PAPAS FRITAS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
    </div>
    
<!--PRODUCTOS JUEVES-->
    <div class="productos_martes" id="prod_jueves">
       <div class="titulo_dia">JUEVES</div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                MUSLOS DE POLLO CON MELOCOTON <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de MUSLOS DE POLLO CON MELOCOTON" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CARNE ASADA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CARNE ASADA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                LASAÑA DE CARNE DE RES<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de LASAÑA DE CARNE DE RES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SOPA DE GALLINA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE GALLINA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PICADO DE VEGETALES CON POLLO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PICADO DE VEGETALES CON POLLO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES JUEVES-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                VEGETALES HORNEADOS<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de VEGETALES HORNEADOS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ NEGRITO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ NEGRITO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                GALLO PINTO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de GALLO PINTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CHIRIMOL <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CHIRIMOL"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PAPAS EN GAJO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PAPAS EN GAJO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
    </div>    
    
<!--PRODUCTOS VIERNES-->
    <div class="productos_martes" id="prod_viernes">
       <div class="titulo_dia">VIERNES</div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                POLLO ENCEBOLLADO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de MUSLOS DE POLLO ENCEBOLLADO" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CARNE GUISADA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CARNE GUISADA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SPAGUETTI CON CAMARONES<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SPAGUETTI CON CAMARONES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SOPA DE TORTILLA<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE TORTILLA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                RELLENOS DE GÜISQUIL<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de RELLENOS DE GÜISQUIL"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES VIERNES-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                VEGETALES AL VAPOR<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de VEGETALES AL VAPOR"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ AMARILLO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ AMARILLO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CASAMIENTO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CASAMIENTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA MIXTA<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA MIXTA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PURE DE PAPAS CON JAMON <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PURE DE PAPAS CON JAMON"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
    </div>    
    
<!--PRODUCTOS SABADO-->
    <div class="productos_martes" id="prod_sabado">
       <div class="titulo_dia">SABADO</div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PECHUGUITAS DE POLLO CON SALSA BUFALO EMP<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PECHUGUITAS DE POLLO CON SALSA BUFALO EMP" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                COSTILLAS DE CERDO ENCEBOLLADAS <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de COSTILLAS DE CERDO ENCEBOLLADAS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CARNE DESHILADA CON HUEVO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CARNE DESHILADA CON HUEVO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SOPA DE WANTAN <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE WANTAN"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PIPIANES CON CREAMA Y POLLO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PIPIANES CON CREAMA Y POLLO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES JUEVES-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                VEGETALES SALTEADOS<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de VEGETALES SALTEADOS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ CAPEADO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ CAPEADO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                GALLO PINTO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de GALLO PINTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA DE ZUKINI <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA DE ZUKINI"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PAPAS AL AJO <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PAPAS AL AJO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
    </div>    
    
<!--PRODUCTOS DOMINGO-->
    <div class="productos_martes" id="prod_domingo">
       <div class="titulo_dia">DOMINGO</div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                LONJA DE PESCADO AL AJO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de LONJA DE PESCADO AL AJO" target="_blank"><input type="button" class="miboton" value="PEDIR" name="pedir"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto5.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                FAJITAS DE CERDO AL CHIPOTLE<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de FAJITAS DE CERDO AL CHIPOTLE"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PASTEL AZTECA DE POLLO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PASTEL AZTECA DE POLLO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                SOPA DE ARROZ AGUADO CON COSTILLA DE RES<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de SOPA DE ARROZ AGUADO CON COSTILLA DE RES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CHILAQUILAS<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CHILAQUILAS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
        
        
        <!--ZONA DE GUARNICIONES DOMINGO-->
       <div class="titulo_dia">guarniciones</div>
       
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PICADO DE VEGETALES<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PICADO DE VEGETALES"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ARROZ BORICUA<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ARROZ BORICUA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto4.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                CASAMIENTO<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de CASAMIENTO"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto1.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA DE CODITOS <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA DE CODITOS"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto2.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                PURE DE PAPAS CON ZANAHORIA<br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de PURE DE PAPAS CON ZANAHORIA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
        </div>
       <div class="producto_tarjeta">
            <img src="img/productos/producto3.jpg" alt="" class="producto_img">
            <p class="producto_parrafo">
                ENSALADA FRESCA <br>
                <a href="https://wa.me/+50371569088?text=Hola, deseo hacer un pedido de ENSALADA FRESCA"><input type="button" class="miboton" value="PEDIR"></a>
            </p>
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
            document.getElementById('prod_lunes').style.display= 'flex'; 
            document.getElementById('prod_martes').style.display= 'none';  
            document.getElementById('prod_miercoles').style.display= 'none';  
            document.getElementById('prod_jueves').style.display= 'none';  
            document.getElementById('prod_viernes').style.display= 'none';  
            document.getElementById('prod_sabado').style.display= 'none';  
            document.getElementById('prod_domingo').style.display= 'none'; 
        } 
        function mostrarMartes(){
            document.getElementById('prod_lunes').style.display= 'none'; 
            document.getElementById('prod_martes').style.display= 'flex';   
            document.getElementById('prod_miercoles').style.display= 'none';  
            document.getElementById('prod_jueves').style.display= 'none';  
            document.getElementById('prod_viernes').style.display= 'none';  
            document.getElementById('prod_sabado').style.display= 'none';  
            document.getElementById('prod_domingo').style.display= 'none'; 
        } 
        function mostrarMiercoles(){
            document.getElementById('prod_lunes').style.display= 'none'; 
            document.getElementById('prod_martes').style.display= 'none';   
            document.getElementById('prod_miercoles').style.display= 'flex';  
            document.getElementById('prod_jueves').style.display= 'none';  
            document.getElementById('prod_viernes').style.display= 'none';  
            document.getElementById('prod_sabado').style.display= 'none';  
            document.getElementById('prod_domingo').style.display= 'none'; 
        } 
        function mostrarJueves(){
            document.getElementById('prod_lunes').style.display= 'none'; 
            document.getElementById('prod_martes').style.display= 'none';   
            document.getElementById('prod_miercoles').style.display= 'none';  
            document.getElementById('prod_jueves').style.display= 'flex';  
            document.getElementById('prod_viernes').style.display= 'none';  
            document.getElementById('prod_sabado').style.display= 'none';  
            document.getElementById('prod_domingo').style.display= 'none'; 
        } 
        function mostrarViernes(){
            document.getElementById('prod_lunes').style.display= 'none'; 
            document.getElementById('prod_martes').style.display= 'none';   
            document.getElementById('prod_miercoles').style.display= 'none';  
            document.getElementById('prod_jueves').style.display= 'none';  
            document.getElementById('prod_viernes').style.display= 'flex';  
            document.getElementById('prod_sabado').style.display= 'none';  
            document.getElementById('prod_domingo').style.display= 'none'; 
        } 
        function mostrarSabado(){
            document.getElementById('prod_lunes').style.display= 'none'; 
            document.getElementById('prod_martes').style.display= 'none';   
            document.getElementById('prod_miercoles').style.display= 'none';  
            document.getElementById('prod_jueves').style.display= 'none';  
            document.getElementById('prod_viernes').style.display= 'none';  
            document.getElementById('prod_sabado').style.display= 'flex';  
            document.getElementById('prod_domingo').style.display= 'none'; 
        } 
        function mostrarDomingo(){
            document.getElementById('prod_lunes').style.display= 'none'; 
            document.getElementById('prod_martes').style.display= 'none';   
            document.getElementById('prod_miercoles').style.display= 'none';  
            document.getElementById('prod_jueves').style.display= 'none';  
            document.getElementById('prod_viernes').style.display= 'none';  
            document.getElementById('prod_sabado').style.display= 'none';  
            document.getElementById('prod_domingo').style.display= 'flex'; 
        } 

    </script>


</body>
</html>
