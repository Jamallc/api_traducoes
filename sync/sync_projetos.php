<?php 
$dados = file_get_contents("php://input");
$dados = json_decode($dados, true);
$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";


if (
	!array_key_exists("TOKEN", $dados) || ($dados["TOKEN"] === '') ||
	!array_key_exists("TEXTO_FRASE", $dados) || ($dados["TEXTO_FRASE"] === '') ||
	!array_key_exists("TEXTO_SIGLA", $dados) || ($dados["TEXTO_SIGLA"] === '') ||
	!array_key_exists("TEXTO_ID_FRASE", $dados) || ($dados["TEXTO_ID_FRASE"] === '') ||
	!array_key_exists("LINGUA_ID", $dados) || ($dados["LINGUA_ID"] === '') ||
	!array_key_exists("Idioma", $dados) || ($dados["Idioma"] === '')
) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(400);
	$myJSON = json_encode($myObj);
	die($myJSON);
}

$id_master = validate_token($dados["TOKEN"])->data->id;



// $jwt = header_authorization();
// $token = validate_token($jwt);