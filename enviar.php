<?php

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mail = $_POST['email'];
$message = $_POST['subject'];

$header = 'From: '.$mail."\r\n";
$header .= "X-Mailer: PHP/".phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje enviado por: ". $name."\r\n";
$message .="Su email es:".$mail."\r\n";
$message .="Mensaje:".$_POST['subject']."\r\n";
$message .="Enviado el: ".date('d/m/Y', time());

$para = 'velezalan499@gmail.com';
$asunto = 'Envio contacto Serendipia';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");


?>