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

$data_string = json_encode($data, true);
var_dump($data_string);

$ch = curl_init('http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json', 
    'CosapiId: 123',                                                                               
    'Content-Length: ' . strlen($data_string))                                                                       
);
//curl_setopt ($ch,CURLOPT_TIMEOUT, 30);   
//curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
//curl_setopt ($ch, CURLOPT_NOSIGNAL, 1);
//scurl_setopt ($ch, CURLOPT_TIMEOUT_MS, 200);
curl_setopt ($ch, CURLOPT_AUTOREFERER, true);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 2);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

// Will dump a beauty json :3
$json = $result;
var_dump(json_decode($json));
var_dump(curl_error($ch));

curl_close($ch);
?>