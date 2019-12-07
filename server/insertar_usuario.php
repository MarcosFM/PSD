<?php
include 'conexion.php';
$username = $_POST['username'];
$password = $_POST['password'];

$username = !empty($username) ? $username : null;
$password = !empty($password) ? $password : null;

$consulta = "insert into heroku_b573b04d84016ce.users (username, password) 
VALUES ('".$username."','".$password."')";

//$consulta = "insert into heroku_b573b04d84016ce.users (username, password, nivel, avatar, cover) 
//VALUES ('marcos','molina','', null , null)";

if (mysqli_query($conexion, $consulta)){ 
  echo $username . "," . $password;
} else{
  echo "Error: " .$consulta. "<br>".mysqli_error($conexion);
}

mysqli_close($conexion);
?>
