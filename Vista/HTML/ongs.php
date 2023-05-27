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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="display: flex; justify-content: center; height: 100%;">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/ac.jpg" alt="Imagen 1">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES OBTENIDOS: ####</h5>
                    <a href="https://eacnur.org/es" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button id="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; height: 100%;">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/AyudaGrande.jpg" alt="Imagen 2">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES OBTENIDOS: ####</h5>
                    <a href="https://ayudaenaccion.org/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button id="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; height: 100%;">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/as.jpg" alt="Imagen 3">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES OBTENIDOS: ####</h5>
                    <a href="https://accionsolidaria.info/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button id="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; height: 100%;">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/mf.jpg" alt="Imagen 4">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES OBTENIDOS: ####</h5>
                    <a href="https://www.msf.es/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button id="boton-donar">Donar puntos</button>
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; height: 100%;">
                    <img class="d-block" src="./Vista/Recursos/Imagenes/u.jpg" alt="Imagen 5">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>PUNTOS TOTALES OBTENIDOS: ####</h5>
                    <a href="https://www.unicef.es/" target="_blank">
                        <button>Visitar su web</button>
                    </a>
                    <button id="boton-donar">Donar puntos</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <!-- POPUP -->
    <div id="popup-donacion" class="popup">
      <div id="popup-contenido-donacion">
        <span class="cerrar" id="cerrar">&times;</span>
        <!-- LOGIN Izquierda -->
        <div id="contenedor-donacion-puntos">
            <form action="" method="post">
                <label for="puntos-a-donar">Puntos a donar</label><br>
                <input type="number" step="25" id="puntos-a-donar" name="puntos" required><br>
                <label for="apellido">ONG</label><br>
                <select>
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

    <!-- <main class="container-fluid bg-white ">
        <div class="container-fluid d-flex flex-column" id="main">
            <p id="titulo" class="text-center">
            <?php echo $nombreOng = isset($condicionNombreOng) ? $nombreOngImprint : 'Nombre ONG' ?>
            </p>
            <img src="../Recursos/Imagenes/placeholder.png" class="rounded mx-auto d-block" alt="...">
            <p id="subtitulo" class="text-center">Descripcion</p>
            <div class="embed-responsive d-flex align-items-center justify-content-center">
                <?php echo $descripcion = isset($condicionDescripcion) ? $descripcionImprint : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae deserunt eligendi corporis et similique tempora, fuga suscipit placeat aspernatur natus quisquam qui nisi ab dolorem, ipsum cupiditate, culpa quod recusandae?' ?>
            </div>
            <p id="subtitulo" class="text-center">A que nos dedicamos</p>
            <div class="embed-responsive d-flex align-items-center justify-content-center">
                <?php echo $dedicacion = isset($condicionDedicacion) ? $dedicacionImprint : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae deserunt eligendi corporis et similique tempora, fuga suscipit placeat aspernatur natus quisquam qui nisi ab dolorem, ipsum cupiditate, culpa quod recusandae?' ?>
            </div>
        </div>
        <br>
    </main> -->

    <?php require 'footer.html'; ?>
</body>
</html>