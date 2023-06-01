<?php
include_once("/xampp/htdocs/Final-Proyect/TO/ong.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaOng{

     /**
     * Saca los datos de la ong seleccionado de la BBDD
     * 
     * @param string $nombreOng | Nombre de la ong
     * @return mixed $crud->consultaPreparada("SELECT * FROM ONG WHERE nombre_ong = :nombre_ong", array(':nombre_ong' => $nombreOng)); | Array con los datos de la BBDD
     * 
     */
    public function sacarOng($nombreOng)
    {
        $crud = new CRUD();
        return $crud->consultaPreparada("SELECT * FROM ONG WHERE nombre_ong = :nombre_ong", array(':nombre_ong' => $nombreOng));
    }

    /**
     * Saca todos datos de todas las ong
     * 
     * @return mixed $total | Array con los datos de la BBDD
     * 
     */
    public function sacarTodasOng()
    {
        $crud = new CRUD();
        $nombre = array();
        $puntos = array();
        foreach ($crud->consulta("SELECT * FROM ONG") as $row){
            array_push($nombre, $row['nombre_ong']);
            array_push($puntos, $row['puntos_ong']);
        }
        $total = array_combine($nombre, $puntos);
        return $total;
    }

    /**
     * Crea un objeto de tipo ong
     * 
     * @param string $nombreOng | Nombre de la ong
     * @param integer $puntosOng | Puntos de la ong
     * @param integer $idOng | Id de la ong, por defecto es null
     * @return object $objetoOng | Objeto de tipo ong
     * 
     */
    public function creacion($nombreOng, $puntosOng, $idOng = null)
    {
        $objetoOng = new Ong();
        $objetoOng->__set('idOng',$idOng);
        $objetoOng->__set('nombreOng', $nombreOng);
        $objetoOng->__set('puntosOng', $puntosOng);
        return $objetoOng;
    }

    /**
     * Suma puntosd a la Ong
     * 
     * @param object $ong | Objeto de tipo usuario
     * @param integer $puntos | Puntos a sumar para la ong
     * @return mixed $crud->consultaPreparada("SELECT * FROM USUARIOS WHERE correo_usuario = :correo_usuario", array(':correo_usuario' => $correoUsuario)); | Array con los datos de la BBDD
     * 
     */
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