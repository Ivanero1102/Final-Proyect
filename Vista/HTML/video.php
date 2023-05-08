<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi página web con Bootstrap</title>
    <!-- Carga los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <!-- Carga los archivos JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <!-- Carga las fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Script para cambiar el icono de la pestana -->
    <link rel="shortcut icon" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/star-fill.svg" style="color: green;">
</head>
<body>
    <?php require 'header.html'; ?>
    <!-- <main class="container-fluid bg-white "> -->
    <!-- Sección central con video -->
    <div class="container-fluid d-flex flex-column" id="main">
        <p id="titulo" class="text-center">GANA PUNTOS MIRANDO ESTE VIDEO</p>
        <div class="embed-responsive embed-responsive-16by9 d-flex align-items-center justify-content-center" id="video-container">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ"></iframe>
        </div>
    </div>
    <!-- </main> -->
    <?php require 'footer.html'; ?>

    <!-- Carga los archivos JavaScript de Bootstrap (necesario para los componentes interactivos) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>
</html>
