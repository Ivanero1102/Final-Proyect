<?php
class Usuario{
    private $idUsuario;
    private $nombreUsuario;
    private $apellidosUsuario;
    private $edadUsuario;
    private $telefonoUsuario;
    private $contrasenaUsuario;

    
    function __get($atributo){
        return $this->atributo;
    }

    function __set($atributo, $valor){
        $this->atributo = $valor;
    }

}
?>