<?php
session_start();
error_reporting(0);
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
    // EXTRAÑO: al meter este require de alerta ya al cerrar sesión no da error ??
    require './Vista/HTML/Alertas/alertaCerrarSesion.html'; 
    $usuario->logout();
}

if(isset($_POST['Login'])){
    $usuarioObjeto = $usuario->creacionLogin($_POST['email'], $_POST['contrasena']);
    if ($usuario->login($usuarioObjeto)) {
        require './Vista/HTML/Alertas/alertaLoginCorrecto.html'; 
    } else {
        require './Vista/HTML/Alertas/alertaLoginFallido.html'; 
    }
}

if(isset($_POST['Registro'])){
    $usuarioObjeto = $usuario->creacion($_POST['nombre'], $_POST['apellido'], $_POST['edad'],$_POST['email'] ,$_POST['contrasena']);
    if ($usuario->registro($usuarioObjeto)) {
        require './Vista/HTML/Alertas/alertaRegistroCorrecto.html'; 
    } else {
        require './Vista/HTML/Alertas/alertaRegistroFallido.html'; 
    }
}

if (isset($_SESSION['usuario'])) {
    $correo = $_SESSION['usuario'];
    $usuarioBBDD = $usuario->sacarUsuario($correo);
    $usuarioObjeto = $usuario->creacion($usuarioBBDD['nombre_usuario'], $usuarioBBDD['apellidos_usuario'], $usuarioBBDD['edad_usuario'],$usuarioBBDD['correo_usuario'],$usuarioBBDD['contrasena_usuario'],$usuarioBBDD['puntos_usuario'],$usuarioBBDD['id_usuario']);
    $ongBBDD = $ong->sacarTodasOng();

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
            // REVISAR ALERTA CON HEADER GET -> DONAR PUNTOS
            // require './Vista/HTML/Alertas/alertaDonarCorrecto.html';
            header('Location: http://localhost/Final-Proyect/ongs?alerta=true');
            die();
        }else{
            require './Vista/HTML/Alertas/alertaDonarFallido.html'; 
        }
    }
}   

if(isset($_GET['alerta'])){
    require './Vista/HTML/Alertas/alertaDonarCorrecto.html';
}

if(isset($_COOKIE['comprobante']) && $_COOKIE['video_completed'] === 'true'){
    $usuarioObjeto->__get('puntosUsuario');
    $usuario->sumaPuntos($usuarioObjeto, 25);
    require './Vista/HTML/Alertas/alertaPuntosCorrecto.html'; 
    setcookie('comprobante',"",time()-1, '/');
}

?>