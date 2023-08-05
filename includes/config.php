<?php
$servername="localhost";
$username="root";
$password="";
$database_name="vegza_login";

$connection = new mysqli($servername,$username,$password,$database_name);

if($connection -> connect_error){
    die("Connection error");

}else{
    echo 'connection ok';
}

function is_logged_in(){
    $uname = $_SESSION["uname"];
    $pw = $_SESSION["pw"];

    return true;
}

?>
