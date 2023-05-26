// ABRIR POPUP
document.getElementById('boton-donar').addEventListener('click', function () {
    document.getElementById('popup-donacion').style.display = 'block';
});

// CERRAR POPUP
document.getElementById('cerrar').addEventListener('click', function () {
    document.getElementById('popup-donacion').style.display = 'none';
});