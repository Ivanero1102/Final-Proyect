<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'metadata.php'; ?>
    <!-- Únicamente estilos propios -->
    <link rel="stylesheet" href="./Vista/CSS/ongs.css">
    <script src="./Vista/JS/popup-donacion.js" defer></script>
</head>

<body class="bg-white">
<?php 
    try{
        require './Vista/HTML/header.php'; 
    } catch(Error $e){
        header("Location: http://localhost/Final-Proyect/404");
        exit();
    }
?>

    <!-- ======= Carrusel ======= -->
    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></li>
            <li data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></li>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="contenedor-imagen">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/ac2.png" alt="Imagen 1" id="acnur">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES RECIBIDOS: <?php echo $ongBBDD["acnur"]??"####" ?></h5>
                    <a href="https://eacnur.org/es" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button class="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="contenedor-imagen">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/aea2.png" alt="Imagen 2" id="ayuda-en-accion">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES RECIBIDOS: <?php echo $ongBBDD["ayudaEnAccion"]??"####" ?></h5>
                    <a href="https://ayudaenaccion.org/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button class="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="contenedor-imagen">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/as2.png" alt="Imagen 3" id="accion-solidaria">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES RECIBIDOS: <?php echo $ongBBDD["accionSolidaria"]??"####" ?></h5>
                    <a href="https://accionsolidaria.info/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button class="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="contenedor-imagen">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/mf2.png" alt="Imagen 4" id="medicos-sin-fronteras">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES RECIBIDOS: <?php echo $ongBBDD["medicosSinFronteras"]??"####" ?></h5>
                    <a href="https://www.msf.es/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button class="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div class="contenedor-imagen">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/u2.png" alt="Imagen 5" id="unicef">
                </div>
                <div class="carousel-caption d-none d-md-block">
                   
                    <h5>PUNTOS TOTALES RECIBIDOS: <?php echo $ongBBDD["unicef"]??"####" ?></h5>
                    <a href="https://www.unicef.es/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button class="boton-donar">Donar puntos</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="sr-only">Siguiente</span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
   
    <!-- ======= Fin Carrusel ======= -->

    <!-- POPUP -->
    <div id="popup-donacion" class="popup">
      <div id="popup-contenido-donacion">
        <span class="cerrar" id="cerrar">&times;</span>
        <!-- LOGIN Izquierda -->
        <div id="contenedor-donacion-puntos">
            <form action="" method="post">
                <label for="puntos-a-donar">Puntos a donar</label><br>
                <input type="number" min="25" step="25" id="puntos-a-donar" name="puntos" required><br>
                <label for="apellido">ONG</label><br>
                <select name="ong">
                    <option value="acnur">ACNUR</option>
                    <option value="ayudaEnAccion">AYUDA EN ACCIÓN</option>
                    <option value="accionSolidaria">ACCIÓN SOLIDARIA</option>
                    <option value="medicosSinFronteras">MÉDICOS SIN FRONTERAS</option>
                    <option value="unicef">UNICEF</option>
                </select><br>
                <input type="submit" value="Donar" name="Donar">
            </form>
        </div>
      </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>