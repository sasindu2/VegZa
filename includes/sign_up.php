<?php
include 'config.php';

$userName = $_POST['usersName'];
$userEmail = $_POST['usersEmail'];
$userPwd = $_POST['usersPwd'];

$sql = "INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?, ?, ?)";
$statment = $connection->prepare($sql);

$statment->bind_param("sss", $userName, $userEmail, $userPwd);

if ($statment->execute()) {
   header("Location: ../login.php");
   exit;
} else {
   echo 'Insert data error !';
}
