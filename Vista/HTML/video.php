<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'metadata.php'; ?>
    <!-- Únicamente estilos propios -->
    <link rel="stylesheet" href="./Vista/CSS/video.css">
    <!-- Incluye la API de YouTube -->
    <script src="https://www.youtube.com/iframe_api"></script>
    <!-- Agregar jQuery para hacer la solicitud AJAX -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php
    try {
        require './Vista/HTML/header.php';
    } catch(Error $e) {
        header("Location: http://localhost/Final-Proyect/404");
        exit();
    }

    // Verificar si el usuario ha completado el video
    // $videoCompleted = isset($_COOKIE['video_completed']) && $_COOKIE['video_completed'] === 'true';

    // Comprobar si el video ha sido completado para mostrar la recompensa o el video
    if (isset($_COOKIE['video_completed']) && $_COOKIE['video_completed'] === 'true') {
        // Mostrar la recompensa al usuario
        echo '
        <div class="container-fluid d-flex flex-column" id="main">
            <span id="titulo" class="text-center mt-4">GANA PUNTOS MIRANDO ESTE VIDEO</span>
            <div class="embed-responsive embed-responsive-16by9 d-flex align-items-center justify-content-center" id="video-container">        
                <div>
                    <button id="boton-ver-video-bloqueado" class="button" disabled>Espera 15 minutos</button>
                </div>
            </div>
        </div>';
    } else {
        // Mostrar el video de YouTube
        // echo '<iframe src="https://www.youtube.com/embed/VIDEO_ID" sandbox="allow-same-origin"></iframe>';
        // <button id="recompensa-boton" onclick="completarVideo()">Reclamar recompensa</button>
        echo '
        <div class="container-fluid d-flex flex-column" id="main">
            <span id="titulo" class="text-center">GANA PUNTOS MIRANDO ESTE VIDEO</span>
            <div class="embed-responsive embed-responsive-16by9 d-flex align-items-center justify-content-center" id="video-container">        
                <button id="boton-ver-video" class="button" onclick="init()">Ver Vídeo</button>
                <div id="player"></div>
            </div>
        </div>';

        // JavaScript para controlar la API de YouTube, la finalización del video y la obtención de un video aleatorio
        // echo '<script>
        // </script>';
    }
?>
 

<script src="https://apis.google.com/js/client.js?onload=init"></script>
<!-- <iframe src="https://www.youtube.com/embed/VIDEO_ID" sandbox="allow-same-origin"></iframe> -->
<?php require 'footer.html'; ?>
<script src="./Vista/JS/video.js" defer></script>
</body>
</html>

