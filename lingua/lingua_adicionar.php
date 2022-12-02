<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("LINGUA_NOME", $dados) || ($dados["LINGUA_NOME"] === '') ||
	!array_key_exists("LINGUA_SIGLA", $dados) || ($dados["LINGUA_SIGLA"] === '') ||
	!array_key_exists("PROJETO_ID", $dados) || ($dados["PROJETO_ID"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$id_master = validate_token($dados["TOKEN"])->data->id;
if ($id_master) {
	$stmt = $conn->prepare('
		SELECT LINGUAS_NOME, LINGUAS_SIGLA
		FROM traducoes_linguas
		WHERE
		(LINGUAS_NOME = ? OR 
		LINGUAS_SIGLA = ?) AND 
		LINGUAS_PROJETOS_ID = ? AND 
		(LINGUAS_EXCLUIDO IS NULL OR LINGUAS_EXCLUIDO = 0)
	');
	$stmt->bind_param('sss', $dados["LINGUA_NOME"], $dados["LINGUA_SIGLA"], $dados["PROJETO_ID"]);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$myObj = new stdClass();
		$myObj->status = "fail";
		$myObj->code = -1;
		$myObj->message = "A lingua e/ou sigla já esta(ão) cadastrada(s)";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	} else {
		$stmt = $conn->prepare('
			INSERT INTO traducoes_linguas (
				LINGUAS_NOME,
				LINGUAS_SIGLA,
				LINGUAS_CRIACAO,
				LINGUAS_ATUALIZACAO,
				LINGUAS_PROJETOS_ID
			) VALUES (?,?,?,?,?)
		');

		$data_hora = strval(dateTimeNow());

		$stmt->bind_param(
			'sssss',
			$dados["LINGUA_NOME"],
			$dados["LINGUA_SIGLA"],
			$data_hora,
			$data_hora,
			$dados["PROJETO_ID"]
		);
		$stmt->execute();

		$myObj = new stdClass();
		$myObj->status = "success";
		$myObj->code = 0;
		$myObj->message = "língua adicionada com sucesso";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	}
} else {
	$myObj = new stdClass();
	$myObj->message = http_response_message(401);
	$myJSON = json_encode($myObj);
	die($myJSON);
}
