<?php
session_start();
if(isset($_SESSION['id'])){
require_once('conexion.php');

$idEditar= $_POST['id_editar'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email', pass='$pass' WHERE id_usuario='$idEditar'";
$update=mysqli_query($conexion,$sql);
    if($update){
        header("location:perfil.php?e=1");
    }else{
        header("location:perfil.php?e=0");
    }
}else{
    header("location:index.php");
}
?>