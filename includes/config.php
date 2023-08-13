<?php
$env = parse_ini_file(__DIR__ . '/../.env');
define("HOME", "/vegza");

$servername = $env["SERVER"];
$username = $env["USERNAME"];
$password = $env["PASSWORD"];
$database_name = $env["DATABASE"];
$port = $env["PORT"];

$connection = new mysqli($servername, $username, $password, $database_name, $port);

if ($connection->connect_error) {
   die("Connection error");
}

function is_logged_in()
{
   return isset($_SESSION["usersEmail"]);
}

function get_user_data()
{
   global $connection;
   $email = $_SESSION["usersEmail"];
   $sql = "SELECT * FROM users WHERE usersEmail = '$email'";
   $res = $connection->query($sql);
   return $res->fetch_assoc();
}
