<?php
$severName="localhost";
$dbUsername="VegZa123";
$dbPassword="_9_wCCG*IJpfuA3e";
$dbName="VegZa_login";

$conn = mysqli_connect($severName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("connection failed : ".mysqli_connect_error());
}