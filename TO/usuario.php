<?php
class Usuario{
    private $idUsuario;
    private $nombreUsuario;
    private $apellidosUsuario;
    private $edadUsuario;
    private $telefonoUsuario;
    private $contrasenaUsuario;

    /**
     * Sacar los atributos de un objeto de tipo Usurio
     * 
     * @param string $atributo | Atributo que quiero extraer
     * @return mixed $this->atributo | Valor del atributo seleccionado
     * 
     */
    function __get($atributo){
        return $this->atributo;
    }

    /**
     * Cambiar los atributos de un objeto de tipo Usuario
     * 
     * @param string $atributo | Atributo que quiero cambiar
     * @param mixed $valor | Nuevo valor del atributo
     * 
     */
    function __set($atributo, $valor){
        $this->atributo = $valor;
    }

}
?>