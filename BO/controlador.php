<?php
session_start();
include_once('../DAO/operativaOng.php');
include_once('../DAO/operativaPunto.php');
include_once('../DAO/operativaUsuario.php');
$ong = new OperativaOng();
$punto = new OperativaPunto();
$usuario = new OperativaUsuaio();

// Posible cambio por switch case en cuanto veamos si funciona todo bien con el front
if(isset($_POST['registro'])){
    $usuarioObjeto = $usuario->creacion($_POST['nombreUsuario'],$_POST['apellidosUsuario'],$_POST['edadUsuario'],$_POST['telefonoUsuario'],$_POST['contrasegnaUsuario']);
    $usuario->registro($usuarioObjeto);
}
if(isset($_POST['login'])){
    $usuarioObjeto = $usuario->sacarUSuairo($_POST['nombreUsuario']);
    $usuario->login($usuarioObjeto);
}
if(isset($_POST['logout'])){
    $usuario->logout();
}
if(isset($_POST['donar'])){
    $puntoObjeto = $punto->sacarPuntos($_SESSION['usuario']);
    $ongObjeto = $ong->sacarOng($_POST['ong']);
    $punto->restaPuntos($puntoObjeto, $_POST['puntos']);
    $ong->sumaPuntosOng($ongObjeto, $_POST['puntos']);

}
if(isset($_POST['video'])){
    $puntoObjeto = $punto->sacarPuntos($_SESSION['usuario']);
    $punto->sumaPuntos($puntoObjeto, $_POST['puntos']);
}
?>