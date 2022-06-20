<?php
$server = "bdzsucwzg5z6wtmfchs5-mysql.services.clever-cloud.com";
$user = "ub0mlw08wef3doki";
$pass = "UsHxd7DJC1hgvsTVp62W";
$db = "bdzsucwzg5z6wtmfchs5";

$conexion = new mysqli($server, $user, $pass, $db);

if($conexion->connect_errno){
    die("ERRO CONEXION FAILD".$conexion->connect_errno);
}

?>