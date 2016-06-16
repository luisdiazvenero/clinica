<?php
   ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

// Check for empty fields


if(empty($_POST['ndocumento'])       ||
   empty($_POST['nombre'])  		||
   empty($_POST['paterno'])       ||
   empty($_POST['materno'])       ||
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
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$nacimiento = $_POST['nacimiento'];
$telefono = $_POST['telefono'];
$email_address = $_POST['email'];

	

// Create the email and send the message
$from = "noreply@capitanmurdock.com";
$to = "luis@coronelsmith.com"; 
$subject = "Lead Clinica Internacional:".  $nombre;
$message = "Ha recibido un nuevo mensaje desde landing Leads Clinica Internacional.\n\n"."Aquí los detalles:
   \nNombre:". $nombre .
   "\nApellido Paterno:". $paterno .
   "\nApellido Materno:". $materno .
   "\nNumero de documento:". $ndocumento .
   "\nFecha de Nacimiento:". $nacimiento .
   "\nTelefono:". $telefono .
   "\nEmail:". $email_address;

$headers = "From:" . $from;	
mail($to,$subject,$message,$headers);
return true;			
?>