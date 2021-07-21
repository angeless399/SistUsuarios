<?php
session_start();
if(isset($_SESSION['id'])){
    require_once('funciones.php');
    $conexion = conexion();

    $idEditar=$_GET['id_editar'];

    $sql ="SELECT * FROM usuarios WHERE id_usuario='$idEditar'";
    $consulta = mysqli_query($conexion, $sql);
    $reg = mysqli_fetch_assoc($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <header>
        <?php
        include_once('encabezado.php');
        ?>
    </header>
    <h2>Editar</h2>
    <h4>Ingrese los nuevos datos</h4>
    <form action="" method="post">
        <input type="text" name="id_editar" value="<?php echo $reg['id_usuario']; ?>" hidden>
        <label>Nombre </label><input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>"><br>
        <label>Apellido </label><input type="text" name="apellido" value ="<?php echo $reg['apellido']; ?>"><br>
        <label>Email </label><input type="text" name="email" value ="<?php echo $reg['email']; ?>"><br>
        <label>Contraseña </label><input type="text" name="pass" value ="<?php echo $reg['pass']; ?>"><br>
        <input type="submit" value="Confirmar" name="confirmar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['confirmar'])){
        $editar=editar($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['pass']);
        if($editar){
            header("location:perfil.php?e=1");
        }else{
            header("location:perfil.php?e=0");
        }
    }

}else{
    header("location:index.php");
}
?>