<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

ini_set('max_execution_time', 0);
ini_set("allow_url_fopen", 1);

 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);
 error_reporting(E_ERROR);
 error_reporting(E_ERROR);

$vendor = dirname(__DIR__) . '/vendor/autoload.php';

require_once $vendor;

$servername = "localhost";
$username = "traducoes";
$password = "root123";
$dbname = "api_traducoes";

date_default_timezone_set("America/Fortaleza");

$conn = mysqli_connect($servername, $username, $password, $dbname, "3306");
echo "<pre>";
print_r($conn);
echo "</pre>";
$conn->query("SET NAMES 'utf8'");
$conn->query("SET character_set_connection=utf8");
$conn->query("SET character_set_client=utf8");
$conn->query("SET character_set_results=utf8");

if ($conn->connect_error) {
	$myObj = new stdClass();
	$myObj->message = http_response_message(500);
	$myJSON = json_encode($myObj);
	$conn->close();
	die($myJSON);
}

$SECRET = 'xqyx6OKzBNEv39DUEFUPd1';

class_alias("PHPMailer\PHPMailer\PHPMailer", "PHPMailer");
class_alias("Firebase\JWT\JWT", "JWT");

function dateTimeNow() {
	$datetime = new DateTime(null, new DateTimeZone("America/Fortaleza"));
	return $datetime->format("Y-m-d H:i:s");
}

function http_response_message($code = NULL) {
	if ($code !== NULL) {
		switch ($code) {
		case 100:$text = 'Continue';
			break;
		case 101:$text = 'Switching Protocols';
			break;
		case 200:$text = 'OK';
			break;
		case 201:$text = 'Created';
			break;
		case 202:$text = 'Accepted';
			break;
		case 203:$text = 'Non-Authoritative Information';
			break;
		case 204:$text = 'No Content';
			break;
		case 205:$text = 'Reset Content';
			break;
		case 206:$text = 'Partial Content';
			break;
		case 300:$text = 'Multiple Choices';
			break;
		case 301:$text = 'Moved Permanently';
			break;
		case 302:$text = 'Moved Temporarily';
			break;
		case 303:$text = 'See Other';
			break;
		case 304:$text = 'Not Modified';
			break;
		case 305:$text = 'Use Proxy';
			break;
		case 400:$text = 'Bad Request';
			break;
		case 401:$text = 'Unauthorized';
			break;
		case 402:$text = 'Payment Required';
			break;
		case 403:$text = 'Forbidden';
			break;
		case 404:$text = 'Not Found';
			break;
		case 405:$text = 'Method Not Allowed';
			break;
		case 406:$text = 'Not Acceptable';
			break;
		case 407:$text = 'Proxy Authentication Required';
			break;
		case 408:$text = 'Request Time-out';
			break;
		case 409:$text = 'Conflict';
			break;
		case 410:$text = 'Gone';
			break;
		case 411:$text = 'Length Required';
			break;
		case 412:$text = 'Precondition Failed';
			break;
		case 413:$text = 'Request Entity Too Large';
			break;
		case 414:$text = 'Request-URI Too Large';
			break;
		case 415:$text = 'Unsupported Media Type';
			break;
		case 500:$text = 'Internal Server Error';
			break;
		case 501:$text = 'Not Implemented';
			break;
		case 502:$text = 'Bad Gateway';
			break;
		case 503:$text = 'Service Unavailable';
			break;
		case 504:$text = 'Gateway Time-out';
			break;
		case 505:$text = 'HTTP Version not supported';
			break;
		default:
			exit('Unknown http status code "' . htmlentities($code) . '"');
			break;
		}
		http_response_code($code);
		return $text;
	}
}