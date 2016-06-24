<?php




$data = array("score" => "234", "playerName" => "Noman", "cheatMode" => "false");
$data_string = json_encode($data);
var_dump($data_string);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'CosapiId: 123'));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
var_dump($result);


?>