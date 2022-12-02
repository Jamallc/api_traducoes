<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("USUARIO_ID", $dados) || ($dados["USUARIO_ID"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$token = validate_token($dados["TOKEN"]);
if(!($token->data->id > 0)) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$senha = '';
$param_senha = '';
if ($dados["USUARIO_SENHA"]) {

	$stmt = $conn->prepare('
		SELECT USUARIO_SENHA
		FROM traducoes_usuario
		WHERE
		USUARIO_ID = ? AND USUARIO_EXCLUIDO IS NULL OR USUARIO_EXCLUIDO = 0
	');
	$stmt->bind_param('s', $dados["USUARIO_SENHA"]);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$senha = $dados["USUARIO_SENHA_ANTERIOR"];
	$salt = sprintf(
		'$2y$%02d$%s',
		13, // 2^n cost factor
		substr(strtr(base64_encode($token_password), '+', '.'), 0, 22)
	);
	$hash = crypt($senha, $salt);
	$hash = str_replace("\\", "", $hash);
	$hash = str_replace("/", "", $hash);

	if ($row["USUARIO_SENHA_ANTERIOR"] === $hash) {
		$senha = $dados["USUARIO_SENHA"];
		$salt = sprintf(
			'$2y$%02d$%s',
			13, // 2^n cost factor
			substr(strtr(base64_encode($token_password), '+', '.'), 0, 22)
		);
		$hash = crypt($senha, $salt);
		$hash = str_replace("\\", "", $hash);
		$hash = str_replace("/", "", $hash);

		$param_senha = ' USUARIO_SENHA = "' . $hash . '"';
		if ($dados["USUARIO_NOME"] || $dados["USUARIO_EMAIL"])
			$param_senha .= ", ";
	} else {
		$myObj = new stdClass();
		$myObj->status = "fail";
		$myObj->code = -2;
		$myObj->message = "senha não confere";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	}
}

$nome = '';
$param_nome = '';
if ($dados["USUARIO_NOME"]) {
	$nome = tratar_nome(strtolower(trim($dados["USUARIO_NOME"])));

	$param_nome = ' USUARIO_NOME = "' . $nome . '"';

	if ($dados["USUARIO_EMAIL"])
		$param_nome .= ', ';
}

$email = '';
$param_email = '';
if ($dados["USUARIO_EMAIL"]) {
	$stmt = $conn->prepare('
		SELECT USUARIO_EMAIL
		FROM traducoes_usuario
		WHERE
		USUARIO_ID = ? AND (USUARIO_EXCLUIDO IS NULL OR USUARIO_EXCLUIDO = 0)
	');
	$stmt->bind_param('s', $dados["USUARIO_EMAIL"]);
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows > 0) {
		$myObj = new stdClass();
		$myObj->status = "fail";
		$myObj->code = -1;
		$myObj->message = "email já cadastrado";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	} else {
		$email = strtolower(trim($dados["USUARIO_EMAIL"]));
	
		$param_email = ' USUARIO_EMAIL = "' . $email . '"';
	}
}

$date = 'USUARIO_ATUALIZACAO = "' .dateTimeNow() . '",';
$sql = 'UPDATE traducoes_usuario SET ' . $date . $param_senha . $param_nome . $param_email . ' WHERE USUARIO_ID = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $dados["USUARIO_ID"]);
$result = $stmt->execute();

if ($result > 0) {
	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = 0;
	$myObj->message = "perfil salvo com sucesso";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
}