<?php
include_once("/xampp/htdocs/Final-Proyect/TO/usuario.php");
include_once("/xampp/htdocs/Final-Proyect/DS/crud.php");

class OperativaUsuaio{

    //Habria que juntar las dos funciones en una sola, acutalmente esta asi para hacer pruebas
    public function sacarUSuairo($correoUsuario)
    {
        $crud = new CRUD();
        return $crud->consultaPreparada("SELECT * FROM USUARIOS WHERE correo_usuario = :correo_usuario", array(':correo_usuario' => $correoUsuario));
    }

    public function creacion($nombreUsuario, $apellidosUsuario, $edadUsuario, $correoUsuario, $contrasenaUsuario)
    {
        $objetoUsuario = new Usuario();
        $objetoUsuario->__set('idUsuario',null);
        $objetoUsuario->__set('nombreUsuario',$nombreUsuario);
        $objetoUsuario->__set('apellidosUsuario', $apellidosUsuario);
        $objetoUsuario->__set('edadUsuario', $edadUsuario);
        $objetoUsuario->__set('correoUsuario', $correoUsuario);
        $objetoUsuario->__set('contrasenaUsuario', $contrasenaUsuario);
        return $objetoUsuario;
    }

    public function creacionLogin($correoUsuario, $contrasenaUsuario)
    {
        $objetoUsuario = new Usuario();
        $objetoUsuario->__set('correoUsuario', $correoUsuario);
        $objetoUsuario->__set('contrasenaUsuario', $contrasenaUsuario);
        return $objetoUsuario;
    }

    /* La funcion recibe un objeto de tipo usuario, con todos los datos que posee un usuario, y se encarga de introducirlo en la base de datos*/
    /*La funcion no devuelve un mensaje en caso de que todo haya funcionado y un mensaje de error en caso contrario*/
    public function registro($usuario)
    {
        try {
            
            // Atributos del usuario
            // $idUsuario = $usuario->__get('idUsuario');
            $nombreUsuario = $usuario->__get('nombreUsuario');
            $apellidosUsuario = $usuario->__get('apellidosUsuario');
            $edadUsuario = $usuario->__get('edadUsuario');
            $correoUsuario = $usuario->__get('correoUsuario');
            $contrasenaUsuario = $usuario->__get('contrasenaUsuario');
            
            //Cifrar la contrasena 
            $passwordCifrada = password_hash($contrasenaUsuario, PASSWORD_DEFAULT);

            $crud = new CRUD();
            $sql = "SELECT COUNT(*) as total FROM USUARIOS WHERE correo_usuario = :correo_usuario";
            $resultado = $crud->consultaPreparada($sql, array(':correo_usuario' => $correoUsuario));

            // Si el resultado es mayor a 0, significa que el dato ya existe
            if ($resultado['total'] > 0) {
                return false;
            } else {
                //Insertar el usuario 
                $crud = new CRUD();
                $sql = "INSERT INTO USUARIOS (nombre_usuario, apellidos_usuario, edad_usuario, correo_usuario, contrasegna_usuario) VALUES (:nombre_usuario, :apellidos_usuario, :edad_usuario, :correo_usuario, :contrasena_usuario)";
                $crud->consultaPreparada($sql, array(':nombre_usuario' => $nombreUsuario, ':apellidos_usuario' => $apellidosUsuario, ':edad_usuario'=> $edadUsuario, ':correo_usuario'=>$correoUsuario,':contrasena_usuario'=>$passwordCifrada));

                return true;
            }
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
            die();
        }
    }

    /* La funcion recibe un objetpo de tipo usuario, con el nombre del usuario y su contraseña, comprueba que ambos coincidan con las que se encuentran en la BBDD 
        , importante desencriptar la contraseña de la BBDD antes de comparar.
        En caso de que todo coincida, se creara una sesion llamada $_SESSION['usuario'] */
    /*La funcion no devuelve nada*/
    public function login($usuario)
    {

        try {

            
            // Atributos del usuario
            // $idUsuario = $usuario->__get('idUsuario');
            $correoUsuario = $usuario->__get('correoUsuario');
            $contrasenaUsuario = $usuario->__get('contrasenaUsuario');

            // Conexion bbdd 
            // $crud = new CRUD();
            // $sql = "SELECT COUNT(*) as total FROM USUARIOS WHERE id_usuario = :id_usuario";
            // $resultado = $crud->consultaPreparada($sql, array(':id_usuario' => $idUsuario));

            $crud = new CRUD();
            $sql = "SELECT contrasegna_usuario FROM USUARIOS WHERE correo_usuario = :correo_usuario";
            $resultado = $crud->consultaPreparada($sql, array(':correo_usuario' => $correoUsuario));

            if ($resultado['contrasegna_usuario'] != null) {

                //password_verify(string $password, string $hash)
                echo $contrasenaUsuario;
                echo "<br>";
                echo $resultado['contrasegna_usuario'];
                if (password_verify($contrasenaUsuario, $resultado['contrasegna_usuario'])) {
                    // session_start();
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


    /* La funcion se encargara de borrar la sesion $_SESSION['usuario'] */

    /*La funcion no devuelve nada*/
    public function logout()
    {
        try {
            session_unset(); // Eliminar todas las variables de sesión
            session_destroy(); // Destruir la sesión actual

        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}

