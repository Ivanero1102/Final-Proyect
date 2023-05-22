<?php
include_once("/xampp/htdocs/Final-Proyect/TO/ong.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaOng{

    //Habria que juntar las dos funciones en una sola, acutalmente esta asi para hacer pruebas
    public function sacarOng($idOng)
    {
        $crud = new CRUD();
        $crud->consultaPreparada("SELECT * FROM ONG WHERE id_ong = :id_ong", array(':id_ong' => $idOng));
    }


    public function creacion($idOng, $nombreOng, $puntos, $descripcion, $img)
    {
        $objetoOng = new Ong();
        $objetoOng->__set('idOng',$idOng);
        $objetoOng->__set('nombreOng', $nombreOng);
        $objetoOng->__set('puntos', $puntos);
        $objetoOng->__set('descripcion', $descripcion);
        $objetoOng->__set('img', $img);
        return $objetoOng;
    }

    public function sumaPuntosOng($ong, $puntos) { 
        $ong->__set('puntos', ($ong->__get('puntos') + $puntos));
        $crud = new CRUD();
        $crud->consultaPreparada("UPDATE ong SET puntos=:puntos WHERE id_ong=:id_ong", array(':puntos' => $ong->get('puntos'), ':id_ong' => $ong->get('idOng')));
        return true;
    }

}

?>