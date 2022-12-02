<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("PROJETO_NOME", $dados) || ($dados["PROJETO_NOME"] === '') ||
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
	PROJETOS_NOME = ? AND PROJETO_USUARIO_ID = ? AND (PROJETOS_EXCLUIDO IS NULL OR PROJETOS_EXCLUIDO = 0)
');
$stmt->bind_param('ss', $dados["PROJETO_NOME"], $id_master);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$myObj = new stdClass();
	$myObj->status = "fail";
	$myObj->code = 1;
	$myObj->message = "O nome do projeto já está cadastrado";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
} else {
	$stmt = $conn->prepare('
		INSERT INTO traducoes_projetos (
			PROJETOS_NOME,
			PROJETOS_DESCRICAO,
			PROJETOS_CRIACAO,
			PROJETOS_ATUALIZACAO,
			PROJETO_USUARIO_ID
		) VALUES (?,?,?,?,?)
	');

	$data_hora = strval(dateTimeNow());

	$descricao = $dados["PROJETO_DESCRICAO"] ? $dados["PROJETO_DESCRICAO"] : "";

	$stmt->bind_param('sssss', $dados["PROJETO_NOME"], $descricao , $data_hora, $data_hora, $id_master);
	$stmt->execute();

	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = 0;
	$myObj->message = "projeto cadastrado com sucesso";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
}