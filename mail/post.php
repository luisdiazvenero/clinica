<?php

$data = array("COD_EMPRESA" => 1,
  "TIP_DOC_IDENTIDAD" => "0001",
  "NUM_DOC_IDENTIDAD" => "44020580",
  "PASSWORD" => "Mn00123456",
  "COD_USUARIO" => 0,
  "NOMBRES" => "Brandom",
  "APE_PATERNO" => "Suarez",
  "APE_MATERNO" => "Bernaola",
  "CORREO_1" => "wildatiladsss@gmail.com",
  "COD_PERFIL" => 0,
  "FECHA_NACIMIENTO" => "27/10/2015",
  "COD_SEXO" => "0001",
  "TIP_TELEFONO_1" => "0002",
  "NUM_TELEFONO_1" => "963852741",
  "ORIGEN" => "EXTRANET",
  "COD_TITULAR" => 0,
  "FLAG_FOTO" => "1");

$data_string = json_encode($data);
var_dump($data_string);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'CosapiId: 123'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
// curl_close($ch);
print $result;
// var_dump($result);

var_dump(http_response_code());


// Parse the response object, e.g. read the headers, body, etc.
$headers = $result->getHeaders();
$body = $result->getBody();

// Output headers and body for debugging purposes
var_dump($headers, $body);
?>