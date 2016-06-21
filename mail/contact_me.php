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
$TIP_DOC_IDENTIDAD = $_POST['TIP_DOC_IDENTIDAD'];
$NUM_DOC_IDENTIDAD = $_POST['NUM_DOC_IDENTIDAD'];
$PASSWORD = $_POST['PASSWORD'];
$NOMBRES = $_POST['NOMBRES'];
$APE_PATERNO = $_POST['APE_PATERNO'];
$APE_MATERNO = $_POST['APE_MATERNO'];
$CORREO_1 = $_POST['CORREO_1'];
$COD_PERFIL = $_POST['COD_PERFIL'];
$FECHA_NACIMIENTO = $_POST['FECHA_NACIMIENTO'];
$COD_ESTADO_CIVIL = $_POST['COD_ESTADO_CIVIL'];
$COD_SEXO = $_POST['COD_SEXO'];
$DIRECCION = $_POST['DIRECCION'];
$COD_DEPARTAMENTO = $_POST['COD_DEPARTAMENTO'];
$COD_PROVINCIA = $_POST['COD_PROVINCIA'];
$COD_DISTRITO = $_POST['COD_DISTRITO'];
$TIP_TELEFONO_1 =   $_POST['TIP_TELEFONO_1'];
$COD_POSTAL_1 =   $_POST['COD_POSTAL_1'];
$NUM_TELEFONO_1 = $_POST['NUM_TELEFONO_1'];
$TIP_TELEFONO_2 =   $_POST['TIP_TELEFONO_2'];
$COD_POSTAL_2 =   $_POST['COD_POSTAL_2'];
$NUM_TELEFONO_2 = $_POST['NUM_TELEFONO_2'];
$ORIGEN = $_POST['ORIGEN'];
$RUTA_FOTO = $_POST['RUTA_FOTO'];
$PREGUNTA_FILIACION = $_POST['PREGUNTA_FILIACION'];
$COD_PARENTESCO = $_POST['COD_PARENTESCO'];
$FLAG_FILIACION = $_POST['FLAG_FILIACION'];
$COD_TITULAR = $_POST['COD_TITULAR'];
$FLAG_FOTO = $_POST['FLAG_FOTO'];

// Create the email and send the message
$from = "noreply@capitanmurdock.com";
$to = "luis@coronelsmith.com"; 
$subject = "Lead Clinica Internacional";
$message = "Ha recibido un nuevo mensaje desde landing Leads Clinica Internacional. Aquí los detalles:
   \nCOD_EMPRESA: ". $COD_EMPRESA .
   "\nTIP_DOC_IDENTIDAD: ". $TIP_DOC_IDENTIDAD .
   "\nNUM_DOC_IDENTIDAD: ". $NUM_DOC_IDENTIDAD .
   "\nPASSWORD: ". $PASSWORD .
   "\nNOMBRES: ". $NOMBRES .
   "\nAPE_PATERNO: ". $APE_PATERNO .
   "\nAPE_MATERNO: ". $APE_MATERNO .
   "\nCORREO_1: ". $CORREO_1 .
   "\nCOD_PERFIL: ". $COD_PERFIL .
   "\nFECHA_NACIMIENTO: ". $FECHA_NACIMIENTO .
   "\nCOD_ESTADO_CIVIL: ". $COD_ESTADO_CIVIL .
   "\nCOD_SEXO: ". $COD_SEXO .
   "\nDIRECCION: ". $DIRECCION .
   "\nCOD_DEPARTAMENTO: ". $COD_DEPARTAMENTO .
   "\nPROVINCIA: ". $PROVINCIA .
   "\nDISTRITO: ". $DISTRITO .
   "\nTIP_TELEFONO_1: ". $TIP_TELEFONO_1 .
   "\nCOD_POSTAL_1: ". $COD_POSTAL_1 .
   "\nNUM_TELEFONO_1: ". $NUM_TELEFONO_1 .
   "\nTIP_TELEFONO_2: ". $TIP_TELEFONO_2 .
   "\nCOD_POSTAL_2: ". $COD_POSTAL_2 .
   "\nNUM_TELEFONO_2: ". $NUM_TELEFONO_2 .
   "\nORIGEN: ". $ORIGEN;
   "\nRUTA_FOTO: ". $RUTA_FOTO;
   "\nPREGUNTA_FILIACION: ". $PREGUNTA_FILIACION;
   "\nCOD_PARENTESCO: ". $COD_PARENTESCO;
   "\nFLAG_FILIACION: ". $FLAG_FILIACION;
   "\nCOD_TITULAR: ". $COD_TITULAR;
   "\nFLAG_FOTO: ". $FLAG_FOTO;

$headers = "From:" . $from;	
mail($to,$subject,$message,$headers);
return true;			
?>