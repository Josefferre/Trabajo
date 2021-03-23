<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$mail = $_POST['mail'];
$message = $_POST['message'];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer: PHP/". phpversion() .  "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$message = "Este mensaje fue enviado por: " . $name . "\r\n"
$message .= "Su e-mail es: " . $mail . "\r\n"
$message .= "El Asunto es: " . $asunto . "\r\n"
$message .= "Mensaje: " . $_POST['message'] .

$para = 'josefernelsf@ufps.edu.co';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:contacto.html");

?>
