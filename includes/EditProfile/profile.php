<?php
session_start();

require_once '../config.php';

$is_logged = is_logged_in();
$user = null;

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $userID = $_POST["user_id"];
   $userName = $_POST["name"];
   $userPhone = $_POST["phone"];
   $userAccount = $_POST["account"];
   $userAddress = $_POST["address"];
   
   $q = "UPDATE users SET usersName = '$userName', phone_number = '$userPhone', account_number = '$userAccount', address = '$userAddress' WHERE Id = '$userID'";
   mysqli_query($connection, $q);
}

if ($is_logged) {
   $user = get_user_data();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profile</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5; /* Light gray background color */
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .container {
    max-width: 600px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
  }
  h1 {
    margin-bottom: 20px;
    color: #4caf50; /* Green title color */
    font-weight: bold; /* Bold title */
  }
  form {
    text-align: left;
    padding: 10px;
  }
  label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #555;
  }
  input[type="text"], input[type="email"], input[type="tel"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color: #333;
  }
  .profile-picture {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }
  .profile-picture img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #4caf50;
  }
  .button-container {
    text-align: center;
  }
  .clear-button, .save-button {
    padding: 10px 20px;
    margin: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-weight: bold;
  }
  .clear-button {
    background-color: #e74c3c;
    color: #fff;
  }
  .save-button {
    background-color: #2ecc71;
    color: #fff;
  }
  .clear-button:hover, .save-button:hover {
    opacity: 0.8;
  }
</style>
</head>
<body>
<div class="container">
  <h1>Edit Profile</h1>
  <form method="post">
    <div class="profile-picture">
      <img src="profile-picture.jpg">
      <input type="file" name="profile_img">
    </div>
    <label for="name">Name:</label>
    <input type="hidden" name="user_id" value="<?php echo $user["Id"] ?>">
    <input type="text" id="name" name="name" value="<?php echo $user["usersName"] ?>">
    <!-- <label for="email">Email:</label> -->
    <!-- <input type="email" id="email" name="email" value="<?php echo $user["usersEmail"] ?>"> -->
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" value="<?php echo $user["phone_number"] ?>">
    <label for="account">Account Number:</label>
    <input type="text" id="account" name="account" value="<?php echo $user["account_number"] ?>">
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" value="<?php echo $user["address"] ?>">
    <div class="button-container">
      <button type="reset" class="clear-button">Clear Form</button>
      <button type="submit" class="save-button">Save</button>
    </div>
  </form>
</div>
</body>
</html>