<?php
# /includes/login.insert.php
/*

food items insert -> /api/food_insert.php
food_name, description, price



# POST Request
/* 
username, email, password -> inputs
ok -> ok
error -> error
*/

   include 'config.php';

   $userName = $_POST['username'];
   $userEmail = $_POST['email'];
   $userPwd = $_POST['password'];

   $sql = "insert into users (usersName, usersEmail, usersPwd) values(?,?,?)";
   $statment = $connection->prepare($sql);

   $statment->bind_param("sss" , $userName , $userEmail , $userPwd);

   if($statment->execute()){
      echo 'Insert data success !';
   }else{
      echo 'Insert data error !';
   }

?>
 