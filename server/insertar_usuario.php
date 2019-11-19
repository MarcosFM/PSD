<?php
include 'conexion.php';
$username = $_POST['root'];
$password = $_POST['root'];

$consulta = "insert into heroku_b573b04d84016ce.users (username,passord) values ('".$username."','".$password."')";
mysqli_query($conexion, $consulta) or die (mysqli_error());
mysqli_close($conexion);
?>