<?php

class conexionBDD{
    public static function conectarBDD(){
        define('servidor','localhost');
        define('nombre_db','curso_data_tables');
        define('usuario','root');
        define('password','');

        $opciones=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
        try{
            $conexion=new PDO('mysql:host='.servidor.'; dbname='.nombre_db, usuario, password, $opciones);
            return $conexion;
        }catch(Exception $e){
            die('Error de conexion:'.$e->getMessage());
        }
    }

}


?>