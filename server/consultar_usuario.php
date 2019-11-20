<?php
include 'conexion.php';

$sth = mysqli_query("select * from heroku_b573b04d84016ce.users");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
echo json_encode($rows);

?>
