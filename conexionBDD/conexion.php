<<<<<<< HEAD
<?php

class conexionBDD{
    public static function conectarBDD(){
        define('servidor','localhost');
        define('nombre_db','ximas');
        define('usuario','root');
        define('password','');

        $opciones=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
=======
<?php 
class Conexion{	  
    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'prueba-datatables');
        define('usuario', 'root');
        define('password', '');
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
>>>>>>> 83212e516c9573504eae7d5780cbed0f307700c3
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}