<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("TEXTO_ID", $dados) || ($dados["TEXTO_FRASE"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$id_master = validate_token($dados["TOKEN"])->data->id;
if ($id_master) {

	if ($dados["TEXTO_ID_FRASE"]) {
		$stmt = $conn->prepare('
			SELECT TEXTOS_ID_FRASE
			FROM traducoes_textos
			WHERE
			TEXTOS_ID = ? AND 
			(TEXTOS_EXCLUIDO IS NULL OR TEXTOS_EXCLUIDO = 0)
		');
		$stmt->bind_param('s', $dados["TEXTO_ID"]);
		$stmt->execute();
		$result = $stmt->get_result();
		$row = $result->fetch_assoc();
		if ($result->num_rows > 0) {
			if ($row["TEXTOS_ID_FRASE"] === $dados["TEXTO_ID_FRASE"]) {
				$myObj = new stdClass();
				$myObj->status = "fail";
				$myObj->code = -1;
				$myObj->message = "já existe uma frase com esse id";
				$myJSON = json_encode($myObj);
				http_response_code(200);
				$stmt->close();
				die($myJSON);
			}
		}
	}

	$sql = 'UPDATE traducoes_textos SET ';
	if ($dados["TEXTO_FRASE"]) {
		$sql .= 'TEXTOS_FRASE = "' . $dados["TEXTO_FRASE"] . '"';
	}
	if ($dados["TEXTO_ID_FRASE"]) {
		if ($dados["TEXTO_FRASE"]) $sql .= ', ';
		$sql .= 'TEXTOS_ID_FRASE = "' . $dados["TEXTO_ID_FRASE"] . '" ';
	}
	$data_hora = strval(dateTimeNow());
	$sql .= ', TEXTOS_ATUALIZACAO = "' . $data_hora . '" WHERE TEXTOS_ID = ?';
	$edit = $conn->prepare($sql);
	$edit->bind_param('i', $dados["TEXTO_ID"]);
	$result = $edit->execute();

	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = 0;
	$myObj->message = "texto salvo com sucesso";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$edit->close();
	die($myJSON);
} else {
	$myObj = new stdClass();
	$myObj->message = http_response_message(401);
	$myJSON = json_encode($myObj);
	die($myJSON);
}
