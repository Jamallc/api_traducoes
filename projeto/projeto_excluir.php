<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("USUARIO_ID", $dados) || ($dados["USUARIO_ID"] === '') ||
	!array_key_exists("PROJETO_ID", $dados) || ($dados["PROJETO_ID"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$token = validate_token($dados["TOKEN"]);
if(!($token->data->id > 0)) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$sql = 'UPDATE traducoes_nivel SET NIVEL_ATUALIZACAO = "' .dateTimeNow() . '", NIVEL_EXCLUIDO = 1 WHERE TRADUCOES_USUARIO_ID = ? AND TRADUCOES_PROJETO_ID = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('ii', $dados["USUARIO_ID"], $dados["PROJETO_ID"]);
$result = $stmt->execute();

if ($result > 0) {
	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = 0;
	$myObj->message = "usuário desvinculado com sucesso";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
}