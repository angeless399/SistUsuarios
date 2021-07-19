<?php
session_start();
require_once('conexion.php');
   
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql ="SELECT * FROM usuarios WHERE email='$email' AND pass='$pass'";
$consulta = mysqli_query($conexion, $sql);

if(mysqli_num_rows($consulta)>0){
    $reg = mysqli_fetch_assoc($consulta);
    $_SESSION['nombre']=$reg['nombre'];
    $_SESSION['id']=$reg['id_usuario'];

    echo "bienvenido ".$reg['id_usuario'].$_SESSION['nombre']."<br>";
    echo '<a href="perfil.php">ver perfil</a><br>';
    echo '<a href="cerrarsesion.php">cerrar sesion</a>';
}else{
    session_destroy();
    header("location:index.php?u");
}
?>