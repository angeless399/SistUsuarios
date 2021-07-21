<?php
$user = "root";
$server = "localhost";
$pass = "";
$db = "SistemaUsuarios";

$conexion = mysqli_connect($server,$user,$pass,$db);

if($conexion){
    echo "conexion exitosa :)";
}else{
    echo "error";
}
?>