<?php
session_start();
if(isset($_SESSION['id'])){
require_once('conexion.php');

$idBorrar=$_SESSION['id'];

$sql="DELETE FROM usuarios WHERE id_usuario='$idBorrar'";
$borrar=mysqli_query($conexion,$sql);

if($borrar){
    header("location:index.php?s=1");
}else{
    header("location:index.php?s=0");
}

}else{
    header("location:index.php");
}
?>