<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'metadata.php'; ?>
    <!-- Únicamente estilos propios -->
    <link rel="stylesheet" href="../CSS/video.css">
</head>
<body>
    <?php require 'header.php'; ?>
    <!-- Sección central con video -->
    <div class="container-fluid d-flex flex-column" id="main">
        <span id="titulo" class="text-center">GANA PUNTOS MIRANDO ESTE VIDEO</span>
        <div class="embed-responsive embed-responsive-16by9 d-flex align-items-center justify-content-center" id="video-container">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ"></iframe>
        </div>
    </div>

    <?php require 'footer.html'; ?>
</body>
</html>
