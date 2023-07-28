<?php
 if(isset($_post["submit"])){
    $username=$_POST["email"];
    $password=$_POST["password"];

    require_once 'dbh.inc.php';
    if(emptyInputs($username,$password) !==false){
        exit(); 
    }

 }else{
    header('Location:../login.html');
 }