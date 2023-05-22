<?php
session_start();
include_once('./DAO/operativaOng.php');
include_once('./DAO/operativaPunto.php');
include_once('./DAO/operativaUsuario.php');
$ong = new OperativaOng();
$punto = new OperativaPunto();
$usuario = new OperativaUsuaio();


if(isset($_POST['Login'])){
    print_r($_POST);
    $usuarioObjeto = $usuario->sacarUSuairo($_POST['email']);
    print_r($usuarioObjeto);
    // $usuario->login($usuarioObjeto);
}

if(isset($_POST['Registro'])){
    $usuarioObjeto = $usuario->creacion($_POST['nombre'], $_POST['apellido'], $_POST['edad'],$_POST['email'] ,$_POST['contrasena']);
    $usuario->registro($usuarioObjeto);
}

?>