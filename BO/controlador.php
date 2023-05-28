<?php
session_start();
try{
    include_once('./DAO/operativaOng.php');
    include_once('./DAO/operativaPunto.php');
    include_once('./DAO/operativaUsuario.php');
} catch(Exception $e){
    header("Location:/Final-Proyect/");
}
$ong = new OperativaOng();
$punto = new OperativaPunto();
$usuario = new OperativaUsuaio();

if(isset($_POST['Logout'])){
    $usuario->logout();
}

if(isset($_POST['Login'])){
    $usuarioObjeto = $usuario->creacionLogin($_POST['email'], $_POST['contrasena']);
    $usuario->login($usuarioObjeto);
}

if(isset($_POST['Registro'])){
    $usuarioObjeto = $usuario->creacion($_POST['nombre'], $_POST['apellido'], $_POST['edad'],$_POST['email'] ,$_POST['contrasena']);
    $usuario->registro($usuarioObjeto);
}

if (isset($_SESSION['usuario'])) {
    $correo = $_SESSION['usuario'];
    $usuarioBBDD = $usuario->sacarUsuario($correo);
    $usuarioObjeto = $usuario->creacion($usuarioBBDD['nombre_usuario'], $usuarioBBDD['apellidos_usuario'], $usuarioBBDD['edad_usuario'],$usuarioBBDD['correo_usuario'],$usuarioBBDD['contrasena_usuario'],$usuarioBBDD['puntos_usuario'],$usuarioBBDD['id_usuario']);
    // echo $usuarioObjeto->__get('puntosUsuario');
    $ongBBDD = $ong->sacarTodasOng();
    // print_r($ongBBDD);
}   

?>