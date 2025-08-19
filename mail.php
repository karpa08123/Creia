<?php
$to      = 'chuthullu08123@gmail.com';
$subject = 'el asunto';
$message = '¡Hola!';
$headers = "From: prueba@localhost\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Correo enviado!";
} else {
    echo "Error al enviar el correo :(";
}
?>
