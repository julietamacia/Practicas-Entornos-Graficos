<?php
$estado = "";

if(isset($_POST['recomendar'])) {
    $tu_nombre = $_POST['tu_nombre'];
    $email_amigo = $_POST['email_amigo'];

    $destinatario = $email_amigo;
    $asunto = "¡Te recomiendo este sitio web!";

    $cuerpo = "Hola!\n\nTu amigo $tu_nombre te recomienda visitar nuestro sitio web: https://www.ejemplo.com \n\nSaludos!";
    $cabeceras = "From: recomendaciones@sitioejemplo.com\r\n";

    if(mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
        $estado = "Recomendación enviada con éxito a $email_amigo!";
    } else {
        $estado = "Error al enviar el correo de recomendación.";
    }
}
?>

<html>
<head>
    <title>Recomendar el Sitio Web</title>
</head>
<body>
    <h2>Recomendar el Sitio Web a un amigo</h2>
    <p><?php echo $estado; ?></p>

    <form action="" method="post">
        <label for="tu_nombre">Tu Nombre:</label><br>
        <input type="text" id="tu_nombre" name="tu_nombre" required><br><br>

        <label for="email_amigo">Correo electrónico de tu amigo:</label><br>
        <input type="email" id="email_amigo" name="email_amigo" required><br><br>

        <input type="submit" name="recomendar" value="Enviar recomendación">
    </form>
</body>
</html>