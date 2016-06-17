<?php
   ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

// Check for empty fields


if(empty($_POST['NUM_DOC_IDENTIDAD'])       ||
   empty($_POST['TIP_DOC_IDENTIDAD'])       ||
   empty($_POST['NOMBRES'])  		||
   empty($_POST['APE_PATERNO'])       ||
   empty($_POST['APE_MATERNO'])       ||
   empty($_POST['FECHA_NACIMIENTO'])       ||
   empty($_POST['COD_SEXO'])       ||
   empty($_POST['TIP_TELEFONO_1'])       ||
   empty($_POST['NUM_TELEFONO_1'])       ||
   empty($_POST['CORREO_1']) 		||
   !filter_var($_POST['CORREO_1'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$COD_EMPRESA = $_POST['COD_EMPRESA'];
$NUM_DOC_IDENTIDAD = $_POST['NUM_DOC_IDENTIDAD'];
$TIP_DOC_IDENTIDAD = $_POST['TIP_DOC_IDENTIDAD'];
$NOMBRES = $_POST['NOMBRES'];
$APE_PATERNO = $_POST['APE_PATERNO'];
$APE_MATERNO = $_POST['APE_MATERNO'];
$FECHA_NACIMIENTO = $_POST['FECHA_NACIMIENTO'];
$COD_SEXO = $_POST['COD_SEXO'];
$TIP_TELEFONO_1 =   $_POST['TIP_TELEFONO_1'];
$NUM_TELEFONO_1 = $_POST['NUM_TELEFONO_1'];
$CORREO_1 = $_POST['CORREO_1'];

	

// Create the email and send the message
$from = "noreply@capitanmurdock.com";
$to = "luis@coronelsmith.com"; 
$subject = "Lead Clinica Internacional";
$message = "Ha recibido un nuevo mensaje desde landing Leads Clinica Internacional. Aquí los detalles:
   \nNOMBRES: ". $NOMBRES .
   "\nAPE_PATERNO: ". $APE_PATERNO .
   "\nAPE_MATERNO: ". $APE_MATERNO .
   "\nCOD_EMPRESA: ". $COD_EMPRESA .
   "\nNUM_DOC_IDENTIDAD: ". $NUM_DOC_IDENTIDAD .
   "\nTIP_DOC_IDENTIDAD: ". $TIP_DOC_IDENTIDAD .
   "\nFECHA_NACIMIENTO: ". $FECHA_NACIMIENTO .
   "\nCOD_SEXO: ". $COD_SEXO .
   "\nTIP_TELEFONO_1: ". $TIP_TELEFONO_1 .
   "\nNUM_TELEFONO_1: ". $NUM_TELEFONO_1 .
   "\nCORREO_1: ". $CORREO_1;

$headers = "From:" . $from;	
mail($to,$subject,$message,$headers);
return true;			
?>