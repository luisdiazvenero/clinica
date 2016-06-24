<?php



$article = new stdClass();
$article->title = "An example article";
$article->summary = "An example of posting JSON encoded data to a web service";

$json_data = json_encode($article);

$post = file_get_contents('http://181.65.214.109:81/ServInterno.svc/wsSetRegistrarUsuario',null,stream_context_create(array(
    'http' => array(
        'protocol_version' => 1.1,
        'user_agent'       => 'PHPExample',
        'method'           => 'POST',
        'header'           => "Content-type: application/jsonrn".
                              "Connection: closern" .
                              "Content-length: " . strlen($json_data) . "rn",
        'content'          => $json_data,
    ),
)));

if ($post) {
    echo $post;
} else {
    echo "POST failed";
}
?>