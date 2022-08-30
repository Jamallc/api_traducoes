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
	USUARIO_EMAIL = ?');
$stmt->bind_param('s', $dados["USUARIO_EMAIL"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
	$myObj = new stdClass();
	$myObj->status = 'fail';
	$myObj->code = 1;
	$myObj->message = 'Email ou senha inválidos.';
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
} else {
	$row = $result->fetch_assoc();

	$myObj = new stdClass();
	if ($hash !== $row['USUARIO_SENHA'] && $hash !== $hash2) {
		$myObj->status = 'fail';
		$myObj->code = 1;
		$myObj->message = 'Email ou senha inválidos.';
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	}

	$jwt = create_token($row['USUARIO_ID'], $SECRET);
	print_r($jwt);
}
