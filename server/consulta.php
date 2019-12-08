<?php
include 'conexion.php';
$fk = $_GET['fk'];

$consulta = "SELECT * FROM heroku_b573b04d84016ce.contador WHERE fk = '".$fk."'";
$resultado = $conexion -> query($consulta);

while ($fila = $resultado -> fetch_array()){
  $desafio[] = array_map('utf8_encode', $fila);
}

echo json_encode($desafio);
$resultado -> close();

?>
