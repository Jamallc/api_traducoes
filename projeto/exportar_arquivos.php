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

if (!$id_master) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$textos = [];
$ids = [];

$stmt = $conn->prepare('
	SELECT TEXTOS_ID, TEXTOS_FRASE, TEXTOS_ID_FRASE, TEXTOS_SIGLA
	FROM traducoes_textos
	WHERE
	TEXTOS_PROJETO_ID = ? AND 
	(TEXTOS_EXCLUIDO IS NULL OR TEXTOS_EXCLUIDO = 0)
');
$stmt->bind_param('s', $dados["PROJETO_ID"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		array_push($textos, $row);
		if(!in_array($row["TEXTOS_ID_FRASE"], $ids)) {
			array_push($ids, $row["TEXTOS_ID_FRASE"]);
		}
	}
}

$listagem_frases = [];
$listagem_ids = [];
foreach ($ids as $value) {
	$array_filtrado = [];
	foreach ($textos as $texto) {
		if($texto["TEXTOS_ID_FRASE"] == $value) {
			$array = [$texto["TEXTOS_ID_FRASE"] => $texto["TEXTOS_FRASE"]];
			$array_filtrado[$texto["TEXTOS_SIGLA"]] = $array;
		}
	}
	array_push($listagem_frases, $array_filtrado);
	$listagem_ids[$value] = 'string';
}

$myObj = new stdClass();
$myObj->status = "success";
$myObj->code = 0;
$myObj->message = "arquivos exportados com sucesso";
$myObj->texts = $listagem_frases;
$myObj->interface = $listagem_ids;
$myJSON = json_encode($myObj);
http_response_code(200);
$stmt->close();
die($myJSON);