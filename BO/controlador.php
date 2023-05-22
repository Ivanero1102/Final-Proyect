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

?>