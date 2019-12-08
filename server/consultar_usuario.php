<?php
include 'conexion.php';

$consulta = "select * from heroku_b573b04d84016ce.contador";
$resultado = $conexion -> query($consulta);
$rows = array();
while($r = mysqli_fetch_assoc($resultado)) {
    $rows[] = $r;
}
echo json_encode($rows);

$resultado -> close();


?>
