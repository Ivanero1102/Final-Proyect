<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'metadata.php'; ?>
    <!-- Únicamente estilos propios -->
    <link rel="stylesheet" href="../CSS/ongs.css">
</head>

<body class="bg-white">
    <?php require 'header.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://picsum.photos/2000/2000" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/2000/2001" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://picsum.photos/2000/2002" alt="Imagen 3">
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