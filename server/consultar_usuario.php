<?php
include 'conexion.php';

$consulta = "select * from heroku_b573b04d84016ce.users";
$resultado = $conexion -> query($consulta);

$rows = array();
while($r = mysqli_fetch_assoc($consulta)) {
    $rows[] = $r;
}
print json_encode($rows);

$resultado -> close();

?>
