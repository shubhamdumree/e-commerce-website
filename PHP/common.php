<?php

//Ouputs the header for the page and opening body tag
function outputHeader($page_title){
    
    echo '<!DOCTYPE html>';
    echo '<html lang = "en">';
    echo '<head>';
    echo '<meta charset="UTF-8"/>';
    echo '<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->';
    echo '<!-- Link to external style sheet -->';
    echo '<!-- Common css for all pages -->';
    echo '<link rel="stylesheet" href="css/style.css"/>';
    echo '<link rel="website icon" href="images/logo.png"/>';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>';
    echo '<title>' . $page_title . '</title>';
    echo '</head>';

}

/* Ouputs the banner and the navigation bar
The selected class is applied to the page that matches the page name variable */
function outputBannerNavigation($pageName){
    //Output banner and first part of navigation
    echo '<body>';
    echo '<header>';
    echo '<div class="container">';
    echo '<nav class="nav-logo">';
    echo '<ul class="nav-list">';
    echo '<li class="nav-item">';
    echo '<a href="index.php" class="nav-logo">U L X</a>';
    echo '</li>';
                
        //Array of pages to link to
        $linkNames = array("HOME", "MEN", "WOMEN", "ACCESSORIES", "ABOUT US");
        $linkAddresses = array("index.php", "men.php", "women.php", "accessories.php", "#about");
        
        //Output navigation
        for($x = 0; $x < count($linkNames); $x++){
            echo '<li><a class="';
            if($linkNames[$x] == $pageName){
                 echo 'active ';
            }
            echo 'nav-link" href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
        }
        
    echo '<li class="nav-item">';
    echo '<a href="#"><i class="fa fa-search"></i></a>';
    echo '</li>';
    echo '<li class="nav-item">'; 
    echo '<a href="cart.php"><i class="fa fa-shopping-cart"></i></a>'; 
    echo '</li>';
    echo '</ul>';
    echo '</nav>';
    echo '</div>';
    echo '</header>';
}

//  Ouputs the second banner and the mini-navigation bar   
function outputOverview() {
    echo '<section class="hero overview">';
    echo '<div class="container-2">';
    echo '<nav class="nav">';
    echo '<ul class="nav-list-2">';
    echo '<li class="nav-item">';
    echo '<a href="login.php" class="nav-link-1">LOG IN</a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a href="register.php" class="nav-link-1">SIGN UP</a>';
    echo '</li>';
    echo '<li class="nav-item">';
    echo '<a href="account.php"><i class="fa fa-user fa-2x"></i></a>';
    echo '</li>';
    echo '</ul>';
    echo '</nav>';        
    echo '</div>';
    echo '</section>';

}

// Outputs the info-bar
function outputInformation() {
    echo '<section class="hero update">';
    echo '<div class="container">';
    echo '<nav class="nav-update">';
    echo '<h3 class="update-bar">FREE WORLWIDE SHIPPING OVER 50 EUR</h3>';
    echo '</nav>';
    echo '</div>';
    echo '</section>';
}

// Outputs the about us info of the company
function outputAboutUs(){
    echo '<section class="hero about-us" id="about">';
    echo '<hr>';
    echo '<div class="container-footer-content">';
    echo '<div class="footer-section-about">';
    echo '<h3 class="footer_text">U L X</h3>';
    echo '<p class="info-about">';
    echo 'ULX is one of the largest international fashion companies. It belongs to MDX, one of the world’s largest distribution groups. <br />The customer is at the heart of our unique business model, which includes design, production, distribution and sales through our <br /> extensive retail network.';
    echo '</p>';
    echo '</div>';
    echo '<span class="contact-mail"><i class="fa fa-envelope fa-xs"></i> &nbsp; info@ulxstore.com</span>';
    echo '</div>';
    echo '</section>';
}

//   Ouputs the footer
function outputFooter() {
    echo '<footer class="hero footer">';
    echo '<div class="footer_container">';
    echo '<div class="footer_box">';
    echo '<h3 class="footer_title">COMPANY</h3>';
    echo '<ul class="nav-list-footer">';
    echo '<li>';
    echo '<a href="#about" class="footer_link">ABOUT US</a>';
    echo '</li>';
    echo '<li>';
    echo '<a href="#" class="footer_link">NEWSLETTER</a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '<div class="footer_box">';
    echo '<h3 class="footer_title">ACCESS</h3>';
    echo '<ul class="nav-list-footer">';
    echo '<li>';
    echo '<a href="men.php" class="footer_link">MEN</a>';
    echo '</li>';
    echo '<li>';
    echo '<a href="women.php" class="footer_link">WOMEN</a>';
    echo '</li>';
    echo '<li>';
    echo '<a href="accessories.php" class="footer_link">ACCESSORIES</a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '<div class="footer_box-help">';
    echo '<h3 class="footer_title">HELP</h3>';
    echo '<ul class="nav-list-footer">';
    echo '<li>';
    echo '<a href="men.php" class="footer_link">PRODUCT</a>';
    echo '</li>';
    echo '<li>';
    echo '<a href="account.php" class="footer_link">MY ACCOUNT</a>';
    echo '</li>';
    echo '<li>';
    echo '<a href="cart.php" class="footer_link">VIEW YOUR CART</a>';
    echo '</li>';
    echo '<li><a href="#" class="footer_link">PURCHASE CONDITIONS</a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '<div class="footer_box-social">';
    echo '<h3 class="footer_title">FOLLOW</h3>';
    echo '<ul class="nav-list-footer-social">';
    echo '<li class="footer_social">';
    echo '<a href="https://www.facebook.com/"><i class="fa fa-facebook-square fa-3x"></i></a>';
    echo '</li>';
    echo '<li class="footer_social">';
    echo '<a href="https://www.instagram.com/"><i class="fa fa-instagram fa-3x"></i></a>';
    echo '</li>';
    echo '<li class="footer_social">';
    echo '<a href="https://twitter.com/"><i class="fa fa-twitter-square fa-3x"></i></a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '<div class="f-disclaimer">';
    echo 'Copyright ULX © 2020 &nbsp; Designed by Shubham Dumree.<br />All rights Reserved | Sales & Refunds | Disclaimer & Privacy Policy | Legal';
    echo '</div>';
    echo '</footer>';
    echo '</body>';
    echo '</html>';

}