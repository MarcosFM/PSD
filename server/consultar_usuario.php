<?php
include 'conexion.php';

$consulta = "select * from heroku_b573b04d84016ce.users";
$resultado = $conexion -> query($consulta);

echo $resultado;

$resultado -> close();

?>
