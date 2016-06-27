<?php

// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario');

// Set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

// Set options
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_REFERER, 'http://www.google.com');
curl_setopt($curl, CURLOPT_AUTOREFERER, 1);

// Set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "cosapiid: 123",
  "content-type: application/json",
 ]
);
// Create body
$json_array = [
            "COD_EMPRESA" => 1,
            "CORREO_1" => "wildatiladsss@gmail.com",
            "TIP_TELEFONO_1" => "0002",
            "TIP_DOC_IDENTIDAD" => "0001",
            "PASSWORD" => "Mn00123456",
            "APE_PATERNO" => "Suarez",
            "COD_TITULAR" => 0,
            "FLAG_FOTO" => "1",
            "COD_PERFIL" => 0,
            "NUM_DOC_IDENTIDAD" => "44020580",
            "COD_USUARIO" => 0,
            "NOMBRES" => "Brandom",
            "APE_MATERNO" => "Bernaola",
            "COD_SEXO" => "0001",
            "NUM_TELEFONO_1" => "963852741",
            "FECHA_NACIMIENTO" => "27/10/2015",
            "ORIGEN" => "EXTRANET"
        ]; 
$body = json_encode($json_array);

// Set body
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

// Send the request & save response to $resp
$resp = curl_exec($ch);

if(!$resp) {
  die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
} else {
  echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
  echo "\nResponse HTTP Body : " . $resp;
}

// Close request to clear up some resources
curl_close($ch);


