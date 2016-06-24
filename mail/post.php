<!-- 
<?php

$url = 'http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario';
$data = array('key1' => 'value1', 'key2' => 'value2');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
print ($results);
?>

-->


<?php

// Script to test if the CURL extension is installed on this server

// Define function to test
function _is_curl_installed() {
    if  (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else {
        return false;
    }
}

// Ouput text to user based on test
if (_is_curl_installed()) {
  echo "cURL is <span style=\"color:blue\">installed</span> on this server";
} else {
  echo "cURL is NOT <span style=\"color:red\">installed</span> on this server";
}
?>