<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | ACCESSORIES");

    outputBannerNavigation("ACCESSORIES");

    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- displaying accessories in css flex style-->
    <section class="hero products-accessories">
        <nav class="page-info">
            <h2 class="page-title-men">U L X &nbsp ACCESSORIES ></h2>
            <p class="page-info-des">VIEWING ALL</p>
        </nav>

        <div class="section-accessories">
          <!--quote-->
            <p class="info-accessories">Accessories add finess to formal and casual outfits.
                From belts to hats, scarves to sunglasses, wallets to <br /> watches, small additions such as these
                contribute
                to
                a considered head-to-toe
                outfit adding personality and pizzazz.</p>
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
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
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
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container_grid1">
            <div class="accessories-product">
                <div class="accessories-box">
                    <img src="images/missmatched earrings.png" alt="EARRINGS" class="accessories-img">
                </div>
                <div class="accessories-data">
                    <h3 class="accessories-tag">NEW</h3>
                    <h3 class="accessories-name">EMBOSSED MISMATCHED EARRINGS</h3>
                    <span class="accessories-price">9.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="images/brown leather boot.png" alt="BOOTS" class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">BROWN LEATHER ANKLE BOOTS</h3>
                    <span class="bestseller-price1">79.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/CORDUROY CAP WITH PATCH.png" alt="CORDUROY CAP WITH PATCH"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">LIMITED EDITION</h3>
                    <h3 class="bestseller-name1">CORDUROY CAP WITH PATCH</h3>
                    <span class="bestseller-price1">15.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/RUBBERISED BACKPACK.png" alt="RUBBERISED BACKPACK"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">
                        RUBBERISED BACKPACK
                    </h3>
                    <span class="bestseller-price1">49.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="container_grid1">

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/TAUPE GREY ANKLE BOOTS.png" alt="TAUPE GREY ANKLE BOOTS"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">TAUPE GREY ANKLE BOOTS</h3>
                    <span class="bestseller-price1">69.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/LEATHER ESPADRILLES WITH JUTE SOLES.png"
                        alt="LEATHER ESPADRILLES WITH JUTE SOLES" class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">LEATHER ESPADRILLES WITH JUTE SOLES</h3>
                    <span class="bestseller-price1">25.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/TOPSTITCHED LEATHER BELT.png" alt="TOPSTITCHED LEATHER BELT"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">
                        TOPSTITCHED LEATHER BELT
                    </h3>
                    <span class="bestseller-price1">25.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="container_grid1">

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/HEADBAND WITH KNOT DETAIL TRF.png" alt="
                    HEADBAND WITH KNOT DETAIL TRF" class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">
                        HEADBAND WITH KNOT DETAIL TRF</h3>
                    <span class="bestseller-price1">9.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/NATURAL PEARL EARRINGS.png" alt="NATURAL PEARL EARRINGS"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">NATURAL PEARL EARRINGS</h3>
                    <span class="bestseller-price1">12.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/SPARKLY AND FAUX PEARL EARRINGS.png" alt="SPARKLY AND FAUX PEARL EARRINGS"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">
                        SPARKLY AND FAUX PEARL EARRINGS
                    </h3>
                    <span class="bestseller-price1">12.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="accessories_img/HEXAGONAL ACETATE SUNGLASSES.png" alt="HEXAGONAL ACETATE SUNGLASSES"
                        class="bestseller-img" />
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">
                        HEXAGONAL ACETATE SUNGLASSES
                    </h3>
                    <span class="bestseller-price1">39.95 EUR</span>
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