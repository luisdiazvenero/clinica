<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

$from = "noreply@capitanmurdock.com";
$to = "luis@coronelsmith.com"; 
$subject = "Lead Clinica Internacional:";
$message = "Ha recibido un nuevo mensaje desde landing Leads Clinica Internacional. Aquí los detalles:
   \nNOMBRES: ". $NOMBRES .
   "\nAPE_PATERNO: ". $APE_PATERNO .
   "\nAPE_MATERNO: ". $APE_MATERNO .
   "\nCOD_EMPRESA: ". $COD_EMPRESA .
   "\nNUM_DOC_IDENTIDAD: ". $NUM_DOC_IDENTIDAD .
   "\nTIP_DOC_IDENTIDAD: ". $TIP_DOC_IDENTIDAD .
   "\nFECHA_NACIMIENTO: ". $FECHA_NACIMIENTO .
   "\nTIP_TELEFONO_1: ". $TIP_TELEFONO_1 .
   "\nNUM_TELEFONO_1: ". $NUM_TELEFONO_1 .
   "\nCORREO_1: ". $CORREO_1;

$headers = "From:" . $from;	
mail($to,$subject,$message,$headers);
return true;			


    echo "Test email sent";
?>