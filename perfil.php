<?php
session_start();
if(isset($_SESSION['id'])){
     $id = $_SESSION['id'];

    require_once('funciones.php');
    $conexion = conexion();
    
    if(isset($_GET['e']) && $_GET['e']==1){
        echo 'PERFIL MODIFICADO';
    }elseif(isset($_GET['e']) && $_GET['e']==0) {
        echo 'ERROR al MODIFICAR PERFIL';
    }

    $sql ="SELECT * FROM usuarios WHERE id_usuario = '$id'";
    $consulta = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($consulta)>0){
            $reg = mysqli_fetch_assoc($consulta);
        ?>

        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Perfil</title>
        </head>
        <body>
            <header>
                <?php
                include_once('encabezado.php');
                ?>
            </header>
   
            <h2>Mi Perfil</h2><br>
            <p><?php echo $reg['nombre']; ?></p><br>
            <p><?php echo $reg['apellido']; ?></p><br>
            <p><?php echo $reg['email']; ?></p><br>
            <a href="editar_perfil_f.php">Editar </a><br>
            <a href="borrar.php">Borrar </a>
        </body>
        </html>
        <?php
        }
}else{
    header("location:index.php");
}
?>