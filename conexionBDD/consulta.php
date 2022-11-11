<?php
<<<<<<< HEAD

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
=======
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM clientestienda";

$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

>>>>>>> 83212e516c9573504eae7d5780cbed0f307700c3
