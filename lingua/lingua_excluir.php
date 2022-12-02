<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("LINGUA_ID", $dados) || ($dados["LINGUA_ID"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$id_master = validate_token($dados["TOKEN"])->data->id;

$stmt = $conn->prepare('
	SELECT LINGUAS_NOME
	FROM traducoes_linguas
	WHERE
	LINGUAS_ID = ? AND (LINGUAS_EXCLUIDO IS NULL OR LINGUAS_EXCLUIDO = 0)
');
$stmt->bind_param('s', $dados["LINGUA_ID"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$data_hora = strval(dateTimeNow());
	$sql = 'UPDATE traducoes_linguas SET LINGUAS_EXCLUIDO = "1", LINGUAS_ATUALIZACAO = "' . $data_hora . '" WHERE LINGUAS_ID = ?';

	$edit = $conn->prepare($sql);
	$edit->bind_param('i', $dados["LINGUA_ID"]);
	$result = $edit->execute();

	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = 0;
	$myObj->message = "Língua excluído com sucesso";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$edit->close();
	die($myJSON);
} else {
	$myObj = new stdClass();
	$myObj->status = "fail";
	$myObj->code = -1;
	$myObj->message = "A lingua não existe";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	die($myJSON);
}
