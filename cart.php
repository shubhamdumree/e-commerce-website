<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | SHOPPING CART");

    outputBannerNavigation("");

    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- page where the user can view products added to their shopping cart-->
    <section class="hero shopping-bag">

        <nav class="page-info-cart">
            <h2 class="page-title-cart">SHOPPING BAG ></h2>
            <i class="fa fa-shopping-bag fa-3x"></i>
        </nav>

        <p class="items-cart">2 items</p>
        <!-- displaying item in css grid style-->
        <main>
            <div class="container_grid2">
                <div class="bestseller-product2">
                    <div class="bestseller-box1">
                        <img src="images/wool-dress.png" alt="WOOL DRESS" class="cart-img" />
                    </div>
                    <div class="bestseller-data-cart">
                        <h3 class="cart-name">WOOL DRESS - LIMITED EDITION</h3>
                        <p class="cart-price">70 EUR</p>
                        <div class="quan">
                            <span class="cart-quantity">QTY : 1</span>
                            <button href="#" class="cart-button">EDIT</button>
                        </div>
                        <button href="#" class="cart-button">DELETE</button>
                    </div>
                </div>

                <div class="bestseller-product2">
                    <div class="bestseller-box1">
                        <img src="men_images/basic-jogging-trousers.png" alt="BASIC JOGGING TROUSERS" class="cart-img">
                    </div>
                    <div class="bestseller-data-cart">
                        <h3 class="cart-name">BASIC JOGGING TROUSERS</h3>
                        <p class="cart-price">25.95 EUR</p>
                        <div class="quan">
                            <span class="cart-quantity">QTY : 1</span>
                            <button href="#" class="cart-button">EDIT</button>
                        </div>
                        <button href="#" class="cart-button">DELETE</button>
                    </div>
                </div>
            </div>

            <div class="container_grid3">
                <!-- to include total price above continue shopping button -->
                <form action="index.php" class="cta-shopping-bag">
                    <button href="#" class="cta-shop">CONTINUE SHOPPING</button>
                </form>
                <form acrion="">
                    <button href="#" class="cta-checkout">CHECKOUT</button>
                </form>
            </div>
        </main>

    </section>

<?php 
    /* common functions to be used in all pages */

    /* outputs the about us info */
    outputAboutUs();
    /* outputs the footer */
    outputFooter();
   
?>