<!DOCTYPE html>
<html>
	<head>
		<title>VegZa category Page</title>
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/categories-fruit.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
	</head>
	<body>
	   <?php
 		include 'includes/nav.php';
	   ?>

		<section class="categories" id="categories">
			<h2><a href="home.php">Categories</a> > fruits</h2>
			<!--Container content-->
			<div class="categories-fruit">
				<!--Box 1-->
				<?php
            $q = "SELECT * FROM products WHERE categories_id = 1 LIMIT 20";
            $res = $connection->query($q);

            while($row = $res->fetch_assoc()){
               ?>
               <div class="box">
                  <img src="<?php echo HOME . "/includes/product_images/" . $row["product_image"]?>" alt="" />
                  <span><?php echo $row["product_title"]?></span>
                  <h2><?php echo $row["product_description"]?></h2>
                  <h3 class="price"><?php echo $row["product_price"]?><span>/kg</span></h3>
                  <i class="bx bx-cart-alt"></i>
                  <i class="bx bx-heart"></i>
                  <span class="discount">-25%</span>
               </div>
               <?php
            }
            ?>
			</div>
		</section>

		<!--Swiper to js-->
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<!--link to js-->
		<script src="js/home.js"></script>
		<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
	</body>
</html>
