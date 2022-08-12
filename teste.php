<?php

$servername = "localhost";
$username = "traducoes";
$password = "root123";
$dbname = "api_traducoes";

$mysqli = new mysqli($servername, $username, $password, $dbname, "3306");
echo "<pre>";
print_r($mysqli);
echo "</pre>";
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>