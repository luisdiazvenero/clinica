<?php

$request = new HttpRequest();
$request->setUrl('http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => '1a6c5ff3-f8d8-410c-b8be-6e8dec3e5b99',
  'cache-control' => 'no-cache',
  'content-type' => 'application/json',
  'cosapiid' => '123'
));

$request->setBody('{
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

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}