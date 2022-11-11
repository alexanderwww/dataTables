<?php

include_once 'conexion.php';

$objeto=new conexionBDD();
$conexion=$objeto->conectarBDD();

$consulta="SELECT * FROM listatareas";

$resultado=$conexion->prepare($consulta);
$resultado->execute();

$data=$resultado->fetchAll(PDO::FETCH_ASSOC);


print json_encode($data,JSON_UNESCAPED_UNICODE);
// echo array('Data'=>$data);

$conexion=null;

?>