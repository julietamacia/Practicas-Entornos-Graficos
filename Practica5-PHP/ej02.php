<?php
$mensaje_estado = "";

if(isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email_remitente = $_POST['email'];
    $consulta = $_POST['mensaje'];

    $destinatario = "webmaster@dominio.com";
    $asunto = "Nueva consulta de contacto de: " . $nombre;

    $cuerpo = "Nombre: " . $nombre . "\n";
    $cuerpo .= "Email: " . $email_remitente . "\n";
    $cuerpo .= "Mensaje: " . $consulta . "\n";

    $cabeceras = "From: " . $email_remitente . "\r\n";

    if(mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        $mensaje_estado = "Su consulta ha sido enviada correctamente. Nos pondremos en contacto con usted pronto.";
    } else {
        $mensaje_estado = "Hubo un error al enviar el mensaje. Intente nuevamente.";
    }
}
?>

<html>
    <head>
        <title>Formulario de Contacto</title>
    </head>
    <body>
        <h2>Formulario de Contacto</h2>
        <p style="color: green;"><?php echo $mensaje_estado; ?></p>

        <form action="" method="post">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br><br>

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </body>
</html>