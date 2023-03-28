<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="public/design/style.css" />
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- swiper css link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    </head>

    <body>

        <!-- header section starts  -->

        <header class="header">
            
            <a href="index.html" class="logo"> <i class="fas fa-store"></i>Alliance</a>

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

        <?=$content?>

        <!-- footer section starts  -->

        <section class="quick-links">

            <a href="index.html" class="logo"> <i class="fas fa-store"></i>Alliance</a>

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

        <section class="credit" style="color:red;text-align:center">

            <p> créé par <span>mr. Alliance Tshindayi 2023</span> | tous droits reservés! </p>
            <!-- <img src="imagesTest/card_img.png" alt=""> -->
        </section>

        <!-- footer section ends -->

    </body>
</html>