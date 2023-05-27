<?php
include_once("/xampp/htdocs/Final-Proyect/TO/punto.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaPunto {
      
    /**
     * Saca los datos de punto seleccionado de la BBDD
     * 
     * @param string $idUsuario | Id del usuario
     * @return mixed  $crud->consultaPreparada("SELECT * FROM PUNTOS WHERE id_usuario = :id_usuario", array(':id_usuario' => $idUsuario)); | Array con los datos de la BBDD
     * 
     */
    public function sacarPuntos($idUsuario)
    {
        $crud = new CRUD();
        $crud->consultaPreparada("SELECT * FROM PUNTOS WHERE id_usuario = :id_usuario", array(':id_usuario' => $idUsuario));
    }

    /**
     * Saca los datos del usuario seleccionado de la BBDD
     * 
     * @param string $idUsuario | Id del usuario
     * @param string $idUsuario | Id de la ong
     * @param string $puntosGastados | Correo del usuario
     * @param string $contrasenaUsuario | Contraseña del usuario
     * @return mixed $objetoUsuario | Objeto de tipo usuario
     * 
     */
    public function creacion($idUsuario, $idOng ,$puntosGastados)
    {
        $objetoPunto = new Punto();
        $objetoPunto->__set('idUsuario',$idUsuario);
        $objetoPunto->__set('idOng', $idOng);
        $objetoPunto->__set('puntosGastados', $puntosGastados);
        return $objetoPunto;
    }

    public function sumaPuntos($punto, $puntos) { // MIRANDO VIDEOS (+puntosActuales, +totalPuntos)

        // Actualización de los puntos en el objeto $punto
        $punto->__set('puntosActuales', ($punto->__get('puntosActuales') + $puntos));
        $punto->__set('totalPuntos', ($punto->__get('totalPuntos') + $puntos));

        // Actualización de puntos en la base de datos
        $conn = (new CRUD())->consultaPreparada("UPDATE puntos SET puntos_actuales=:puntos_actuales, total_puntos=:total_puntos WHERE id_usuario=:id_usuario", array(':puntos_actuales' => $punto->get('puntosActuales'), ':total_puntos' => $punto->get('totalPuntos'), ':id_usuario' => $punto->get('idUsuario')));
        return true;
    }

    /* La funcion recibe un objeto de tipo punto con los puntos que se van a restar, ejecuta la resta de los puntos y actualiza la BBDD */
    /* La funcion no devuelve un mensaje en caso de que todo haya funcionado y un mensaje de error en caso contrario */
    public function restaPuntos($punto, $puntos) { // DONANDO PUNTOS (+puntosGastados, -puntosActuales)

        // Actualización de los puntos en el objeto $punto
        if ($punto->__get('puntosActuales') >= $punto->__get('puntosGastados')) { // Si tiene los puntos suficientes...
            $punto->__set('puntosGastados', ($punto->__get('puntosGastados') + $puntos));
            $punto->__set('puntosActuales', ($punto->__get('puntosActuales') - $puntos));

            // Actualización de puntos en la base de datos
            $conn = (new CRUD())->consultaPreparada("UPDATE puntos SET puntos_actuales=:puntos_actuales, puntos_gastados=:puntos_gastados WHERE id_usuario=:id_usuario", array(':puntos_actuales' => $punto->get('puntosActuales'), ':puntos_gastados' => $punto->get('puntosGastados'), ':id_usuario' => $punto->get('idUsuario')));
            return true;
        } else {
            return false;
        }
    }

}

?>
