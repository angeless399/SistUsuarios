<?php
$destinatario = "fgmendez07@gmail.com";
$asunto = "Mensaje de Prueba";
$mensaje = "Este es mi primer mensaje por correo desde PHP";
$encabezado = "SistemaUsuarios";
$mail = mail($destinatario, $asunto, $mensaje, $encabezado)? print ("correo enviado") : print ("error al enviar correo");
?>