<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("PROJETO_ID", $dados) || ($dados["PROJETO_ID"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$id_master = validate_token($dados["TOKEN"])->data->id;

$stmt = $conn->prepare('
	SELECT PROJETOS_NOME
	FROM traducoes_projetos
	WHERE
	PROJETOS_ID = ? AND (PROJETOS_EXCLUIDO IS NULL OR PROJETOS_EXCLUIDO = 0)
');
$stmt->bind_param('s', $dados["PROJETO_ID"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$data_hora = strval(dateTimeNow());
	$sql = 'UPDATE traducoes_projetos SET PROJETOS_EXCLUIDO = "1", PROJETOS_ATUALIZACAO = "'. $data_hora .'" WHERE PROJETOS_ID = ?';
	
	$edit = $conn->prepare($sql);
	$edit->bind_param('i', $dados["PROJETO_ID"]);
	$result = $edit->execute();

	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = 0;
	$myObj->message = "projeto excluído com sucesso";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$edit->close();
	die($myJSON);
} else {
	$myObj = new stdClass();
	$myObj->status = "fail";
	$myObj->code = -1;
	$myObj->message = "O projeto não existe";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	die($myJSON);
}
