<?php
class Conexion{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $DB = "ayudaong";
    
    /**
     * Conecta a la BBDD
     * 
     * @return object $conn | Objeto de tipo PDO 
     */
    function conexionBBDD(){
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->DB", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            die("Error:". $e->getMessage());
        }
    }
}
?>