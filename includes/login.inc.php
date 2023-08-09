<?php
 /*if(isset($_post["submit"])){

 }else{
    header('Location:../login.html');
 }*/

 session_start(); 

 include 'config.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){


   $userEmail = $_POST['usersEmail'];
   $userPwd = $_POST['usersPwd'];

   if(!empty($userEmail) && !empty($userPwd)){
      //read from database
      $query = "select * from users where usersEmail = '$userEmail' limit 1";
      
      $result = mysqli_query($connection , $query);

      if($result){
         if($result && mysqli_num_rows($result) >0){
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['usersPwd'] === $userPwd ){

               $_SESSION['usersEmail'] = $user_data['usersEmail'];
               header("Location: ../home.php");
               die;
            }
         }
      }
      echo "Please enter some valid username or password!";
   }else{
      echo "Please enter some valid username or password!";
   }


      

     
}