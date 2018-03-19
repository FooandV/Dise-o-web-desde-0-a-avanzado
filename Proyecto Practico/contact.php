<?php 

$para='freyder@hotmail.com, freyder.otalvaro@gmail.com';/*vaviable*/

$asunto='Mensaje desde mi nueva pagina';/*varialbe*/

$mailheader="From: ".$_POST["email"]."\r\n";
$mailheader .="Replay-To: ".$_POST["email"]."\r\n";
$mailheader .="Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\r\n";
$MESSAGE_BODY = "\n<br>: ".$_POST["email"]."\n";
$MESSAGE_BODY = "\n<br>Mensaje: ".n12br($_POST["name"])."\n";


mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("Error la enviar email!")


header('Location: http://www.freyder.com')

 ?>