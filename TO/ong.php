<?php
class Ong{
    private $idOng;
    private $nombreOng;
    private $puntos;

    /**
     * Sacar los atributos de un objeto de tipo Ong
     * 
     * @param string $atributo | Atributo que quiero extraer
     * @return mixed $this->atributo | Valor del atributo seleccionado
     * 
     */
    function __get($atributo){
        return $this->atributo;
    }
    
    /**
     * Cambiar los atributos de un objeto de tipo Ong
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
