<?php
session_start();
unset($_SESSION['usersEmail']);
header("Location: ../login.php");
?>