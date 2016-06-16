<?php
// Check for empty fields
if(empty($_POST['ndocumento'])       ||
   empty($_POST['nombre'])  		||
   empty($_POST['apaterno'])       ||
   empty($_POST['amaterno'])       ||
   empty($_POST['nacimiento'])       ||
   empty($_POST['telefono'])       ||
   empty($_POST['email']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$ndocumento = $_POST['ndocumento'];	
$nombre = $_POST['nombre'];
$apaterno = $_POST['apaterno'];
$amaterno = $_POST['amaterno'];
$nacimiento = $_POST['nacimiento'];
$telefono = $_POST['telefono'];
$email_address = $_POST['email'];
	
// Create the email and send the message
$from = "noreply@capitanmurdock.com";
$to = "luis@coronelsmith.com"; 
$subject = "Lead Clinica Internacional:  $nombre";
$message = "Ha recibido un nuevo mensaje desde landing Leads Clinica Internacional.\n\n"."Aquí los detalles:
   \n\nNombre: $nombre
   \n\nApellido Paterno: $apaterno
   \n\nApellido Materno: $amaterno
   \n\nFecha de Nacimiento: $nacimiento
   \n\nTelefono: $telefono
   \n\nEmail: $email_address";

$headers = "From:" . $from;	
mail($to,$subject,$message,$headers);
return true;			
?>