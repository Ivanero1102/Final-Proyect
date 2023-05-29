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

    if(isset($_POST['Donar'])){
        if ($usuarioObjeto->__get('puntosUsuario') >= $_POST['puntos']) {
            $usuario->restaPuntos($usuarioObjeto, $_POST['puntos']);
            $ongBBDD2 = $ong->sacarOng($_POST['ong']);
            $ongObjeto = $ong->creacion($ongBBDD2['nombre_ong'], $ongBBDD2['puntos_ong'], $ongBBDD2['id_ong']);
            $ong->sumaPuntosOng($ongObjeto, $_POST['puntos']);
            $idOng = $ongObjeto->__get('idOng');
            $correoUsuario = $usuarioObjeto->__get('correoUsuario');
            $puntoObjeto = $punto->creacion($idOng, $correoUsuario, $_POST['puntos']);
            $punto->donacion($puntoObjeto);
            header('Location: http://localhost/Final-Proyect/ongs');
            die();
        }else{
            // echo '<script defer> alert("hola"); </scrip>';
        }
    }
}   

?>