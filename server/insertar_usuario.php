<?php
include 'conexion.php';
$fk = $_POST['fk'];

//$fk = !empty($fk) ? $fk : 0;

$consulta = "UPDATE heroku_b573b04d84016ce.contador SET contador =  contador+1 WHERE fk = '".$fk."'";

//$consulta = "insert into heroku_b573b04d84016ce.users (username, password, nivel, avatar, cover) 
//VALUES ('marcos','molina','', null , null)";

if (mysqli_query($conexion, $consulta)){ 
  echo $fk;
} else{
  echo "Error: " .$consulta. "<br>".mysqli_error($conexion);
}

mysqli_close($conexion);
?>
