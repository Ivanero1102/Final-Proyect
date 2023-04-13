<?php
include_once('/xampp/htdocs/Final-Proyect/DS/conexion.php');
class CRUD{
    private $conexion;
    public function  __construct(){
        $this->conexion = new Conexion();
    }

    public function consultaPreparada($sql = "", $valores = array()){
        if($sql != ""){
            $conn = $this->conexion->conexionBBDD();
            $consulta = $conn->prepare($sql);
            $consulta->execute($valores);
            return $datos = $consulta->fetch(PDO::FETCH_ASSOC);
            // return $datos;
        }else{
            return 0;
        }
    }

    public function consulta($sql = ""){
        if($sql != ""){
            $conn = $this->conexion->conexionBBDD();
            return $conn->query($sql);
        }else{
            return 0;
        }
    }
}

?>