<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="public/design/css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    
    <a href="index.html" class="logo"> <i class="fas fa-store"></i> Kdm-Business</a>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="Recherche...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="login.html" class="fas fa-user"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.html" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="imagesTest/1.jpg" alt="">
        <h3>Alliance Tshindayi</h3>
        <a href="#">déconexion</a>
    </div>

    <nav class="navbar">
        <a href="index.html"> <i class="fas fa-angle-right"></i> accueil </a>
        <a href="autres-pages/apropos.html"> <i class="fas fa-angle-right"></i> à propos </a>
        <a href="products.html"> <i class="fas fa-angle-right"></i> produits </a>
        <a href="autres-pages/contact.html"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="login.html"> <i class="fas fa-angle-right"></i> connexion </a>
        <a href="register.html"> <i class="fas fa-angle-right"></i> inscription </a>
        <a href="cart.html"> <i class="fas fa-angle-right"></i> pagner </a>
    </nav>

</div>

<!-- side-bar section ends -->

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="imagesTest/test4.jpeg" alt="">
            </div>
            <div class="content">
                <span>promotion 50% de</span>
                <h3>Robe</h3>
                <a href="#" class="btn">payer maintenant</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="imagesTest/test3.jpeg" alt="">
            </div>
            <div class="content">
                <span>promotion 50% de</span>
                <h3>veste</h3>
                <a href="#" class="btn">payer maintenant</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="imagesTest/test5.jpeg" alt="">
            </div>
            <div class="content">
                <span>promotion 50% de</span>
                <h3>chémise</h3>
                <a href="#" class="btn">payer maintenant</a>
            </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">

        <a href="#" class="box">
            <img src="imagesTest/banner-1.jpg" alt="">
            <div class="content">
                <span>special promotion</span>
                <h3>à 50% offerte</h3>
            </div>
        </a>

        <a href="#" class="box">
            <img src="imagesTest/banner-2.jpg" alt="">
            <div class="content">
                <span>special promotion</span>
                <h3>à 50% offerte</h3>
            </div>
        </a>

        <a href="#" class="box">
            <img src="imagesTest/banner-3.jpg" alt="">
            <div class="content">
                <span>special promotion</span>
                <h3>à 50% offerte</h3>
            </div>
        </a>
        
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->

<section class="arrivals">

    <h1 class="heading"> nouvelles <span>arrivages</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/arrival-1.jpg" class="main-img" alt="">
                <img src="images/arrival-1-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Chemises</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-2.jpg" class="main-img" alt="">
                <img src="images/arrival-2-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Cravattes</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-3.jpg" class="main-img" alt="">
                <img src="images/arrival-3-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Pentalons</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-4.jpg" class="main-img" alt="">
                <img src="images/arrival-4-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Vestes</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-5.jpg" class="main-img" alt="">
                <img src="images/arrival-5-hover.jpg" class="hover-img" alt="">
            </div>
            <div class="content">
                <h3>Chaussures</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/arrival-6.jpg" class="main-img" alt="">
                <img src="images/arrival-6-hover.jpg" class="hover-img" alt="">
                <!-- <img src="imagesTest/banner-2.jpg" class="main-img" alt=""> -->
            </div>
            <div class="content">
                <h3>Montres</h3>
                <div class="price"> $249.99 <span>$399.99</span> </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- arrivals section ends -->
















<!-- footer section starts  -->

<section class="quick-links">

    <a href="index.html" class="logo"> <i class="fas fa-store"></i> Kdm </a>

    <div class="links">
        <a href="home.html"> accueil </a>
        <a href="autres-pages/apropos.html"> à propos </a>
        <a href="products.html"> produits </a>
        <a href="autres-pages/contact.html"> contact </a>
        <a href="login.html"> connexion </a>
        <a href="register.html"> inscription </a>
        <a href="cart.html"> pagner </a>
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

</section>

<section class="credit">

    <p> créé par <span>mr. Alliance</span> | tous droits reservés! </p>

    <!-- <img src="imagesTest/card_img.png" alt=""> -->

</section>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/scipt.js"></script>

</body>
</html>