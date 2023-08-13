<?php
$env = parse_ini_file(__DIR__ . '/../.env');

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
   $uname = $_SESSION["uname"];
   $pw = $_SESSION["pw"];

   return true;
}
