<?php

class Conexion {

    //Atributos
    private static $conexion;

    //metodos
    //Se utiliza para abrir la base de datos
    public static function abrirConexion() {
        //con isset se devuelve un booleano de lo que queremos obtener
        if (!isset(self::$conexion)) {
            try {

                //esta linea incluye el archivo config.inc.php
                include_once 'config.inc.php';

                //esta linea toma el nombre y crea una nueva conexion
                self::$conexion = new PDO("mysql:host=$nombre_servidor; dbname=$nombre_base_datos", $nombre_usuario, $password);
                

                //Asi colocamos por defectos que la base de datos me muestren errores
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                //si no tuvieramos utf8 los caracteres no se mostraran bien
                self::$conexion->exec("SET CHARACTER SET utf8");
                
                //funcionaaaaaaaaaaaaaa
                //print"CONEXION ABIERTA <br>";
                
            } catch (PDOException $ex) {
                
                //etiqueta que sirve para salto de linea en html
                print"ERROR: " . $ex->getMessage() . "<br>";
                
                //termina la conexion y cualquier intento de iniciarla
                die();
            }
        }
    }

    public static function cerrarConexion() {
        if (isset(self::$conexion)) {
            self::$conexion = null;
            //funcionaaaaaa
           // print "CONEXION CERRADA";
        }
    }
    
    public static function getConexion() {
        return self::$conexion;
    }
    
    
    
}
