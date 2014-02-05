<?php 

$nombre = $_POST['Name'];
$mail = $_POST['Email'];
$mensaje = $_POST['Enquiry'] . " \r\n";


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "This message was sent by " . $nombre .  " \r\n";
$mensaje .= "Email: " . $mail . " \r\n";
$mensaje .= "Enquiry: " . $_POST['Enquiry'] . " \r\n";
$mensaje .= "Sent on " . date('d/m/Y', time());

$para = 'hello@wearedenada.eu';
$asunto = 'New message';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Message succesfully sent';
 ?> 