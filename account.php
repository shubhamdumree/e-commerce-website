<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | ACCOUNT");

    outputBannerNavigation("");
    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- user account with key information-->
    <section class="user-account">
        <main>
            <div class="1-section">
                <div class="page-info-account">
                    <i class="fa fa-user-circle fa-5x"></i>
                    <h2 class="page-title-account">WELCOME TO YOUR ACCOUNT</h2>
                </div>
                <div class="account-details">
                    <h2 class="sub-title-account">ACCOUNT DETAILS</h2>
                    <h2 class="des-account">NAME : John Smith</h2>
                    <h2 class="des-account">EMAIL : test@gmail.com</h2>
                    <h2 class="des-account">ADDRESS : 123, LA, US</h2>
                </div>

                <form action="index.php" class="cta-user-button1">
                    <button class="user-shop">CONTINUE SHOPPING</button>
                </form>
                <form action="cart.php" class="cta-user-button2">
                    <button class="user-cart">VIEW SHOPPING CART</button>
                </form>

            </div>
            <div class="section2">
                <!-- clear the session and log in as another user, redirected to the home-page-->
                <form action="index.php" class="cta-user-logout">
                    <button class="user-shop">LOG OUT</button>
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