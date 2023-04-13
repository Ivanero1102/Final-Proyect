<?php
class Conexion{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $DB = "ayudaong";
    
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