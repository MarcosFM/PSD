<?php
include 'conexion.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nivel = $_POST['nivel'];
$avatar = $_POST['avatar'];
$cover = $_POST['cover'];
echo ("done");

$consulta = "insert into heroku_b573b04d84016ce.users (username,password,nivel,avatar,cover) 
VALUES ('".$username."','".$password."','".$nivel."','".$avatar."','".$cover."')";

mysqli_query($conexion, $consulta) or die (mysqli_error());
mysqli_close($conexion);
?>
