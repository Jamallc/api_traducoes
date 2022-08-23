<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$serverName = $_SERVER['HTTP_HOST'];
$issuedAt = (new DateTimeImmutable())->getTimestamp();

$secret = "3vgMw8e%#gJae5@b^YD5";
$tokenId = base64_encode(random_bytes(16));

$data = array(
	'jti' => $tokenId,
	'iss' => $serverName,
	'iat' => $issuedAt,
	'data' => array(
		'userId' => '1',
		'email' => 'weberrocha15@gmail.com',
		'name' => 'Weber Rocha'
	),
);
