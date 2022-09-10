<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("USUARIO_NOME", $dados) || ($dados["USUARIO_NOME"] === '') ||
	!array_key_exists("USUARIO_EMAIL", $dados) || ($dados["USUARIO_EMAIL"] === '') ||
	!array_key_exists("USUARIO_SENHA", $dados) || ($dados["USUARIO_SENHA"] === '') ||
	!array_key_exists("txDataHora", $dados) || ($dados["txDataHora"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$stmt = $conn->prepare('
	SELECT
	USUARIO_ID
	FROM traducoes_usuario
	WHERE
	USUARIO_EMAIL = ? AND USUARIO_EXCLUIDO <> 1
');
$stmt->bind_param('s', $dados["USUARIO_EMAIL"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$myObj = new stdClass();
	$myObj->status = "fail";
	$myObj->code = -1;
	$myObj->message = "email já cadastrado";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
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

$email_log = strtolower($dados["USUARIO_EMAIL"]);

$stmt = $conn->prepare('
	INSERT INTO traducoes_usuario (
	USUARIO_EMAIL,
	USUARIO_NOME,
	USUARIO_SENHA,
	USUARIO_CRIACAO,
	USUARIO_ATUALIZACAO
	) VALUES (?,?,?,?,?)
');

$stmt->bind_param('sssss', $email_log, $dados["USUARIO_NOME"], $hash, $dados["txDataHora"], $dados["txDataHora"]);
$stmt->execute();

if ($stmt->affected_rows !== 1) {
	$myObj = new stdClass();
	$myObj->status = "fail";
	$myObj->code = -2;
	$myObj->message = "cadastro falhou";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
}

$id_usuario = $stmt->insert_id;
$token = create_token($id_usuario, $SECRET);

$stmt = $conn->prepare('
        UPDATE traducoes_usuario 
        SET USUARIO_TOKEN = "' . $token . '"
        WHERE USUARIO_ID = ?
    ');
$stmt->bind_param('i', $id_usuario);
$stmt->execute();


// $data = array('USUARIO_EMAIL' => $dados["USUARIO_EMAIL"], 'txIdioma' => $dados["txIdioma"], 'txEmailTipo' => 'desbloqueio');
// $ch = curl_init($host . "/acesso/acesso_emails.php");
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($ch);
// curl_close($ch);

$myObj = new stdClass();
$myObj->status = "success";
$myObj->code = 0;
$myObj->message = "cadastro concluído";
$myJSON = json_encode($myObj);
http_response_code(200);
$stmt->close();
die($myJSON);
