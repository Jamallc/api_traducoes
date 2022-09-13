<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";
require_once $dir . "/vendor/src/PHPMailer.php";
require_once $dir . "/vendor/src/SMTP.php";
require_once $dir . "/vendor/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);

if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("USUARIO_EMAIL", $dados) || ($dados["USUARIO_EMAIL"] === '') ||
	!array_key_exists("NIVEL_PERMISSOES", $dados) || ($dados["NIVEL_PERMISSOES"] === '') ||
	!array_key_exists("PROJETO_ID", $dados) || ($dados["PROJETO_ID"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_projetos
	WHERE
	PROJETOS_ID = ? AND PROJETOS_EXCLUIDO IS NULL OR PROJETOS_EXCLUIDO = 0
');
$stmt->bind_param('s', $dados["PROJETO_ID"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
	$myObj = new stdClass();
	$myObj->status = "success";
	$myObj->code = -2;
	$myObj->message = "projeto inexistente";
	$myJSON = json_encode($myObj);
	http_response_code(200);
	$stmt->close();
	die($myJSON);
}

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_usuario
	WHERE
	USUARIO_EMAIL = ? AND USUARIO_EXCLUIDO IS NULL OR USUARIO_EXCLUIDO = 0
');
$stmt->bind_param('s', $dados["USUARIO_EMAIL"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {

	$stmt = $conn->prepare('
		INSERT INTO traducoes_usuario (
		USUARIO_EMAIL,
		USUARIO_NOME,
		USUARIO_SENHA,
		USUARIO_CRIACAO,
		USUARIO_ATUALIZACAO
		) VALUES (?,?,?,?,?)
	');

	$data_hora = strval(dateTimeNow());

	$salt = sprintf(
		'$2y$%02d$%s',
		13, // 2^n cost factor
		substr(strtr(base64_encode($token_password), '+', '.'), 0, 22)
	);
	$hash = crypt("000000", $salt);
	$hash = str_replace("\\", "", $hash);
	$hash = str_replace("/", "", $hash);

	$stmt->bind_param('sssss', $dados["USUARIO_EMAIL"], $dados["USUARIO_NOME"], $hash, $data_hora, $data_hora);
	$stmt->execute();

	$id_usuario = $stmt->insert_id;
	$token = create_token($id_usuario, $SECRET);

	$mail = new PHPMailer(true);

	$html =
		'<table align="center" style="width: 560px">
      <tr style="background-color: #FFF;">
        <td style="padding: 15px; border: 1px solid #EEE;">
          <h2 style="font-family: Arial; color: #333"> Olá, ' . $dados['USUARIO_NOME'] . '</h2>
          <br>
          <a href="' . $host_name . '/appNoFront?token=' . $token . '" style="text-decoration: none;" target="_blank">
            <table style="padding: 5px 10px; background-color: #6FCFF5;"><tr><td style="font-family: Arial; color: #FFF;">
							Email cadastrado em um novo projeto no app Traduções, clique aqui para inserir senha!
            </td></tr></table>
          </a>
          <br>
        </td>
      </tr>
    </table>';

	$stmt = $conn->prepare('
		INSERT INTO traducoes_nivel (
		NIVEL_PERMISSOES,
		NIVEL_CRIACAO,
		NIVEL_ATUALIZACAO,
		TRADUCOES_PROJETO_ID,
		TRADUCOES_USUARIO_ID
		) VALUES (?,?,?,?,?)
	');

	$stmt->bind_param('sssss', $dados["NIVEL_PERMISSOES"], dateTimeNow(), dateTimeNow(), $dados["PROJETO_ID"], $id_usuario);
	$stmt->execute();

	if ($stmt->affected_rows === 1) {
		try {
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'app.traducao@gmail.com';
			$mail->Password = 'yjkdrtbmjoibcvgl';
			$mail->Port = 587;

			$mail->FromName = mb_convert_encoding($header, "UTF-8", "auto");
			$mail->setFrom('app.traducao@gmail.com');
			$mail->addAddress($dados["USUARIO_EMAIL"]);

			$mail->isHTML(true);
			$mail->Subject = 'Teste';
			$mail->Body = $html;
			$mail->AltBody = 'Email cadastrado em um novo projeto no app Traduções, clique aqui para inserir senha: ' . $host_name . '/appNoFront?token=' . $token;
			$mail->send();
		} catch (Exception $e) {
			die($e);
		}

		$myObj = new stdClass();
		$myObj->status = "success";
		$myObj->code = 0;
		$myObj->message = "link de cadastro enviado ao email do usuário";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	}
} else {
	$row = $result->fetch_assoc();

	$stmt = $conn->prepare('
		SELECT *
		FROM traducoes_nivel
		WHERE
		TRADUCOES_USUARIO_ID = ? AND TRADUCOES_PROJETO_ID = ? AND NIVEL_EXCLUIDO IS NULL OR NIVEL_EXCLUIDO = 0
	');
	$stmt->bind_param('ss', $row["USUARIO_ID"], $dados["PROJETO_ID"]);
	$stmt->execute();
	$res_nivel = $stmt->get_result();

	if ($res_nivel->num_rows === 0) {
		$stmt = $conn->prepare('
			INSERT INTO traducoes_nivel (
			NIVEL_PERMISSOES,
			NIVEL_CRIACAO,
			NIVEL_ATUALIZACAO,
			TRADUCOES_PROJETO_ID,
			TRADUCOES_USUARIO_ID
			) VALUES (?,?,?,?,?)
		');

		$stmt->bind_param('sssss', $dados["NIVEL_PERMISSOES"], dateTimeNow(), dateTimeNow(), $dados["PROJETO_ID"], $row["USUARIO_ID"]);
		$stmt->execute();

		$myObj = new stdClass();
		$myObj->status = "success";
		$myObj->code = 1;
		$myObj->message = "usuário adicionado";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	} else {
		$myObj = new stdClass();
		$myObj->status = "fail";
		$myObj->code = -1;
		$myObj->message = "email já cadastrado no projeto";
		$myJSON = json_encode($myObj);
		http_response_code(200);
		$stmt->close();
		die($myJSON);
	}
}
