<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | HOME");

    outputBannerNavigation("HOME");

    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

  <!-- section 1 of the main page e-commerce website -->
  <section class="hero introduction">

    <div class="intro-model">
      <img class="intro-model" src="images/intro-pic.png" alt="intro" />
    </div>
    <div class="container-intro">
      <div class="title-intro">
        <h2 class="title-heading-intro">NEW ARRIVAL</h2>
        <h3 class="title-sub-heading-intro">
          <br />
          Only at ULX <br /> <br />
          A series of relaxed styles inspired by a mix of classic silhouettes. Pulling <br /> influences from sportswear
          and workwear for a laid-back finish.
        </h3>
        <div class="cta-link-intro">
          <a href="men.php" class="cta-link-intro1">Learn More</a>
          <a href="men.php" class="cta-link-intro2">Shop Now</a>
        </div>
      </div>
    </div>

  </section>

  <!-- trending products section 2 of the main page -->
  <section class="hero bestsellers">
    <div class="section-best">
      <h2 class="section-title">TRENDING</h2>
      <div class="cta-link-bestseller">
        <a href="men.php" class="cta-link-trend1">FOR MEN</a>
        <a href="women.php" class="cta-link-trend2">FOR WOMEN</a>
      </div>
    </div>
    <!-- displaying products in css flex style-->
    <div class="container_grid">
      <div class="bestseller-product">
        <div class="bestseller-box">
          <img src="images/wool-blend-overshirt.png" alt="TEXTURES WOOL BLEND OVERSHIRT" class="bestseller-img">
        </div>
        <div class="bestseller-data">
          <h3 class="bestseller-tag">NEW</h3>
          <h3 class="bestseller-name">TEXTURES WOOL BLEND OVERSHIRT</h3>
          <span class="bestseller-price">50 EUR</span>
        </div>
      </div>

      <div class="bestseller-product">
        <div class="bestseller-box">
          <img src="images/striped-polo shirt.png" alt="STRIPED POLO SHIRT" class="bestseller-img">
        </div>
        <div class="bestseller-data">
          <h3 class="bestseller-tag">NEW</h3>
          <h3 class="bestseller-name">STRIPED POLO SHIRT</h3>
          <span class="bestseller-price">29.95 EUR</span>
        </div>
      </div>

      <div class="bestseller-product">
        <div class="bestseller-box">
          <img src="images/wool-dress.png" alt="WOOL DRESS" class="bestseller-img">
        </div>
        <div class="bestseller-data">
          <h3 class="bestseller-tag">LIMITED EDITION</h3>
          <h3 class="bestseller-name">WOOL DRESS - LIMITED EDITION</h3>
          <span class="bestseller-price">70 EUR</span>
        </div>
      </div>

      <div class="bestseller-product">
        <div class="bestseller-box">
          <img src="images/soft-high-neck.png" alt="SOFT HIGH NECK DRESS" class="bestseller-img">
        </div>
        <div class="bestseller-data">
          <h3 class="bestseller-tag">NEW</h3>
          <h3 class="bestseller-name">SOFT HIGH NECK DRESS</h3>
          <span class="bestseller-price">19.99 EUR</span>
        </div>
      </div>
    </div>

  </section>

  <!-- featuring a casual product -->
  <section class="hero featuring">

    <div class="intro-model">
      <img class="transition-model" src="images/chicago.png" alt="chicago" />
    </div>
    <div class="container-featuring">
      <div class="title-featuring">
        <h2 class="title-heading-featuring">WARDROBE TRANSITION</h2>
        <h3 class="title-sub-heading-featuring">
          <br />
          Versatile outerwear styles combined to create elevated casual looks. <br /> Available now in ULX STORE. <br />
        </h3>
        <div class="cta-featuring">
          <a href="#" class="cta-featuring1">Featuring</a>
          <a href="men.php" class="cta-featuring2">Shop Now</a>
        </div>
      </div>
    </div>

  </section>

  <!-- accessories section -->
  <!-- displaying products in css flex style-->
  <section class="hero accessories">
    <div class="section-accessories">
      <h2 class="section-acce">ACCESSORIES</h2>
      <p class="info-accessories">Accessories add finess to formal and casual outfits.
        From belts to hats, scarves to sunglasses, wallets to <br /> watches, small additions such as these contribute
        to
        a considered head-to-toe
        outfit adding personality and pizzazz.</p>
      <div class="cta-link-accessories">
        <a href="accessories.php" class="cta-link-acce1">View All Here</a>
      </div>
    </div>
    <div class="container_grid-accessories">
      <div class="accessories-product">
        <div class="accessories-box">
          <img src="images/rigid necklace.png" alt="RIGID NECKLACE" class="accessories-img">
        </div>
        <div class="accessories-data">
          <h3 class="accessories-tag">NEW</h3>
          <h3 class="accessories-name">RIGID NECKLACE WITH NATURAL PEARLS</h3>
          <span class="accessories-price">19.95 EUR</span>
        </div>
      </div>

      <div class="accessories-product">
        <div class="accessories-box">
          <img src="images/chain link necklace.png" alt="NECKLACE" class="accessories-img">
        </div>
        <div class="accessories-data">
          <h3 class="accessories-tag">LIMITED</h3>
          <h3 class="accessories-name">CHAIN LINK NECKLACE</h3>
          <span class="accessories-price">12.95 EUR</span>
        </div>
      </div>

      <div class="accessories-product">
        <div class="accessories-box">
          <img src="images/missmatched earrings.png" alt="EARRINGS" class="accessories-img">
        </div>
        <div class="accessories-data">
          <h3 class="accessories-tag">NEW</h3>
          <h3 class="accessories-name">EMBOSSED MISMATCHED EARRINGS</h3>
          <span class="accessories-price">9.95 EUR</span>
        </div>
      </div>

      <div class="accessories-product">
        <div class="accessories-box">
          <img src="images/brown leather boot.png" alt="BOOTS" class="accessories-img">
        </div>
        <div class="accessories-data">
          <h3 class="accessories-tag">NEW</h3>
          <h3 class="accessories-name">BROWN LEATHER ANKLE BOOTS</h3>
          <span class="accessories-price">79.95 EUR</span>
        </div>
      </div>
    </div>

  </section>

  <!-- displaying an add redirecting to women's page-->
  <section class="hero addcart">
    <div class="girl-model">
      <img class="girl-model" src="images/add-cart.png" alt="cart" />
    </div>
    <div class="container-cart">
      <div class="title-cart">
        <h2 class="title-heading-cart">YOUR PICKS</h2>
        <h3 class="title-sub-heading-cart">
          <br />
          RHINESTONE BUTTONED CARDIGAN. <br /> <br />Available now in ULX STORE only at 40.99 EUR. <br /><br />
        </h3>
        <form class="cta-cart" action="women.php">
          <button href="#" class="cta-cart1">BUY NOW</button>
        </form>
      </div>
    </div>
  </section>

  <!-- section  of the main page's newsletter. -->
  <section class="hero newsletter">

    <div class="container newsletter">
      <div class="newsletter-info">
        <h2 class="section-title">JOIN OUR NEWSLETTER</h2>

        <form action="#" class="newsletter-form">
          <input type="text" class="newsletter_input" placeholder="Enter your email address here">
          <a href="#" class="button-sub">SUBSCRIBE</a>
        </form>

      </div>
    </div>

  </section>

<?php 
    /* common functions to be used in all pages */

    /* outputs the about us info */
    outputAboutUs();
    /* outputs the footer */
    outputFooter();
   
?>