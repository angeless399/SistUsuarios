<?php
require_once('funciones.php');
$conexion = conexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql ="INSERT INTO usuarios (nombre, apellido, email, pass) VALUES ('$nombre','$apellido','$email','$pass')";

$insertar = mysqli_query($conexion,$sql);
if($insertar){
    header("location:index.php?t");
}
?>