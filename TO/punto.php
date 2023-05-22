<?php
class Punto{
    public $idUsuaio;
    public $puntosActuales;
    public $totalPuntos;
    public $puntosGastados;

    /**
     * Sacar los atributos de un objeto de tipo Punto
     * 
     * @param string $atributo | Atributo que quiero extraer
     * @return mixed $this->atributo | Valor del atributo seleccionado
     * 
     */
    function __get($atributo){
        return $this->atributo;
    }

    /**
     * Cambiar los atributos de un objeto de tipo Punto
     * 
     * @param string $atributo | Atributo que quiero cambiar
     * @param mixed $valor | Nuevo valor del atributo
     * 
     */
    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

}
?>