<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts  -->
   <?php include 'components/user_header.php'; ?>
   <!-- header section ends -->

   <div class="heading">
      <h3>about us</h3>
      <p><a href="home.php">home</a> <span> / about</span></p>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/coffeehuman.svg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
            <a href="menu.php" class="btn">our menu</a>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="title">A place that you belong</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/cat-3.png" alt="">
            <h3>All fresh</h3>
            <p>All the ingredient are totally fresh</p>
         </div>

         <div class="box">
            <img src="images/cat-3.png" alt="">
            <h3>All fresh</h3>
            <p>All the ingredient are totally fresh</p>
         </div>

         <div class="box">
            <img src="images/cat-3.png" alt="">
            <h3>All fresh</h3>
            <p>All the ingredient are totally fresh</p>
         </div>

      </div>

   </section>

   <!-- steps section ends -->
   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="title">Customer's reviews</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/pic-kd.png" alt="">
               <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Anh Khánh Duy</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-kd.png" alt="">
               <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Anh Khánh Duy</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-kd.png" alt="">
               <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Anh Khánh Duy</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-kd.png" alt="">
               <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Anh Khánh Duy</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-kd.png" alt="">
               <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Anh Khánh Duy</h3>
            </div>
            <div class="swiper-slide slide">
               <img src="images/pic-kd.png" alt="">
               <p>"I absolutely love VNUCoffee! The coffee is rich and smooth, and the atmosphere is so cozy — it’s the perfect spot to relax or get some work done. The staff are super friendly and always remember my favorite drink. It really feels like a second home!"</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Anh Khánh Duy</h3>
            </div>



         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- reviews section ends -->



















   <!-- footer section starts  -->
   <?php include 'components/footer.php'; ?>
   <!-- footer section ends -->=






   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         grabCursor: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            700: {
               slidesPerView: 2,
            },
            1024: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>