<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>VegZa Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
	</head>
	<body>
		<header>
			<div class="logo">
				<img src="img/logo.jpg" alt="Logo" />
			</div>

			<nav class="navigation">
				<button class="button-popup"  >Login</button>
			</nav>
		</header>
		<div class="wrapper">
			<span class="icon-close"><ion-icon name="close"></ion-icon></span>

			<div class="form-box login">
				<h2>Login</h2>
				<form action="includes/login.inc.php" method="post">
					<div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon> </span>
						<input type="text" name="usersEmail" required />
						<label>Email</label>
					</div>
					<div class="input-box">
						<span class="icon"><ion-icon name="lock"></ion-icon> </span>
						<input type="password" name="usersPwd" required />
						<label>Password</label>
					</div>
					<div class="remember-forgot">
						<label><input type="checkbox" />Remeber me</label>
						<a href="#">Forgot password?</a>
					</div>
					<button type="submit" class="btn">Login</button>
					<div class="login-register">
						<p>Don't have an account? <a href="#" class="register-link">Register</a></p>
					</div>
				</form>
			</div>

			<div class="form-box register">
				<h2>Registation</h2>
				<form action="includes/sign_up.php" method="post">
					<div class="input-box">
						<span class="icon"><ion-icon name="person"></ion-icon> </span>
						<input type="text" name="usersName" required />
						<label>Username</label>
					</div>
					<div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon> </span>
						<input type="text" name="usersEmail" required />
						<label>Email</label>
					</div>
					<div class="input-box">
						<span class="icon"><ion-icon name="lock"></ion-icon> </span>
						<input type="password" name="usersPwd" required />
						<label>Password</label>
					</div>
					<div class="remember-forgot">
						<label><input type="checkbox" />I agree to the terms & conditions</label>
					</div>
					<button type="submit" class="btn">Register</button>
					<div class="login-register">
						<p>Already have an account? <a href="#" class="login-link">login</a></p>
					</div>
				</form>
			</div>
		</div>

		<!--Swiper to js-->
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<!--link to js-->
		<script src="js/login.js"></script>
		<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	</body>
</html>
