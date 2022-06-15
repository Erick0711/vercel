<?php
    $destinatario = 'maicolarteaga0711@gmail.com';
    // ESTO ES PARA EL CORREO AL QUE SE ENVIARA EL MENSAJE

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $asunto = $_POST['mensaje'];

    // $header = "ENVIADO DESDE EL PORTAFOLIO DE MAICOL ERICK";

    $mensajeCompleto = $asunto ."\nAtentamente:". $nombre. " " . $apellido. $correo;
    
    mail($destinatario, "Contacto",$mensajeCompleto);

    header("Location:index.html");
    // echo "<script>alert('Correo Enviado')</script>";
    // echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";
?>

<div class="container">

        <form action="./correos.php" method="POST" class="contacto">
            <h1>CONTACTANOS</h1>
            <div class="inputBox">
            <input type="text" name="nombre" id="" required="required">
            <span>Nombre</span>
            </div>

            <div class="inputBox">
            <input type="text" name="apellido" id="" required="required">
            <span>Apellido</span>

            <div class="inputBox">
            <input type="email" name="correo" id="" required="required">
            <span>Correo</span>

            <div class="inputBox">
            <textarea name="mensaje" id="" cols="30" rows="10" required="required"></textarea>
            <span>Asunto</span>

            <input type="submit" value="Enviar" class="enviar">
        </form>

    </div>
