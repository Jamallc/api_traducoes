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
	!array_key_exists("USUARIO_EMAIL", $dados) || ($dados["USUARIO_EMAIL"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_usuario
	WHERE
	USUARIO_EMAIL = ?');
$stmt->bind_param('s', $dados["USUARIO_EMAIL"]);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

if ($dados["TOKEN"]) {
	$token = validate_token($dados["TOKEN"]);

	$id = $token->data->id;

	$salt = sprintf(
		'$2y$%02d$%s',
		13, // 2^n cost factor
		substr(strtr(base64_encode($token_password), '+', '.'), 0, 22)
	);
	$hash = crypt($dados["USUARIO_SENHA"], $salt);
	$hash = str_replace("\\", "", $hash);
	$hash = str_replace("/", "", $hash);

	$stmt = $conn->prepare('
        UPDATE traducoes_usuario 
        SET USUARIO_SENHA = "' . $hash . '"
        WHERE USUARIO_ID = ?
    ');
	$stmt->bind_param('i', $id);
	$stmt->execute();

	$myObj = new stdClass();
	$myObj->status = 'success';
	$myObj->code = 1;
	$myObj->message = 'senha atualizada com sucesso';
	$myJSON = json_encode($myObj);
	http_response_code(200);
	die($myJSON);
} else if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();

	$mail = new PHPMailer(true);

	$token = create_token($row["USUARIO_ID"], $SECRET);

	$html =
		'<table align="center" style="width: 560px">
      <tr style="background-color: #FFF;">
        <td style="padding: 15px; border: 1px solid #EEE;">
          <h2 style="font-family: Arial; color: #333"> Olá, ' . $row['USUARIO_NOME'] . '</h2>
          <br>
          <a href="' . $host_name . '/appNoFront?token=' . $token . '" style="text-decoration: none;" target="_blank">
            <table style="padding: 5px 10px; background-color: #6FCFF5;"><tr><td style="font-family: Arial; color: #FFF;">
							Clique aqui para inserir nova senha!
            </td></tr></table>
          </a>
          <br>
        </td>
      </tr>
    </table>';

	try {
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'app.traducao@gmail.com';
		$mail->Password = 'yjkdrtbmjoibcvgl';
		$mail->Port = 587;

		$mail->setFrom('app.traducao@gmail.com');
		$mail->addAddress($row['USUARIO_EMAIL']);

		$mail->isHTML(true);
		$mail->Subject = 'Teste';
		$mail->Body = $html;
		$mail->AltBody = 'Clique aqui para inserir nova senha: ' . $host_name;
		$mail->send();
	} catch (Exception $e) {
		die($e);
	}
	
	$myObj = new stdClass();
	$myObj->status = 'success';
	$myObj->code = 0;
	$myObj->message = 'se o email estiver cadastrado, foi enviado um link de recuperação';
	$myJSON = json_encode($myObj);
	http_response_code(200);
	die($myJSON);
}

