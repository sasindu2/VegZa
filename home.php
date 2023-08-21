<!DOCTYPE html>
<html>

<head>
   <title>VegZa Home Page</title>
   <link rel="stylesheet" type="text/css" href="css/nav.css" />
   <link rel="stylesheet" type="text/css" href="css/home.css" />
   <link rel="stylesheet" type="text/css" href="css/footer.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
</head>

<body>

   <?php
   include 'includes/nav.php';
   ?>

   <section class="home" id="home">
      <div class="swiper-wrapper">
         <!--SLIDE 1-->
         <div class="swiper-slide container">
            <div class="home-text">
               <span>We Are VegZa</span>
               <h1>
                  Choose vegitable <br />

               </h1>
               <a href="categories-veg.php" class="btn-shop">Shop Now <i class="bx bx-right-arrow-alt"></i></a>
            </div>
            <img src="img/home.veg.jpg" />
         </div>
         <!-- SLIDE 2-->
         <div class="swiper-slide container">
            <div class="home-text">
               <span>we are VegZa</span>
               <h1>
                  Choose fruit <br />

               </h1>
               <a href="categories-fruit.php" class="btn-shop">Shop Now <i class="bx bx-right-arrow-alt"></i> </a>
            </div>
            <img src="img/home.fruits.jpg" />
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </section>
   <!-- About section-->
   <section class="about" id="about">
      <img src="img/about img.png" alt="" />
      <div class="about-text">
         <span>About Us</span>
         <p>
         Welcome to VegZa, your ultimate destination for fresh and affordable vegetables. We are a dedicated team of individuals who believe that everyone deserves access to wholesome produce. Our platform brings together local farmers and enthusiastic buyers, fostering a direct connection that benefits both communities. At VegZa, we're committed to supporting local agriculture, promoting transparency, and making your vegetable shopping experience convenient and delightful. Join us in celebrating the joy of farm-fresh goodness, one order at a time.
         </p>
         <a href="categories-veg.html" class="btn-shop">Learn More <i class="bx bx-right-arrow-alt"></i></a>
      </div>
   </section>
   <!-- Customers-->
   <section class="customers" id="customers">
      <h2>Why Customer's Love Us</h2>
      <!--customer container-->
      <div class="customer-container">
         <!--Review 1-->
         <div class="box">
            <i class="bx bxs-quote-alt-left"></i>
            <div class="stars">
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star-half"></i>
            </div>
            <p>
               "As a busy mom, I appreciate the convenience VegZa brings to my life. I can shop for veggies from my couch, and they're delivered right to my doorstep. The freshness is unbeatable!"
            </p>
            <div class="review-profile">
               <img src="img/review img 2.jpg" alt="" />
               <h3>Kamala De Silva</h3>
            </div>
         </div>
         <!--Review 2-->
         <div class="box">
            <i class="bx bxs-quote-alt-left"></i>
            <div class="stars">
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star-half"></i>
            </div>
            <p>
            "VegZa has made my life so much easier. I used to spend hours at the grocery store, but now I can order fresh vegetables online without any hassle. Plus, their quality is top-notch!"
            </p>
            <div class="review-profile">
               <img src="img/review img 1.jpg" alt="" />
               <h3>Rochell Rogers</h3>
            </div>
         </div>
         <!--Review 3-->
         <div class="box">
            <i class="bx bxs-quote-alt-left"></i>
            <div class="stars">
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star"></i>
               <i class="bx bxs-star-half"></i>
            </div>
            <p>
            "I've always been conscious about where my food comes from. VegZa's transparency about sourcing and the farmers behind the produce gives me peace of mind. It's a platform I can trust."
            </p>
            <div class="review-profile">
               <img src="img/review img 3.jfif" alt="" />
               <h3>Milan Abeykoon</h3>
            </div>
         </div>
      </div>
   </section>


   <!--Footer-->
   <section class="footer" id="footer">
      <div class="footer-box">
         <a href="#" class="logo"><i class="bx bx-bar-chart-alt-2"></i> VegZa</a>
         <p>No.132, kandy R'd, Colombo, <br />SriLanka.</p>
         <div class="social">
            <a href="#"><i class="bx bxl-facebook"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-youtube"></i></a>
         </div>
      </div>
      <div class="footer-box">
         <h2>Categories</h2>
         <a href="#">Fruits & Vegetabels</a>
         <a href="#">Dry Products</a>
      </div>
      <div class="footer-box">
         <h2>Useful Links</h2>
         <a href="#">Payment & Tax</a>
         <a href="#">Terms Of Use</a>
         <a href="#">My Blog</a>
         <a href="#">Return Policy</a>
      </div>
      <div class="footer-box">
         <h2>Newsletter</h2>
         <p>Get 10% Discount with <br />Email Newsletter</p>
         <form action="">
            <i class="bx bxs-envelope"></i>
            <input type="email" name="" id="" placeholder="Enter Your Email" />
            <i class="bx bx-arrow-back bx-rotate-180"></i>
         </form>
      </div>
   </section>

   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="js/home.js"></script>
   <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>