var player;

function onYouTubeIframeAPIReady() {
    // Obtener un video aleatorio de 30 segundos de duración
    // obtenerVideoAleatorio(function(videoId) {
    //     player = new YT.Player("video-container", {
    //         videoId: videoId,
    //         playerVars: { "controls": 0 },
    //         events: {
    //             onStateChange: onPlayerStateChange
    //         },
    //     });
    // });
    // Hm5d0DcjFCo
    obtenerVideoAleatorio(function(videoId) {
    var ifrm = document.createElement("iframe");
        ifrm.setAttribute("src", "https://www.youtube.com/embed/"+videoId+"?enablejsapi=1&controls=0&playinfo=0&disablekb=1&autoplay=1&showinfo=0");
        ifrm.style.width = "640px";
        ifrm.style.height = "480px";
        ifrm.setAttribute("id", "iframeYoutube");
        document.body.appendChild(ifrm);
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
            maxResults: 1, // Obtener hasta 10 resultados
            order: "date", // Ordenar los resultados aleatoriamente
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