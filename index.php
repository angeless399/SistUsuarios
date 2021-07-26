<?php
//borrar.php
if(isset($_GET['s']) && $_GET['s']==1){
    echo "USUARIO ELIMINADO";
}

//registrar.php
if(isset($_GET['t'])){
    echo "USUARIO REGISTRADO, INICIE SESION";
}
?>
<?php
session_start();
require_once('funciones.php');
if(isset($_POST['enviar'])){
    $conexion = conexion();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql ="SELECT * FROM usuarios WHERE email='$email'";
    $consulta = mysqli_query($conexion, $sql);
    if(mysqli_num_rows($consulta)>0){
        $reg = mysqli_fetch_assoc($consulta);
        if(password_verify($pass,$reg['pass'])){
            $_SESSION['nombre']=$reg['nombre'];
            $_SESSION['id']=$reg['id_usuario'];
            header("location: inicio.php");
        }else{
            echo "Contraseña incorrecta";
            session_destroy();
        }
    }else{
        echo "Usuario incorrecto";
        session_destroy();
    }

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
</head>
<body>
    <h2>Iniciar sesion</h2>
    <form action="" method="POST">
        <label for="">Email </label><input type="email" name="email" required><br>
        <label for="">Contraseña </label><input type="password" name="pass" required><br>
        <input type="submit" value="Ingresar" name='enviar'>
    </form>
    <a href="InterfazRegistro.html">Registrarme</a>
</body>
</html>

