<?php

$servername = "localhost";
$username = "traducoes";
$password = "root123";
$dbname = "traducoes";


$conn = mysqli_connect($servername, $username, $password, $dbname, "3306");
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

$stmt = $conn->prepare('
	SELECT *
	FROM traducoes_usuario
');
$stmt->execute();
$result = $stmt->get_result();
$result = $result->fetch_assoc();

echo '<pre>';
print_r($result);
echo '</pre>';

