// ABRIR POPUP
document.getElementById('boton-acceder').addEventListener('click', function () {
    document.getElementById('popup').style.display = 'block';
});

// CERRAR POPUP
document.querySelector('.cerrar').addEventListener('click', function () {
    document.getElementById('popup').style.display = 'none';
});