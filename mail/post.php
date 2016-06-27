<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "81",
  CURLOPT_URL => "http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{
  "COD_EMPRESA": 1,
  "TIP_DOC_IDENTIDAD": "0001",
  "NUM_DOC_IDENTIDAD": "44020580",
  "PASSWORD": "Mn00123456",
  "COD_USUARIO": 0,
  "NOMBRES": "Brandom",
  "APE_PATERNO": "Suarez",
  "APE_MATERNO": "Bernaola",
  "CORREO_1": "wildatiladsss@gmail.com",
  "COD_PERFIL": 0,
  "FECHA_NACIMIENTO": "27/10/2015",
  "COD_SEXO": "0001",
  "TIP_TELEFONO_1": "0002",
  "NUM_TELEFONO_1": "963852741",
  "ORIGEN": "EXTRANET",
  "COD_TITULAR": 0,
  "FLAG_FOTO": "1"
}",
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