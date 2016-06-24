<?php
$url = 'http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario ';
$data = array('Username' => 'user', 'password' => '1234', 'LoginClient' => 'user');
$opts = array(
    'http' => array(
        'header'  => "application/jsons",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);
$context  = stream_context_create($opts); //Creates and returns a stream context with any options supplied in options preset.
$response = file_get_contents($url, false, $context);

var_dump($response);
?>