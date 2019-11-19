<?php
$hostname = 'us-cdbr-iron-east-05.cleardb.net';
$database = 'heroku_b573b04d84016ce';
$username = 'bca36fcb7fd358';
$password = '5ce6530b';

$conexion = new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo 'lo sentimos, el sitio web esta experimentando dificultades y no puede ser accedido de momento';
}else{
    echo 'funciono!';
}

?>
