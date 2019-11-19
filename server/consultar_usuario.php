<?php
include 'conexion.php';

echo "jala!";

$consulta = "select * from heroku_b573b04d84016ce.users";

mysqli_query($conexion, $consulta) or die (mysqli_error());
echo "jala!";
mysqli_close($conexion);

?>
