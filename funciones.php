<?php
function conexion(){
    $user = "root";
    $server = "localhost";
    $pass = "";
    $db = "SistemaUsuarios";
    $conexion = mysqli_connect($server,$user,$pass,$db) or DIE("ERROR DE CONEXION");
    return $conexion;
}

function borrar($id){
    $conexion = conexion();
    $result = 'false';
    $sql="DELETE FROM usuarios WHERE id_usuario='$id'";
    $borrar=mysqli_query($conexion,$sql);
    if($borrar){
        return $result = 1;
    }else {
        return $result = 0;
    }
}


function editar($id,$nombre,$apellido,$email,$pass){
    $conexion = conexion();
    $pass = password_hash($pass,PASSWORD_DEFAULT);
    $sql="UPDATE usuarios SET nombre='$nombre', apellido='$apellido', email='$email', pass='$pass' WHERE id_usuario='$id'";
    $update=mysqli_query($conexion,$sql);
    if($update){
        return $result = 1;
    }else {
        return $result = 0;
    }
}

function registrar($nombre,$apellido,$email,$pass){
    $conexion = conexion();
    $sql ="INSERT INTO usuarios (nombre, apellido, email, pass) VALUES ('$nombre','$apellido','$email','$pass')";
    $insertar = mysqli_query($conexion,$sql);
    if($insertar){
        return $result = 1;
    }else {
        return $result = 0;
    }
}


?>