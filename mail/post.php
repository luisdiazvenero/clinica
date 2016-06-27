<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append('{
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
}
');

$request->setRequestUrl('http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  
  'cache-control' => 'no-cache',
  'content-type' => 'application/json',
  'cosapiid' => '123'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();