<?php
$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);
$dados = json_decode('{
	"TOKEN": "ZXlKaGJHY2lPaUFpU0ZNeU5UWWlMQ0FpZEhsd0lqb2dJa3BYVkNKOS5leUpxZEdraU9pSnRZM1IwTVZGUGFtUTNjRmxSTlV4VGNIVnlTbFIzUFQwaUxDSnBjM01pT2lKc2IyTmhiR2h2YzNRNk9EQXdNU0lzSW1saGRDSTZNVFkzTURBNU5EZzNOU3dpWkdGMFlTSTZleUpwWkNJNk1uMTkudEl6Y0tteGRnQW1fVjFSZzhTX0VuSW1rMGRGaVU1cHFkSDVzQzVpT0VmRQ==",
	"LINGUA_ID": "1",
	"Idioma": "pt"
}', true);

if (
  !array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
  !array_key_exists("LINGUA_ID", $dados) || ($dados["LINGUA_ID"] === '') ||
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
  FROM traducoes_textos
  WHERE
  TEXTOS_LINGUAS_ID = ? AND 
  (TEXTOS_EXCLUIDO IS NULL OR TEXTOS_EXCLUIDO = 0)
');
$stmt->bind_param('s', $dados["LINGUA_ID"]);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
	$textos_associadas = [];
	while ($row = $result->fetch_assoc()) {
		array_push($textos_associadas, $row);
	}
}

$myObj = new stdClass();
$myObj->status = "success";
$myObj->code = 0;
$myObj->message = "success";
$myObj->textos = $textos_associadas;
$myJSON = json_encode($myObj);
http_response_code(200);
$stmt->close();
die($myJSON);