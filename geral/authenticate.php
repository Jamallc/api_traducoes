<?php

function base64URLEncode($data) {
  return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($data));
}

function encodeJWT($payload, $secret) {
  $header = base64URLEncode('{"alg": "HS256", "typ": "JWT"}');
  $payload = base64URLEncode(json_encode($payload));
  $signature = base64URLEncode(
    hash_hmac('sha256', $header.'.'.$payload, $secret, true)
  );
  return $header.'.'.$payload.'.'.$signature;
}

function decodeJWT($payload, $secret) {
	$parts = explode('.', $payload);

	$signature = base64URLEncode(
		hash_hmac('sha256', $parts[0].'.'.$parts[1], $secret, true)
	);

	if($signature == $parts[2]) {

		$payload = json_decode(
			base64_decode($parts[1])
		);

		return $payload;
	} else {
		echo 'invalid token';
	}
}

function create_token($user_code, $secret)
{
  $tokenId = base64_encode(random_bytes(16));
  $serverName = $_SERVER['HTTP_HOST'];
  $issuedAt = (new DateTimeImmutable())->getTimestamp();

  $data = array(
    'jti' => $tokenId,
    'iss' => $serverName,
    'iat' => $issuedAt,
    'data' => array(
      'id' => $user_code
    ),
  );

  $encode_jwt = encodeJWT($data, $secret);

  return base64_encode($encode_jwt);
}

function validate_token($jwt)
{

  if (!$jwt) {
    $myObj = new stdClass();
    $myObj->message = http_response_message(400);
    $myJSON = json_encode($myObj);
    die($myJSON);
  }

  $jwt = base64_decode($jwt);

  global $SECRET;
  $secret = $SECRET;

  try {
    $token = decodeJWT($jwt, $secret);
  } catch (Exception $e) {
    $myObj = new stdClass();
    $myObj->message = http_response_message(401);
    $myJSON = json_encode($myObj);
    die($myJSON);
  }

  $now = new DateTimeImmutable();
  $serverName = $_SERVER['HTTP_HOST'];

  if (
    ($token->iss !== $_SERVER['HTTP_HOST']) ||
    ($token->iat > $now->getTimestamp()) ||
    ($token->iat < ($now->getTimestamp() - 60 * 24 * 60 * 60))
  ) {
    $myObj = new stdClass();
    $myObj->message = http_response_message(401);
    $myJSON = json_encode($myObj);
    die($myJSON);
  }

  return $token;
}

function header_authorization()
{
  global $dados;
  if (
    isset($_SERVER['HTTP_AUTHORIZATION'])
  ) {
    if (preg_match('/Bearer\s(\S+)/', trim($_SERVER['HTTP_AUTHORIZATION']), $matches)) {
      return $matches[1];
    }
  } else if (
    !empty($dados)
  ) {
    if (array_key_exists("TOKEN", $dados)) {
      return $dados["TOKEN"];
    }
    if (isset($dados[0])) {
      if (array_key_exists("TOKEN", $dados[0])) {
        $t = $dados[0]["TOKEN"];
        unset($dados[0]);
        $dados = array_values($dados);
        return $t;
      }
    }
  }
  $myObj = new stdClass();
  $myObj->message = http_response_message(401);
  $myJSON = json_encode($myObj);
  die($myJSON);
}
