<?php
/*function check_login($connection){

    if(isset($_SESSION['usersEmail'])){
        $userEmail = $_SESSION['usersEmail'];
        $query ="select * from users where usersEmail = '$userEmail' limit 1";

        $result = mysqli_query($connection,$query);
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("location: ../login.php");
    die;
}