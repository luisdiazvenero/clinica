<?php
$data = array("name" => "Hagrid", "age" => "36");
$data_string = json_encode($data);            
$ch = curl_init('http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ','CosapiId: 123' . strlen($data_string)));
$result = curl_exec($ch);
if(!$result)
curl_error($ch);
else {
echo "";
print_r($result);
exit;
?>