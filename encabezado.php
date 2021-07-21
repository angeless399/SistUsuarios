<?php
if(isset($_SESSION['id'])){
    echo $_SESSION['nombre']." | ";
    echo '<a href="perfil.php">ver perfil</a> | ';
    echo '<a href="cerrarsesion.php">cerrar sesion</a>';
}else{    
    echo '<a href="index.php">login</a>';
    session_destroy();
}
?>