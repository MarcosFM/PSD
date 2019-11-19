<?php
include 'conexion.php';
$username = $_POST['root'];
$password = $_POST['root'];
$nivel = $_POST['root'];
$avatar = $_POST['root'];
$cover = $_POST['root'];

$consulta = "select * from heroku_b573b04d84016ce.users";

mysqli_query($conexion, $consulta) or die (mysqli_error());
echo "jala!";
mysqli_close($conexion);

?>
