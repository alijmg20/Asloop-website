<?php

class RepositorioUsuario {

    //Obtener Todos
    public static function getAll($conexion) {

        //declaracion de un arreglo de usuario
        $usuarios = array();

        if (isset($conexion)) {
            try {
                //incluye todo lo que contiene el archivo Usuario.inc.php

                include_once 'Usuario.inc.php';

                //aqui escribiremos la instruccion que vamos a ejecutar en la base de datos
                $sql = "SELECT * FROM usuarios ";

                //con prepare sabremos que el texto esta bien escrito
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                //count me dice cuantas cosas hay en esta variable
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario($fila['id'], $fila['nombre'], $fila['email'], $fila['password']
                                , $fila['fecha_registro'], $fila['activo']);
                    }
                } else {
                    print "No hay Usuarios.";
                }
            } catch (PDOException $ex) {

                print"ERROR " . $ex->getMessage();
            }
        }
        return $usuarios;
    }
    
    public static function getNumeroUsers($conexion){
        $total_usuarios = null;
        
        if(isset($conexion)){
            try {
                $sql = "SELECT COUNT(*) as total FROM usuarios";
                
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> execute();
                
                //funcion de recuperar
                $resultado = $sentencia -> fetch();
                
                $total_usuarios = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex -> getMessage();
            }
        }
        return $total_usuarios;
    }
    
    public static function insertar_usuario($conexion,$usuario){
        $usuario_ingresado = false;
        
        if(isset($conexion)){
            try{
                $sql = "INSERT INTO usuarios(nombre,email,password,fecha_registro,activo) VALUES(:nombre,:email,:password,NOW(),0)";
                $sql = $conexion -> prepare($sql);
                 
                $sentencia ->binParam('nombre',$usuario->getNombre(),PDO::PARAM_STR);
                $sentencia ->binParam('email',$usuario->getEmail(),PDO::PARAM_STR);
                $sentencia ->binParam('password',$usuario->getPassword(),PDO::PARAM_STR);
                
            } catch (PDOException $ex) {
                print 'ERROR: '. $ex ->getMessage();
            }
        }
        
        return $usuario_ingresado;
    }
}
