<?php

include_once 'conexionBDD/conexion.php';

$objeto=new conexionBDD();
$conexion=$objeto->conectarBDD();

$consulta="SELECT * FROM clientestienda";

$resultado=$conexion->prepare($consulta);
$resultado->execute();

$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print_r($data,JSON_UNESCAPED_UNICODE);

// print_r($data);

$conexion=null;

?>