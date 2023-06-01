<?php
include_once("/xampp/htdocs/Final-Proyect/TO/punto.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaPunto {
      
    /**
     * Saca los datos de punto seleccionado de la BBDD
     * 
     * @param integer $correoUsuario | Correo del usuario
     * @return mixed  $crud->consultaPreparada("SELECT * FROM PUNTOS WHERE correo_usuario = :correo_usuario", array(':correo_usuario' => $correoUsuario)); | Array con los datos de la BBDD
     * 
     */
    public function sacarPuntos($correoUsuario)
    {
        $crud = new CRUD();
        return $crud->consultaPreparada("SELECT * FROM PUNTOS WHERE correo_usuario = :correo_usuario", array(':correo_usuario' => $correoUsuario));
    }

    /**
     * Crea un objeto de tipo punto
     * 
     * @param integer $idOng | Id de la ong
     * @param string $correoUsuario | Correo del usuario
     * @param integer $puntosGastados | Correo del usuario
     * @param integer $idPunto | Puntos gastados, por defecto vale 0
     * @return object $objetoPunto | Objeto de tipo punto, por defecto vale null
     * 
     */
    public function creacion($idOng ,$correoUsuario ,$puntosGastados = 0, $idPunto = null){
        $objetoPunto = new Punto();
        $objetoPunto->__set('idPunto',$idPunto);
        $objetoPunto->__set('idOng', $idOng);
        $objetoPunto->__set('correoUsuario',$correoUsuario);
        $objetoPunto->__set('puntosGastados', $puntosGastados);
        return $objetoPunto;
    }

    /**
     * Realiza un registro en la BBDD de la donacion realizada, en la tabla puntos
     * 
     * @param object $punto | Objeto de tipo punto
     * 
     */
    public function donacion($punto){
        try {
            $idOng = $punto->__get('idOng');
            $correoUsuario = $punto->__get('correoUsuario');
            $puntosGastados = $punto->__get('puntosGastados');

            $crud = new CRUD();
            $sql = "INSERT INTO puntos (id_ong, correo_usuario, puntos_gastados) VALUES (:id_ong, :correo_usuario, :puntos_gastados)";
            $crud->consultaPreparada($sql, array(':id_ong' => $idOng, ':correo_usuario' => $correoUsuario, ':puntos_gastados'=> $puntosGastados));

                return true;
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
            die();
        }
    }

}

?>
