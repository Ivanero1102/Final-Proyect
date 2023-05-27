// ABRIR POPUP DONACIÓN
var botones = document.getElementsByClassName('boton-donar');

for (var i = 0; i < botones.length; i++) {
  botones[i].addEventListener('click', function () {
    document.getElementById('popup-donacion').style.display = 'block';
  });
}

// CERRAR POPUP DONACIÓN
document.getElementById('cerrar').addEventListener('click', function () {
    document.getElementById('popup-donacion').style.display = 'none';
});