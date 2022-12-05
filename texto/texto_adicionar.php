<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("TEXTO_FRASE", $dados) || ($dados["TEXTO_FRASE"] === '') ||
	!array_key_exists("TEXTO_SIGLA", $dados) || ($dados["TEXTO_SIGLA"] === '') ||
	!array_key_exists("TEXTO_ID_FRASE", $dados) || ($dados["TEXTO_ID_FRASE"] === '') ||
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
		SELECT TEXTOS_ID_FRASE
		FROM traducoes_textos
		WHERE
		TEXTOS_ID_FRASE = ? AND 
		TEXTOS_LINGUAS_ID = ? AND 
		TEXTOS_SIGLA = ? AND 
		(TEXTOS_EXCLUIDO IS NULL OR TEXTOS_EXCLUIDO = 0)
	');
	$stmt->bind_param('sss', $dados["TEXTO_ID_FRASE"], $dados["PROJETO_ID"], $dados["TEXTO_SIGLA"]);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($result->num_rows > 0) {
		$myObj = new stdClass();
		$myObj->status = "fail";
		$myObj->code = -1;
		$myObj->message = "já existe um cadastro com esse id";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	} else {
		$stmt = $conn->prepare('
			INSERT INTO traducoes_textos (
				TEXTOS_FRASE,
				TEXTOS_ID_FRASE,
				TEXTOS_SIGLA,
				TEXTOS_CRIACAO,
				TEXTOS_ATUALIZACAO,
				TEXTOS_PROJETO_ID
			) VALUES (?,?,?,?,?,?)
		');

		$data_hora = strval(dateTimeNow());

		$stmt->bind_param(
			'ssssss',
			$dados["TEXTO_FRASE"],
			$dados["TEXTO_ID_FRASE"],
			$dados["TEXTO_SIGLA"],
			$data_hora,
			$data_hora,
			$dados["PROJETO_ID"]
		);
		$stmt->execute();

		$myObj = new stdClass();
		$myObj->status = "success";
		$myObj->code = 0;
		$myObj->message = "texto adicionado com sucesso";
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
