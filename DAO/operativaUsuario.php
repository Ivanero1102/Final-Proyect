<?php
include_once("/xampp/htdocs/Final-Proyect/TO/usuario.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaUsuaio{

    
    /* La funcion recibe un objetpo de tipo usuario, con todos los datos que posee un usuario, y se encarga de introducirlo en la base de datos*/

    /*La funcion no devuelve un mensaje en caso de que todo haya funcionado y un mensaje de error en caso contrario*/
    public function registro($usuario){
    
    }


    /* La funcion recibe un objetpo de tipo usuario, con el nombre del usuario y su contraseña, comprueba que ambos coincidan con las que se encuentran en la BBDD 
        , importante desencriptar la contraseña de la BBDD antes de comparar.
        En caso de que todo coincida, se creara una sesion llamada $_SESSION['usuario'] */

    /*La funcion no devuelve nada*/
    public function login($nombreUsuario, $contrasenaUsuario){

    }


    /* La funcion se encargara de borrar la sesion $_SESSION['usuario'] */

    /*La funcion no devuelve nada*/
    public function logout(){
    
    }
}

?>