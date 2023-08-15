<?php
session_start();

require_once  __DIR__ . '/config.php';

$is_logged = is_logged_in();
$user = null;
if ($is_logged) {
   $user = get_user_data();
}
?>
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
   <div class="profile" onclick="toggleMenu()" >

      <?php
      if ($is_logged) {
      ?>
         <img src="img/profile img.jpg" class="user-pic"  />
         <span><?php echo $user["usersName"] ?>  </span>

         <div class="sub-menu-swap" id="subMenu">
            <div class="sub-menu">
               <div class="user-info">
                  <img src="img/profile img.jpg" alt="" />
                  <h2> <?php echo $user["usersName"] ?> </h2>
               </div>
               <hr />
               <a href="#" class="sub-menu-link">
                  <img src="img/user-circle-solid-24.png" alt="" />
                  <p>Edit profile</p>
                  
               </a>
               <a href="includes/seller/Insert_item.php" class="sub-menu-link">
                  <img src="img/cart-download-solid-24.png" alt="" />
                  <p>Seller account</p>
                  
               </a>
               <a href="#" class="sub-menu-link">
                  <img src="img/cog-solid-24.png" alt="" />
                  <p>Settings & privacy</p>
                  
               </a>
               <a href="#" class="sub-menu-link">
                  <img src="img/help-circle-solid-24.png" alt="" />
                  <p>Help & support</p>
                  
               </a>
               <a href="includes/logout.php" class="sub-menu-link">
                  <img src="img/log-out-circle-solid-24.png" alt="" />
                  <p>Log out</p>
                  
               </a>
            </div>
         </div>
      <?php } else { ?>
         <a href="<?php echo HOME . "/login.php" ?>">Login</a>
      <?php } ?>

   </div>

</header>

<script>
   let subMenu = document.getElementById("subMenu");

   function toggleMenu() {
      subMenu.classList.toggle("open-menu");
   }
</script>