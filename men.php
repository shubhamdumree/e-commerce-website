<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | MEN");

    outputBannerNavigation("MEN");

    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- displaying men's products in css flex style-->
    <section class="hero products-men">

        <nav class="page-info">
            <h2 class="page-title-men"> U L X &nbsp MEN ></h2>
            <p class="page-info-des">VIEWING ALL</p>
        </nav>

        <div class="container_grid1">
            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="images/wool-blend-overshirt.png" alt="TEXTURES WOOL BLEND OVERSHIRT"
                        class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">TEXTURES WOOL BLEND OVERSHIRT</h3>
                    <span class="bestseller-price1">50 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="images/striped-polo shirt.png" alt="STRIPED POLO SHIRT" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">STRIPED POLO SHIRT</h3>
                    <span class="bestseller-price1">29.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/double-faced-wool-overshirt.png" alt="wool" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">LIMITED EDITION</h3>
                    <h3 class="bestseller-name1">DOUBLE-FACED WOOL BLEND OVERSHIRT</h3>
                    <span class="bestseller-price1">59.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/striped-polo-shirt.png" alt="STRIPED POLO SHIRT" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">STRIPED POLO SHIRT</h3>
                    <span class="bestseller-price1">29.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="container_grid1">
            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/basic-jogging-trousers.png" alt="BASIC JOGGING TROUSERS"
                        class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW / +7 COLOURS</h3>
                    <h3 class="bestseller-name1">BASIC JOGGING TROUSERS</h3>
                    <span class="bestseller-price1">25.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/faux-coat.png" alt="FAUX SHEARLING OVERSHIRT WITH POCKETS"
                        class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">FAUX SHEARLING OVERSHIRT WITH POCKETS</h3>
                    <span class="bestseller-price1">59.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/coat-relaxed-fit.png" alt="DOUBLE-BREASTED COAT RELAXED FIT"
                        class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">LIMITED EDITION</h3>
                    <h3 class="bestseller-name1">DOUBLE-BREASTED COAT RELAXED FIT</h3>
                    <span class="bestseller-price1">129.00 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

        </div>

        <p class="page-quote-men">"Telling a story with what you wear <br /> is key to your identity."</p>

        <div class="container_grid1">
            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/denim-overshirt.png" alt="DENIM OVERSHIRT" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW / +2 COLOURS</h3>
                    <h3 class="bestseller-name1">DENIM OVERSHIRT</h3>
                    <span class="bestseller-price1">39.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/cotton-sweater.png" alt="COTTON SWEATER" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW / +1 COLOUR</h3>
                    <h3 class="bestseller-name1">COTTON SWEATER</h3>
                    <span class="bestseller-price1">49.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/striped-texture-tshirt.png" alt="STRIPED TEXTURE T-SHIRT"
                        class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">LIMITED EDITION</h3>
                    <h3 class="bestseller-name1">STRIPED TEXTURE T-SHIRT</h3>
                    <span class="bestseller-price1">15.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/fit-suit-trousers.png" alt="SLIM FIT SUIT TROUSERS" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW</h3>
                    <h3 class="bestseller-name1">SLIM FIT SUIT TROUSERS</h3>
                    <span class="bestseller-price1">39.95 EUR</span>
                    <form action="cart.php">
                        <button href="#" class="cta-buy">BUY NOW</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="container_grid1">
            <div class="bestseller-product1">
                <div class="bestseller-box1">
                    <img src="men_images/textured-suit.png" alt="TEXTURED CHECK SUIT BLAZER" class="bestseller-img">
                </div>
                <div class="bestseller-data1">
                    <h3 class="bestseller-tag1">NEW / +2 COLOURS</h3>
                    <h3 class="bestseller-name1">TEXTURED CHECK SUIT BLAZER</h3>
                    <span class="bestseller-price1">89.95 EUR</span>
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