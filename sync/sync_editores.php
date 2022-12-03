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

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_nivel
	WHERE
	TRADUCOES_PROJETO_ID = ? AND
	(NIVEL_EXCLUIDO IS NULL OR NIVEL_EXCLUIDO = 0)
');
$stmt->bind_param('s', $dados["PROJETO_ID"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$usuarios_associados = [];
	while ($row = $result->fetch_assoc()) {

		$stmt = $conn->prepare('
			SELECT USUARIO_EMAIL, USUARIO_NOME, USUARIO_ID
			FROM traducoes_usuario
			WHERE
			USUARIO_ID = ? AND 
			(USUARIO_EXCLUIDO IS NULL OR USUARIO_EXCLUIDO = 0)
		');
		$stmt->bind_param('s', $row["TRADUCOES_USUARIO_ID"]);
		$stmt->execute();
		$res = $stmt->get_result();
		$res = $res->fetch_assoc();

		$res["NIVEL_PERMISSOES"] = $row["NIVEL_PERMISSOES"];
		array_push($usuarios_associados, $res);
	}
}

$myObj = new stdClass();
$myObj->status = "success";
$myObj->code = 0;
$myObj->message = "success";
$myObj->projetos = $usuarios_associados;
$myJSON = json_encode($myObj);
http_response_code(200);
$stmt->close();
die($myJSON);