<?php
$url = "http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario";

$data = array(
  'token' => 'fooToken',
  'json' => '{"foo":"test"}',
);

foreach($data as $key=>$value) { $content .= $key.'='.$value.'&'; }

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $content);

$json_response = curl_exec($curl);

$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

$response = json_decode($json_response, true);
var_dump($response);

echo json_encode($_POST);
?>