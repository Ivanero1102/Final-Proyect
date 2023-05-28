<?php
include_once("/xampp/htdocs/Final-Proyect/TO/ong.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaOng{

    //Habria que juntar las dos funciones en una sola, acutalmente esta asi para hacer pruebas
    public function sacarOng($nombreOng)
    {
        $crud = new CRUD();
        $crud->consultaPreparada("SELECT * FROM ONG WHERE nombre_ong = :nombre_ong", array(':nombre_ong' => $nombreOng));
    }


    public function creacion($nombreOng, $puntosOng, $idOng = null)
    {
        $objetoOng = new Ong();
        $objetoOng->__set('idOng',$idOng);
        $objetoOng->__set('nombreOng', $nombreOng);
        $objetoOng->__set('puntosOng', $puntosOng);
        return $objetoOng;
    }

    public function sumaPuntosOng($ong, $puntos) { 
        $ong->__set('puntos', ($ong->__get('puntos') + $puntos));
        $crud = new CRUD();
        $crud->consultaPreparada("UPDATE ong SET puntos_ong = :puntos_ong WHERE nombre_ong=:nombre_ong", array(':puntos_ong' => $ong->get('puntosOng'), ':nombre_ong' => $ong->get('nombreOng')));
        return true;
    }

}

?>