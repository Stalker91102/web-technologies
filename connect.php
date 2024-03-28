
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "registr";

// Create connection
$mysql = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysql->connect_error) {
  die("Connection failed: " . $mysql->connect_error);
}
echo "Соединение установлено, данные переданы ";
//var_dump ($mysql);

?>