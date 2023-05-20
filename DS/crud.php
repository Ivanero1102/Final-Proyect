<?php
include_once('/xampp/htdocs/Final-Proyect/DS/conexion.php');
class CRUD{
    private $conexion;
    public function  __construct(){
        $this->conexion = new Conexion();
    }

    /**
     * Realizar cualquier consulta preparada
     * 
     * @param string $sql | SQL que quiero realizar
     * @param array $valores | Contiene todos los valores que necesita la sql
     * @return mixed $consulta->fetch(PDO::FETCH_ASSOC) | Todo lo que solicite la sql
     * @return boolean 0 | False
     * 
     */
    public function consultaPreparada($sql = "", $valores = array()){
        if($sql != ""){
            $conn = $this->conexion->conexionBBDD();
            $consulta = $conn->prepare($sql);
            $consulta->execute($valores);
            return $consulta->fetch(PDO::FETCH_ASSOC);
        }else{
            return 0;
        }
    }

    /**
     * Realizar cualquier consulta no preparada
     * 
     * @param string $sql | SQL que quiero realizar
     * @return mixed $conn->query($sql) | Todo lo que solicite la sql
     * @return boolean 0 | False
     * 
     */
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