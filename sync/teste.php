<?php

$dir = dirname(__DIR__);

require_once $dir . "/geral/credentials.php";
require_once $dir . "/geral/authenticate.php";

$secret = "3vgMw8e%#gJae5@b^YD5";

$key = "senha";

$data = array(
	'senha' => '123',
);

$frase = encodeJWT($data, $key);
