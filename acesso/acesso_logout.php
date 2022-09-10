<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$token = validate_token($dados["TOKEN"]);
echo '<pre>';
print_r($token);
echo '</pre>';
$stmt = $conn->prepare('
UPDATE traducoes_usuario 
SET USUARIO_TOKEN = "0"
WHERE USUARIO_ID = ?
');
$stmt->bind_param('i', $token->data->id);
$stmt->execute();

$myObj = new stdClass();
$myObj->status = 'success';
$myObj->code = 0;
$myObj->message = 'logout concluído';
$myJSON = json_encode($myObj);
http_response_code(200);
$stmt->close();
die($myJSON);
