// Configura la API de YouTube
function init() {
    gapi.client.setApiKey('AIzaSyBsfzR2BC71MsFPy44dXRIPpYTSJYMBWwI');
    gapi.client.load('youtube', 'v3', function() {
      // API de YouTube cargada y lista para usar
      searchRandomVideo();
    });
  }
  
  // Busca un video aleatorio utilizando la API de YouTube
  function searchRandomVideo() {
    var query = 'tu consulta de búsqueda'; // Personaliza la consulta de búsqueda según tus preferencias
    var request = gapi.client.youtube.search.list({
      part: 'snippet',
      type: 'video',
      maxResults: 50, // Aumenta el número de resultados si deseas más opciones aleatorias
      order: 'date',
      q: query
    });
  
    request.execute(function(response) {
      var items = response.items;
      var randomIndex = Math.floor(Math.random() * items.length);
      var videoId = items[randomIndex].id.videoId;
      playVideo(videoId);
    });


    setTimeout( function(){
        // Se establece una cookie para indicar que el video ha sido completado
        let d = new Date();
        d.setMinutes(d.getMinutes()+15);
        document.cookie = "video_completed=true; expires="+d+"; path=/";
        document.cookie = "comprobante=true; expires="+d+"; path=/";
        document.getElementById("boton-ver-video").disabled = true; // Mostrar el botón de reclamar recompensa
        setTimeout(function() {
            location.reload(); // Recargar la página después de un breve retraso
        }, 2000); // Cambiar el valor 2000 a la cantidad de milisegundos que desees esperar antes de recargar la página (2 segundos en este ejemplo)
    }, 30000);
  }

function playVideo(videoId) {
    var player = new YT.Player('player', {
      height: '360',
      width: '640',
      videoId: videoId,
      playerVars: {
        disablekb: 1
      },
      events: {
        'onReady': function(event) {
          event.target.playVideo();
        }
      }
    });
  }