<?php
    $destino = "katabetancourt0506@gmail.com"
    $nombre = $_POST["nombre"] 
    $correo = $_POST["correo"] 
    $teléfono = $_POST["teléfono"] 
    $mensaje = $_POST["mensaje"] 
    $contenido = "nombre: " . $nombre . "\ncorreo: " . $correo . "\nteléfono: " . $teléfono "\nmensaje" . $mensaje 
    mail($destino,"contacto", $contenido)
    header("location:confirma.html");
?>