<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | WOMEN");

    outputBannerNavigation("WOMEN");

    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- displaying women's products in css flex style-->
  <section class="hero products-women">
    <nav class="page-info">
      <h2 class="page-title-men">U L X &nbsp WOMEN ></h2>
      <p class="page-info-des">VIEWING ALL</p>
    </nav>

    <div class="container_grid1">
      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="images/wool-dress.png" alt="WOOL DRESS" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">LIMITED EDITION</h3>
          <h3 class="bestseller-name1">WOOL DRESS - LIMITED EDITION</h3>
          <span class="bestseller-price1">70 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="images/soft-high-neck.png" alt="SOFT HIGH NECK DRESS" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW</h3>
          <h3 class="bestseller-name1">SOFT HIGH NECK DRESS</h3>
          <span class="bestseller-price1">19.99 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/printed-jumpsuit.png" alt="PRINTED BLAZER JUMPSUIT" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">LIMITED EDITION</h3>
          <h3 class="bestseller-name1">PRINTED BLAZER JUMPSUIT</h3>
          <span class="bestseller-price1">39.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/cropped-jeans.png" alt="ZW PREMIUM THE NEW SLIM CROPPED JEANS"
            class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW</h3>
          <h3 class="bestseller-name1">
            ZW PREMIUM THE NEW SLIM CROPPED JEANS
          </h3>
          <span class="bestseller-price1">39.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>
    </div>

    <div class="girl-model">
      <img class="girl-model" src="women_images/draped-skirt.png" alt="cart" />
    </div>
    <div class="container-cart">
      <div class="title-cart">
        <h2 class="title-heading-cart">U L X &nbsp STORE</h2>
        <h3 class="title-sub-heading-cart">
          <br />
          PRINTED DRAPED SKIRT. <br />
          <br />Limited Edition only at 20.99 EUR. <br /><br />
        </h3>
        <form action="cart.php" class="cta-cart">
          <button href="#" class="cta-cart1">BUY NOW</button>
        </form>
      </div>
    </div>

    <div class="container_grid1">
      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/long-sleeve.png" alt="LONG SLEEVE T-SHIRT" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW / +3 COLOURS</h3>
          <h3 class="bestseller-name1">LONG SLEEVE T-SHIRT</h3>
          <span class="bestseller-price1">12.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/printed-dress.png" alt="PRINTED DRESS WITH BELT" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW</h3>
          <h3 class="bestseller-name1">PRINTED DRESS WITH BELT</h3>
          <span class="bestseller-price1">39.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/soft-high-neck-dress.png" alt="SOFT HIGH NECK DRESS" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW / +1 COLOUR</h3>
          <h3 class="bestseller-name1">SOFT HIGH NECK DRESS</h3>
          <span class="bestseller-price1">19.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>
    </div>

    <p class="page-quote-men">
      "Create your own visual style... let it be unique <br />for yourself and
      yet identifiable for others."
    </p>

    <div class="container_grid1">
      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/MIDI DRESS WITH BELT.png" alt="MIDI DRESS WITH BELT" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW / +2 COLOURS</h3>
          <h3 class="bestseller-name1">MIDI DRESS WITH BELT</h3>
          <span class="bestseller-price1">49.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/jogging-trousers.png" alt="JOGGING TROUSERS WITH BELT" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW / +1 COLOUR</h3>
          <h3 class="bestseller-name1">JOGGING TROUSERS WITH BELT</h3>
          <span class="bestseller-price1">19.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/DARTED TROUSERS.png" alt="DARTED TROUSERS" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">LIMITED EDITION</h3>
          <h3 class="bestseller-name1">DARTED TROUSERS</h3>
          <span class="bestseller-price1">29.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>

      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/check-leggings.png" alt="CHECK LEGGINGS" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW / +2 COLOURS</h3>
          <h3 class="bestseller-name1">CHECK LEGGINGS</h3>
          <span class="bestseller-price1">19.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
      </div>
    </div>

    <div class="container_grid1">
      <div class="bestseller-product1">
        <div class="bestseller-box1">
          <img src="women_images/striped-dress.png" alt="STRIPED DRESS" class="bestseller-img" />
        </div>
        <div class="bestseller-data1">
          <h3 class="bestseller-tag1">NEW</h3>
          <h3 class="bestseller-name1">STRIPED DRESS</h3>
          <span class="bestseller-price1">29.95 EUR</span>
          <form action="cart.php">
            <button href="#" class="cta-buy">BUY NOW</button>
          </form>
        </div>
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