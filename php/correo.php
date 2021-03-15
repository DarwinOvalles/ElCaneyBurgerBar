<?php
    $destinatario ='darovalles.do@gmail.com';

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];

    $header = "Reserva";

    mail($destinatario, $nombre, $telefono, $header);
    echo "<script>alert('Reserva realizada exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>