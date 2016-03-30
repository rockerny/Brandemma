<?php
//Variables del formulario de contacto  AMET

@$nombre = addslashes($_POST['TName']);
@$email = addslashes($_POST['TEmail']);
@$comentario = addslashes($_POST['TBody']);




$message=
"Empresa: $nombre \n\n

E-mail: $email \n\n
Comentario: $comentario\n\n
Mensaje de contacto página web";



$cabeceras = "Responder a : $email";
$asunto = utf8_decode("Mensaje desde la página Web");

$email_to = "ernyegoavil@gmail.com";
$contenido = utf8_decode("$message");

$headers = "From: $email\n";
//$headers .= "Bcc: jfersalazar1977@gmail.com\n"; 



//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$headers )) {

//Confirmación mensaje Ok
die("Su mensaje se envió correctamente, en la brevedad nos pondremos en contacto con usted. Gracias.");
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}
?>
