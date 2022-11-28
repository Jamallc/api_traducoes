<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);
$dados = json_decode('{"PROJETO_NOME": "App Tradução", "Idioma": "PT"}', true);

if (
	// !array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("PROJETO_NOME", $dados) || ($dados["PROJETO_NOME"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$stmt = $conn->prepare('
	SELECT PROJETOS_NOME
	FROM traducoes_projetos
	WHERE
	PROJETOS_NOME = ? AND PROJETOS_EXCLUIDO IS NULL OR PROJETOS_EXCLUIDO = 0
');
$stmt->bind_param('s', $dados["PROJETO_NOME"]);
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
		) VALUES (?,?,?,?)
	');

	$data_hora = strval(dateTimeNow());

	$stmt->bind_param('ssss', $dados["PROJETO_NOME"], $dados["PROJETO_DESCRICAO"], $data_hora, $data_hora);
	$stmt->execute();

	$id_usuario = $stmt->insert_id;
	$token = create_token($id_usuario, $SECRET);
}