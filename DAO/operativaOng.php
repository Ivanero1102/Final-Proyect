<?php
include_once("/xampp/htdocs/Final-Proyect/TO/ong.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaOng{

    //Habria que juntar las dos funciones en una sola, acutalmente esta asi para hacer pruebas
    public function sacarOng($nombreOng)
    {
        $crud = new CRUD();
        return $crud->consultaPreparada("SELECT * FROM ONG WHERE nombre_ong = :nombre_ong", array(':nombre_ong' => $nombreOng));
    }

    public function sacarTodasOng()
    {
        $crud = new CRUD();
        $nombre = array();
        $puntos = array();
        foreach ($crud->consulta("SELECT * FROM ONG") as $row){
            // print_r($row['puntos_ong']);
            array_push($nombre, $row['nombre_ong']);
            array_push($puntos, $row['puntos_ong']);
        }
        $total = array_combine($nombre, $puntos);
        return $total;
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
        $ong->__set('puntosOng', ($ong->__get('puntosOng') + $puntos));
        $crud = new CRUD();
        $punto = $ong->__get('puntosOng');
        $nombre = $ong->__get('nombreOng');
        $crud->consultaPreparada("UPDATE ong SET puntos_ong = :puntos_ong WHERE nombre_ong=:nombre_ong", array(':puntos_ong' => $punto, ':nombre_ong' => $nombre));
        return true;
    }

}

?>