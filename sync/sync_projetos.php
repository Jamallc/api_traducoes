<?php
$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);
$dados = json_decode('{
	"TOKEN": "ZXlKaGJHY2lPaUFpU0ZNeU5UWWlMQ0FpZEhsd0lqb2dJa3BYVkNKOS5leUpxZEdraU9pSlZOVEpWUldWc05rMHJRVmhqWm1WcVFXODVORlZCUFQwaUxDSnBjM01pT2lKc2IyTmhiR2h2YzNRNk9EQXdNU0lzSW1saGRDSTZNVFkzTURBd01URXhNQ3dpWkdGMFlTSTZleUpwWkNJNk1uMTkubVJNcm01MW9CYVY1R212b2htWWo3N19qTzRLZzVzYnUtZGU3SVFWY0ZyVQ==",
	"Idioma": "pt"
}', true);
$dir = dirname(__DIR__);


require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$id_master = validate_token($dados["TOKEN"])->data->id;

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_nivel
	WHERE
	TRADUCOES_USUARIO_ID = ? AND 
	NIVEL_EXCLUIDO IS NULL OR NIVEL_EXCLUIDO = 0
');
$stmt->bind_param('s', $id_master);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$projetos_associados = [];
	while ($row = $result->fetch_assoc()) {

		$stmt = $conn->prepare('
			SELECT *
			FROM traducoes_projetos
			WHERE
			PROJETOS_ID = ? AND 
			PROJETOS_EXCLUIDO IS NULL OR PROJETOS_EXCLUIDO = 0
		');
		$stmt->bind_param('s', $row["TRADUCOES_PROJETO_ID"]);
		$stmt->execute();
		$res = $stmt->get_result();
		$res = $res->fetch_assoc();

		$res["NIVEL_PERMISSOES"] = $row["NIVEL_PERMISSOES"];
		array_push($projetos_associados, $res);
	}
}

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_projetos
	WHERE
	PROJETO_USUARIO_ID = ? AND 
	PROJETOS_EXCLUIDO IS NULL OR PROJETOS_EXCLUIDO = 0
');
$stmt->bind_param('s', $id_master);
$stmt->execute();
$projetos = $stmt->get_result();
while ($row = $projetos->fetch_assoc()) {
	$row["NIVEL_PERMISSOES"] = 1;
	array_push($projetos_associados, $row);
}

$myObj = new stdClass();
$myObj->status = "success";
$myObj->code = 0;
$myObj->message = "success";
$myObj->projetos = $projetos_associados;
$myJSON = json_encode($myObj);
http_response_code(200);
$stmt->close();
die($myJSON);
