<?php
include 'conexion.php';
$username = $_POST['username'];
$password = $_POST['password'];
$nivel = $_POST['nivel'];
$avatar = $_POST['avatar'];
$cover = $_POST['cover'];

$username = !empty($username) ? $username : null;
$password = !empty($password) ? $password : null;
$nivel = !empty($nivel) ? $nivel : null;
$avatar = !empty($avatar) ? $avatar : null;
$cover = !empty($cover) ? $cover : null;

$consulta = "insert into heroku_b573b04d84016ce.users (username, password, nivel, avatar, cover) 
VALUES ('".$username."','".$password."','".$nivel."','".$avatar."','".$cover."')";

//$consulta = "insert into heroku_b573b04d84016ce.users (username, password, nivel, avatar, cover) 
//VALUES ('marcos','molina','', null , null)";

if (mysqli_query($conexion, $consulta)){ 
  echo "Nuevo registro exitoso";
} else{
  echo "Error: " .$consulta. "<br>".mysqli_error($conexion);
}

mysqli_close($conexion);
?>
