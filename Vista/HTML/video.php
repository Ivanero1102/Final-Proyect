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
    $videoCompleted = isset($_COOKIE['video_completed']) && $_COOKIE['video_completed'] === 'true';

    // Comprobar si el video ha sido completado para mostrar la recompensa o el video
    if ($videoCompleted) {
        // Mostrar la recompensa al usuario
        echo '<div class="container-fluid d-flex flex-column" id="main">';
        echo '<span id="titulo" class="text-center">¡Felicidades! Has completado el video.</span>';
        echo '<p>Aquí va tu recompensa.</p>';
        // ...
        echo '</div>';
    } else {
        // Mostrar el video de YouTube
        echo '<div class="container-fluid d-flex flex-column" id="main">';
        echo '<span id="titulo" class="text-center">GANA PUNTOS MIRANDO ESTE VIDEO</span>';
        echo '<div class="embed-responsive embed-responsive-16by9 d-flex align-items-center justify-content-center" id="video-container"></div>';
        echo '<button id="recompensa-boton" onclick="completarVideo()">Reclamar recompensa</button>';
        echo '</div>';

        // JavaScript para controlar la API de YouTube, la finalización del video y la obtención de un video aleatorio
        echo '<script>
            var player;

            function onYouTubeIframeAPIReady() {
                // Obtener un video aleatorio de 30 segundos de duración
                obtenerVideoAleatorio(function(videoId) {
                    player = new YT.Player("video-container", {
                        videoId: videoId,
                        events: {
                            onStateChange: onPlayerStateChange
                        }
                    });
                });
            }

            function obtenerVideoAleatorio(callback) {
                // Hacer una solicitud AJAX a la API de YouTube para buscar videos aleatorios
                $.ajax({
                    url: "https://www.googleapis.com/youtube/v3/search",
                    dataType: "json",
                    type: "GET",
                    data: {
                        key: "AIzaSyBsfzR2BC71MsFPy44dXRIPpYTSJYMBWwI", // Reemplazar con tu propia API Key de YouTube
                        q: "", // Puedes especificar términos de búsqueda si lo deseas
                        type: "video",
                        videoEmbeddable: true,
                        maxResults: 30, // Obtener hasta 10 resultados
                        order: "date" // Ordenar los resultados aleatoriamente
                    },
                    success: function(data) {
                        // Obtener el ID de un video aleatorio de los resultados de búsqueda
                        var videoId = data.items[0].id.videoId;
                        callback(videoId);
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        console.log("Error al obtener video aleatorio: " + textStatus);
                    }
                });
            }

            function onPlayerStateChange(event) {
                if (event.data === YT.PlayerState.ENDED) {
                    // Se establece una cookie para indicar que el video ha sido completado
                    document.cookie = "video_completed=true; expires=Thu, 01 Jan 2030 00:00:00 UTC; path=/";
                    document.getElementById("recompensa-boton").style.display = "block"; // Mostrar el botón de reclamar recompensa
                    setTimeout(function() {
                        location.reload(); // Recargar la página después de un breve retraso
                    }, 2000); // Cambiar el valor 2000 a la cantidad de milisegundos que desees esperar antes de recargar la página (2 segundos en este ejemplo)
                }
            }

            function completarVideo() {
                // Realizar las acciones necesarias para otorgar la recompensa
                // ...
                // Redirigir o mostrar mensaje de éxito
            }
        </script>';
    }
?>

<?php require 'footer.html'; ?>
</body>
</html>

