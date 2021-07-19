<?php
//borrar.php
if(isset($_GET['s']) && $_GET['s']==1){
    echo "USUARIO ELIMINADO";
}
//sesion.php
if(isset($_GET['u'])){
    echo "USUARIO o CONTRASEÑA INCORRECTA";
}
//registrar.php
if(isset($_GET['t'])){
    echo "USUARIO REGISTRADO, INICIE SESION";
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
    <form action="sesion.php" method="POST">
        <label for="">Email </label><input type="email" name="email" required><br>
        <label for="">Contraseña </label><input type="password" name="pass" required><br>
        <input type="submit" value="Ingresar">
    </form>
    <a href="InterfazRegistro.html">Registrarme</a>
</body>
</html>