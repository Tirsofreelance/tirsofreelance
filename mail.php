<?php 

$nombre = $_POST['ContactName'];
$mail = $_POST['ContactEmail'];
$mensaje = $_POST['ContactComment'] . " \r\n";


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "This message was sent by " . $ContactName .  " \r\n";
$mensaje .= "ContactEmail: " . $ContactEmail . " \r\n";
$mensaje .= "Enquiry: " . $_POST['ContactComment'] . " \r\n";
$mensaje .= "Sent on " . date('d/m/Y', time());

$para = 'hello@wearedenada.com';
$asunto = 'New message';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo 'Thank you very much. Message succesfully sent';
 ?> 