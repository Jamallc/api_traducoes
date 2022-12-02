<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("USUARIO_EMAIL", $dados) || ($dados["USUARIO_EMAIL"] === '') ||
	!array_key_exists("USUARIO_SENHA", $dados) || ($dados["USUARIO_SENHA"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$salt = sprintf(
	'$2y$%02d$%s',
	13, // 2^n cost factor
	substr(strtr(base64_encode($token_password), '+', '.'), 0, 22)
);
$hash = crypt($dados["USUARIO_SENHA"], $salt);
$hash = str_replace("\\", "", $hash);
$hash = str_replace("/", "", $hash);

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_usuario
	WHERE
	USUARIO_EMAIL = ? AND (USUARIO_EXCLUIDO IS NULL OR USUARIO_EXCLUIDO = 0)');
$stmt->bind_param('s', $dados["USUARIO_EMAIL"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
	$myObj = new stdClass();
	$myObj->status = 'fail';
	$myObj->code = -1;
	$myObj->message = 'email ou senha inválidos';
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
} else {
	$row = $result->fetch_assoc();

	$myObj = new stdClass();
	if ($hash !== $row['USUARIO_SENHA']) {
		$myObj->status = 'fail';
		$myObj->code = -1;
		$myObj->message = 'email ou senha inválidos';
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	} else if ($hash === $row['USUARIO_SENHA']) {
		$token = create_token($row['USUARIO_ID'], $SECRET);

		$stmt = $conn->prepare('
		UPDATE traducoes_usuario 
		SET USUARIO_TOKEN = "' . $token . '"
		WHERE USUARIO_ID = ?
		');
		$stmt->bind_param('i', $row['USUARIO_ID']);
		$stmt->execute();

		$user = [
			"TOKEN" => $token,
			"USUARIO_ID" => $row["USUARIO_ID"],
			"USUARIO_NOME" => $row["USUARIO_NOME"],
			"USUARIO_EMAIL" => $row["USUARIO_EMAIL"]
		];

		$myObj->status = 'success';
		$myObj->code = 0;
		$myObj->message = 'login concluído';
		$myObj->user = $user;
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	}
}
