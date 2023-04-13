<?php
class Punto{
    private $idUsuaio;
    private $puntosActuales;
    private $totalPuntos;
    private $puntosGastados;

    
    function __get($atributo){
        return $this->atributo;
    }

    function __set($atributo, $valor){
        $this->atributo = $valor;
    }

}
?>