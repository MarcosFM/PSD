<?php
include 'conexion.php';

$consulta = "select * from heroku_b573b04d84016ce.users";
$resultado = $conexion -> query($consulta);

while($fila = $resultado -> fetch_array()){
    $usuario[] = array_map('utf8_encode', $fila);
}

echo json_encode($usuario);
$resultado -> close();

?>