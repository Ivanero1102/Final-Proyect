<?php
class Ong{
    private $idOng;
    private $nombreOng;

    
    function __get($atributo){
        return $this->atributo;
    }

    function __set($atributo, $valor){
        $this->atributo = $valor;
    }

}
?>