<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

<section class="header">

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menubtn" class="fas fa-bars"></div>
   
</section>

<div class="heading" style="background:url(https://i.pinimg.com/originals/05/f9/65/05f9654f8376982629c990a24ce9abce.jpg) no-repeat">
   <h1>book now</h1>
</div>

<section class="booking">

   <h1 class="heading-title">book your island tour now!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> reviews</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="tel: 09275594486"> <i class="fas fa-mobile"></i> +639275594486 </a>
         <a href="mailto:lmpantaleon@up.edu.ph"> <i class="fas fa-envelope"></i> lmpantaleon@up.edu.com </a>
         <a href="https://postalandzipcodes.ph/zip-code-iloilo/carles"> <i class="fas fa-map"></i> Carles, Iloilo - 5019 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://web.facebook.com/laurence.pantaleon.92"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/PantaleonRence"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/renciumm/"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>

   <div class="credit"><span>Laurence M. Pantaleon</span> | BS Computer Science II </div>

</section>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="script.js"></script>
   
</body>
</html>