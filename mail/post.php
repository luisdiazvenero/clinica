<?php
$data = array("name" => "Hagrid", "age" => "36");
$data_string = json_encode($data);
          




$result = file_get_contents('http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario', null, stream_context_create(array(
'http' => array(
'method' => 'POST',
'header' => 'Content-Type: application/json' . "\r\n"
. 'CosapiId: 123' . "\r\n"
. 'Content-Length: ' . strlen($data_string) . "\r\n",
'content' => $data_string,
),
)));

print ($result);

?>