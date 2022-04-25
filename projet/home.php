<?php
  $conn = new PDO("mysql:host=localhost;dbname=project;port=3307;charset=utf8" , 'root' , 'root');
  if ( isset($_POST['requete']) ){
    
  
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E commerce</title>
    <link rel="stylesheet" href="home.css">
    <link href="Css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="home.js"></script>
    <script src="https://kit.fontawesome.com/d26ed27993.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <!--header-->
    <header class="header-section"> 
<h1 class="header-heading"><span>Folks</span></h1>
    </header>
    <div id="top" onclick="fctTop()">
        ^
        </div>
    <!--navbar-->
    <nav class="navbar" id="main">
        <div class="logo"><a href="#" class="links active fnt"><h1>Folks</h1></a></div>
        <ul class="links-container">
            <li class="link-item"> <a href="#" class="links active pip fnt">Home</a></li>
            <li class="link-item"> <a href="#cat" class="links active pip fnt">Categories</a></li>
            <li class="link-item"> <a href="#" class="links active pip fnt">About</a></li>
            <li class="link-item"> <a href="#" class="links active pip fnt">Contact</a></li>
            <li>
                <?php
           echo' <form action="searsh.php" method="Post">
       <input type="text" name="requete" class="motor-recherche" placeholder="    Search">
       <input type="submit" value="Ok">
       </form>';
       ?>
            </li>
            
               
            </section>    
            </ul>
        <div class="user-interaction">
            <div class="cart">
                <a href="panier.php"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="user">
            <a href="profile.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>
    <!--Categ-->
</section>
<div class="service">
  <div class="title">
   <h2 id="cat" class="fnt">Choose your category</h2>
  </div>
<div class="box">
  <div class="card">
    <i class="fa-solid fa-mobile-screen-button"></i>  
      <h5 class="fnt">Phone</h5>
    <div class="pra">
     <p>he open nature of Android has led to many things. While the fragmentation experienced in
        the ecosystem can be frustrating due to slow updates</p>
        <br>
        <p style="text-align: center;">
          <a href="products.php?category=Phone" class="buttom">Check it</a>
        </p>
    </div>
  </div>
  <div class="card">
    <i class="fa-solid fa-computer-mouse"></i>
            <h5 class="fnt">Accessories</h5>
    <div class="pra">
     <p>he open nature of Android has led to many things. While the fragmentation experienced in
        the ecosystem can be frustrating due to slow updates</p>
        <br>
        <p style="text-align: center;">
          <a href="products.php?category=Accessories" class="buttom">Check it</a>
        </p>
    </div>
  </div>
  <div class="card">
    <i class="fa-solid fa-laptop"></i>
        <h5 class="fnt">Laptops</h5>
    <div class="pra">
     <p>he open nature of Android has led to many things. While the fragmentation experienced in
        the ecosystem can be frustrating due to slow updates</p>
        <br>
        <p style="text-align: center;">
          <a href="products.php?category=Laptops" class="buttom">Check it</a>
        </p>
    </div>
  </div>
  </div>
</div>
    <!--Fin categ-->
    <!--bes seling products-->
    <section class="best-selling-products-section">
        <h1 class="section-title fnt titre ">New Arrivals</h1>
        <div class="product-container">
            <div class="product-card">
                <img src="samsung-note-10-plus.jpg" class="product-img" alt="Connexion failed">
                <p class="../aloha/product-name">produxt 1</p>
            </div>

            <div class="product-card">
                <img src="iphone12.jpg" class="product-img" alt="">
                <p class="product-name">product 2</p>
            </div>

            <div class="product-card">
                <img src="../aloha/iphone12-pro-max.jpg" class="product-img" alt="">
                <p class="product-name">product 3</p>
            </div>

            <div class="product-card">
                <img src="../aloha/iphone12-2.jpg" class="product-img" alt="">
                <p class="product-name">product 4</p>
            </div>
        </div>
        <br><br>
        <div class="product-container">
            <div class="product-card">
                <img src="../aloha/souris3.jpg" class="product-img" alt="">
                <p class="product-name">produxt 1</p>
            </div>

            <div class="product-card">
                <img src="../aloha/photo-clavier.jpg" class="product-img" alt="">
                <p class="product-name">product 2</p>
            </div>

            <div class="product-card">
                <img src="../aloha/casque2.jpg" class="product-img" alt="">
                <p class="product-name">product 3</p>
            </div>

            <div class="product-card">
                <img src="../aloha/watch.jpg" class="product-img" alt="">
                <p class="product-name">product 4</p>
            </div>
        </div>
        <br><br>
        <div class="product-container">
            <div class="product-card">
                <img src="../aloha/baf.jpg" class="product-img" alt="">
                <p class="product-name">produxt 1</p>
            </div>

            <div class="product-card">
                <img src="../aloha/ecouteur.jpg" class="product-img" alt="">
                <p class="product-name">product 2</p>
            </div>

            <div class="product-card">
                <img src="../aloha/ecouteur2.jpg" class="product-img" alt="">
                <p class="product-name">product 3</p>
            </div>

            <div class="product-card">
                <img src="../aloha/baf2.jpg" class="product-img" alt="">
                <p class="product-name">product 4</p>
            </div>
        </div>
    </section>
<!-- feature -->

<div class="features">
    <div class="feature">
        <img src="../aloha/shipping.png" alt="" class="featureIcon">
        <span class="featureTitle">FREE SHIPPING</span>
        <span class="featureDesc">Free worldwide shipping on all orders.</span>
    </div>
    <div class="feature">
        <img class="featureIcon" src="../aloha/return.png" alt="">
        <span class="featureTitle">30 DAYS RETURN</span>
        <span class="featureDesc">No question return and easy refund in 14 days.</span>
    </div>
    <div class="feature">
        <img class="featureIcon" src="../aloha/gift.png" alt="">
        <span class="featureTitle">GIFT CARDS</span>
        <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
    </div>
    <div class="feature">
        <img class="featureIcon" src="../aloha/contact.png" alt="">
        <span class="featureTitle">CONTACT US!</span>
        <span class="featureDesc">Keep in touch via email and support system.</span>
    </div>
</div>
<h1 class="fnt titre" >BEST SELECTION</h1>
<!-- fin feature -->
<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="../aloha/photo-iphone.jpg"></div>
        <div class="swiper-slide"><img src="../aloha/photo-samsung.jpg"></div>
        <div class="swiper-slide"><img src="../aloha/photo-pc1.jpg"></div>
        <div class="swiper-slide"><img src="../aloha/photo-pc2.jpg"></div>
        <div class="swiper-slide"><img src="../aloha/photo-accessoire.jpg"></div>
        <div class="swiper-slide"><img src="../aloha/photo-clavier.jpg"></div>
        <div class="swiper-slide"><img src="../aloha/photo-pc3.jpg"></div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <!--best deals-->
  <h1 class="heading fnt titre"> <span> best deals </span> </h1>
  <section class="deal" id="deal">

    <div class="box-container">
    
        <div class="box">
            <img src="../aloha/deal1.jpg" alt="">
            <div class="content">
                <h3>latest laptop</h3>
                <p>upto 25% off on first purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>
    
        <div class="box">
            <img src="../aloha/deal2.jpg" alt="">
            <div class="content">
                <h3>new headphone</h3>
                <p>upto 25% off on first purchase</p>
                <a href="#"><button class="btn">explore</button></a>
            </div>
        </div>
    
    </div>
   <!-- end best deals-->
  <!--Categ-->

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
    <!-- Next and Previous icon to change images -->
    
</div>
<br>

<div style="text-align:center">
    <span class="footerdot"
        onclick="activeSlide(1)">
    </span>
    <span class="footerdot"
        onclick="activeSlide(2)">
    </span>
    <span class="footerdot"
        onclick="activeSlide(3)">
    </span>
</div>
    <!--nid section-->
    <section class="nid-section">
        <div class="section-item-container">
            <img src="cropped.jpg" class="section-bg" alt="">
            <div class="section-info">
                <h1 class="title fnt">premium quality <span>afordable <br></span>price</h1>
                <p class="info">Lorem ipsum dolor sit amet consectetur  labore nium. Asperiores quirupti.andus doloremque .</p>
            </div>
        </div>
    </section>

    <!--image colage section-->

<!--fotter-->
<footer>
    <div class="divprincipale">
        
    <h3>Suivez nous !</h3>
    <a class="social"><i class="fa-brands fa-facebook"></i></a>
    <a class="social"><i class="fa-brands fa-twitter"></i></a>
    <a class="social"><i class="fa-brands fa-instagram"></i></a>
    <p><h3>Adresse</h3>Bd Al Massira Al Khadra,Maarif,Casablanca 20250</p>
    <p>infos@Folks.Store</p>
    
 </div>  
 <div class="div1">
     <br><br>
    <h2>Folks</h2>
    <p class="bio">Over ten years ago, we launched Fashion with Integrity. Since then, he has guided our approach to
         business and our drive to be a responsible company that delivers positive benefits for people and minimizes
          its impact on the planet. We are proud of the progress we have made during this time. Now is the time to 
          act even bolder. That's why we renew our commitment to fashion with integrity. As the next step in our 
          sustainability mission,we will work towards four 2030 goals,
           under two pillars -  <b>Planet and People</b>.</p>
                      <a class="paiment"><i class="fa-brands fa-cc-visa"></i></a>
                      <a class="paiment"><i class="fa-brands fa-cc-apple-pay"></i></a>
                      <a class="paiment"><i class="fa-brands fa-cc-mastercard"></i></a>
                      <a class="paiment"><i class="fa-brands fa-cc-amex"></i></a>
                      <a class="paiment"><i class="fa-brands fa-paypal"></i></a>
    </div>
    <div class="copy"><b><p>&copy; copyright 2002-2022</p></b></div>
</footer>
    <script>
        window.addEventListener("scroll",function(){
    var header = document.getElementById("main");
    header.classList.toggle("sticky",window.scrollY > 0);
})
        $(window).scroll(function(){
            $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
        });
    </script>
    
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="main.js"></script></body>
</html>





