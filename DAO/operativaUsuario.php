<?php
include_once("/xampp/htdocs/Final-Proyect/TO/usuario.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaUsuaio{

    /**
     * Saca los datos del usuario seleccionado de la BBDD
     * 
     * @param string $correoUsuario | Correo del usuario
     * @return mixed $crud->consultaPreparada("SELECT * FROM USUARIOS WHERE correo_usuario = :correo_usuario", array(':correo_usuario' => $correoUsuario)); | Array con los datos de la BBDD
     * 
     */
    public function sacarUsuario($correoUsuario)
    {
        $crud = new CRUD();
        return $crud->consultaPreparada("SELECT * FROM USUARIOS WHERE correo_usuario = :correo_usuario", array(':correo_usuario' => $correoUsuario));
    }

    /**
     * Saca los datos del usuario seleccionado de la BBDD
     * 
     * @param string $nombreUsuario | Nombre del usuario
     * @param string $apellidosUsuario | Apellido del usuario
     * @param string $edadUsuario | Edad del usuario
     * @param string $correoUsuario | Correo del usuario
     * @param string $contrasenaUsuario | Contraseña del usuario
     * @param string $puntosGastados | Puntos del usuario, por defecto es 0
     * @param string $idUsuario | Id del usuario, por defecto es null
     * @return mixed $objetoUsuario | Objeto de tipo usuario
     * 
     */
    public function creacion($nombreUsuario, $apellidosUsuario, $edadUsuario, $correoUsuario, $contrasenaUsuario, $puntosUsuario = 0, $idUsuario = null)
    {
        $objetoUsuario = new Usuario();
        $objetoUsuario->__set('idUsuario', $idUsuario);
        $objetoUsuario->__set('nombreUsuario',$nombreUsuario);
        $objetoUsuario->__set('apellidosUsuario', $apellidosUsuario);
        $objetoUsuario->__set('edadUsuario', $edadUsuario);
        $objetoUsuario->__set('correoUsuario', $correoUsuario);
        $objetoUsuario->__set('contrasenaUsuario', $contrasenaUsuario);
        $objetoUsuario->__set('puntosUsuario', $puntosUsuario);
        return $objetoUsuario;
    }

    /**
     * Crea el objeto de tipo usuario empleado para el login
     * 
     * @param string $correoUsuario | Correo del usuario
     * @param string $contrasenaUsuario | Contraseña del usuario
     * @return mixed $objetoUsuario | Objeto de tipo usuario
     * 
     */
    public function creacionLogin($correoUsuario, $contrasenaUsuario)
    {
        $objetoUsuario = new Usuario();
        $objetoUsuario->__set('correoUsuario', $correoUsuario);
        $objetoUsuario->__set('contrasenaUsuario', $contrasenaUsuario);
        return $objetoUsuario;
    }

    /* La funcion recibe un objeto de tipo usuario, con todos los datos que posee un usuario, y se encarga de introducirlo en la base de datos*/
    /*La funcion no devuelve un mensaje en caso de que todo haya funcionado y un mensaje de error en caso contrario*/
    /**
     * Se encarga de introducir un usuario en la base de datos
     * 
     * @param object $usuario | Objeto de tipo usuario
     * @return boolean false | Booleano en caso de que falle el registro
     * @return boolean true | Booleano en caso de que se realice correctamente el registro
     * 
     */
    public function registro($usuario)
    {
        try {
            $nombreUsuario = $usuario->__get('nombreUsuario');
            $apellidosUsuario = $usuario->__get('apellidosUsuario');
            $edadUsuario = $usuario->__get('edadUsuario');
            $correoUsuario = $usuario->__get('correoUsuario');
            $contrasenaUsuario = $usuario->__get('contrasenaUsuario');
            
            $passwordCifrada = password_hash($contrasenaUsuario, PASSWORD_DEFAULT);

            $crud = new CRUD();
            $sql = "SELECT COUNT(*) as total FROM USUARIOS WHERE correo_usuario = :correo_usuario";
            $resultado = $crud->consultaPreparada($sql, array(':correo_usuario' => $correoUsuario));

            if ($resultado['total'] > 0) {
                return false;
            } else {
                $crud = new CRUD();
                $sql = "INSERT INTO USUARIOS (nombre_usuario, apellidos_usuario, edad_usuario, correo_usuario, contrasena_usuario) VALUES (:nombre_usuario, :apellidos_usuario, :edad_usuario, :correo_usuario, :contrasena_usuario)";
                $crud->consultaPreparada($sql, array(':nombre_usuario' => $nombreUsuario, ':apellidos_usuario' => $apellidosUsuario, ':edad_usuario'=> $edadUsuario, ':correo_usuario'=>$correoUsuario,':contrasena_usuario'=>$passwordCifrada));

                return true;
            }
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
            die();
        }
    }

    /**
     * Se encarga de introducir un usuario en la base de datos
     * 
     * @param object $usuario | Objeto de tipo usuario
     * @return boolean false | Booleano en caso de que falle el registro
     * @return boolean true | Booleano en caso de que se realice correctamente el registro
     * 
     */
    public function login($usuario)
    {

        try {

            $correoUsuario = $usuario->__get('correoUsuario');
            $contrasenaUsuario = $usuario->__get('contrasenaUsuario');

            $crud = new CRUD();
            $sql = "SELECT contrasena_usuario FROM USUARIOS WHERE correo_usuario = :correo_usuario";
            $resultado = $crud->consultaPreparada($sql, array(':correo_usuario' => $correoUsuario));

            if ($resultado['contrasena_usuario'] != null) {

                if (password_verify($contrasenaUsuario, $resultado['contrasena_usuario'])) {
                    $_SESSION['usuario'] = $correoUsuario;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            die("Error :" . $e->getMessage());
        }
    }

    /**
     * Se encargara de borrar la sesion $_SESSION['usuario']
     * 
     */
    public function logout()
    {
        try {
            session_unset(); 
            session_destroy(); 

        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }


    public function sumaPuntos($usuario, $sumaPuntos) { // MIRANDO VIDEOS (+puntosActuales, +totalPuntos)

        // Actualización de los puntos en el objeto $punto
        $puntosU = $usuario->__get('puntosUsuario');
        $puntos = $puntosU + $sumaPuntos;
        $usuario->__set('puntosUsuario',$puntos);

        // Actualización de puntos en la base de datos
        $sql = "UPDATE usuarios SET puntos_usuario = :puntos_usuario WHERE correo_usuario = :correo_usuario";
        $puntosUser = $usuario->__get('puntosUsuario');
        $correoUser = $usuario->__get('correoUsuario');
        $conn = (new CRUD())->consultaPreparada($sql, array(':puntos_usuario' => $puntosUser, ':correo_usuario' => $correoUser));
        return true;
    }

    /* La funcion recibe un objeto de tipo punto con los puntos que se van a restar, ejecuta la resta de los puntos y actualiza la BBDD */
    /* La funcion no devuelve un mensaje en caso de que todo haya funcionado y un mensaje de error en caso contrario */
    public function restaPuntos($usuario, $restaPuntos) { // DONANDO PUNTOS (+puntosGastados, -puntosActuales)

        // Actualización de los puntos en el objeto $punto
        if ($usuario->__get('puntosUsuario') >= $restaPuntos) { // Si tiene los puntos suficientes...
            $puntosU = $usuario->__get('puntosUsuario');
            $puntos = $puntosU - $restaPuntos;
            $usuario->__set('puntosUsuario', $puntos);

            // Actualización de puntos en la base de datos
            $sql = "UPDATE usuarios SET puntos_usuario = :puntos_usuario WHERE correo_usuario = :correo_usuario";
            $puntosUser = $usuario->__get('puntosUsuario');
            $correoUser = $usuario->__get('correoUsuario');
            $conn = (new CRUD())->consultaPreparada($sql, array(':puntos_usuario' => $puntosUser, ':correo_usuario' => $correoUser));
            return true;
        } else {
            return false;
        }
    }
}

