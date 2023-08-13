<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/nav.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />

</head>
<body>
    <header>
    <div class="logo">
				<img src="img/logo.jpg" alt="Logo" />
			</div>
			<ul class="navigation">
				<a href="#home" class="home-active">Home</a>
				<a href="#categories">Categories</a>

				<a href="#about">About</a>
				<a href="#customers">Customers</a>
			</ul>
			
			<!-- profile-->
			<div class="profile">
			
				<img src="img/profile img.jpg" class="user-pic" onclick="toggleMenu()" />
				<span>kasun thiwanka</span>

				<div class="sub-menu-swap" id="subMenu">
					<div class="sub-menu">
						<div class="user-info">
							<img src="img/profile img.jpg" alt="" />
							<h2> kasun thiwanka </h2>
						</div>
						<hr />
						<a href="#" class="sub-menu-link">
							<img src="img/user-circle-solid-24.png" alt="" />
							<p>Edit profile</p>
							<span>></span>
						</a>
						<a href="#" class="sub-menu-link">
							<img src="img/cart-download-solid-24.png" alt="" />
							<p>create seller account</p>
							<span>></span>
						</a>
						<a href="#" class="sub-menu-link">
							<img src="img/cog-solid-24.png" alt="" />
							<p>Settings & privacy</p>
							<span>></span>
						</a>
						<a href="#" class="sub-menu-link">
							<img src="img/help-circle-solid-24.png" alt="" />
							<p>Help & support</p>
							<span>></span>
						</a>
						<a href="includes/logout.php" class="sub-menu-link">
							<img src="img/log-out-circle-solid-24.png" alt="" />
							<p>Log out</p>
							<span>></span>
						</a>
					</div>
				</div>
			</div>

    </header>
    
    <script>
			let subMenu = document.getElementById("subMenu");
			function toggleMenu() {
				subMenu.classList.toggle("open-menu");
			}
		</script>

</body>


</html>