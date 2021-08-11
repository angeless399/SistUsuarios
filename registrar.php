<?php
require_once('funciones.php');
$conexion = conexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pass = password_hash($_POST['pass'],PASSWORD_DEFAULT);

$check="SELECT * FROM usuarios WHERE email='$email'";
$consulta=mysqli_query($conexion,$check);

if($consulta){  
    header("location:index.php?z");
}else{
$sql ="INSERT INTO usuarios (nombre, apellido, email, pass) VALUES ('$nombre','$apellido','$email','$pass')";

$insertar = mysqli_query($conexion,$sql);
if($insertar){
    header("location:index.php?t");
}
}
?>