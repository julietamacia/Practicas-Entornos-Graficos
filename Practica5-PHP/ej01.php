<?php
$destinatario = "destinatarioejemplo@dominio.com";
$asunto = "Correo de prueba con formato HTML";

$cuerpo = "
<html>
<head>
    <title>Correo de prueba</title>
</head>
<body>
    <h1 style='color: blue;'> Hola! </h1>
    <p>Este es un correo de prueba con formato HTML.</p>
    <p>¡Gracias por tu atención!</p>
</body>
</html>
";

$cabeceras = "MIME-Version: 1.0" . "\r\n";
$cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$cabeceras .= "From: remitente@dominio.com" . "\r\n";

if(mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    echo "Correo enviado correctamente.";
} else {
    echo "Error al enviar el correo.";
}
?>