<?php
include 'conexion.php';

echo "jala!";

$consulta = "select * from heroku_b573b04d84016ce.users";
echo "jalin!2";
mysqli_query($conexion, $consulta) or die (mysqli_error());
echo "jalon!3";
mysqli_close($conexion);

?>
