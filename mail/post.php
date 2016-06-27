<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "81",
  CURLOPT_URL => "http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 300,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r  \"COD_EMPRESA\": 1,\r  \"TIP_DOC_IDENTIDAD\": \"0001\",\r  \"NUM_DOC_IDENTIDAD\": \"44020580\",\r  \"PASSWORD\": \"Mn00123456\",\r  \"COD_USUARIO\": 0,\r  \"NOMBRES\": \"Brandom\",\r  \"APE_PATERNO\": \"Suarez\",\r  \"APE_MATERNO\": \"Bernaola\",\r  \"CORREO_1\": \"wildatiladsss@gmail.com\",\r  \"COD_PERFIL\": 0,\r  \"FECHA_NACIMIENTO\": \"27/10/2015\",\r  \"COD_SEXO\": \"0001\",\r  \"TIP_TELEFONO_1\": \"0002\",\r  \"NUM_TELEFONO_1\": \"963852741\",\r  \"ORIGEN\": \"EXTRANET\",\r  \"COD_TITULAR\": 0,\r  \"FLAG_FOTO\": \"1\"\r}\r",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/json",
    "cosapiid: 123"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>