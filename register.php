<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | REGISTER");

    outputBannerNavigation("");
    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- input-fields so as to be able to create an account-->
    <section class="hero registration">
        <!-- registration form -->
        <!-- creating input fields for the user to be able to log in -->
        <div class="container-signup">
            <h2 class="signup-title">CREATE YOUR ACCOUNT HERE</h2>

            <div class="signin-info2">
                <div class="signin-info2">
                    <h2 class="signup-title2">Already have an ULX account?</h2>
                </div>
                <form action="login.php" class="link">
                    <button href="#" class="cta-link-signup">LOG IN HERE</button>
                </form>
            </div>

            <form class="form-register" id="form-signup">
                <div class="input-field-register">
                    <input type="text" class="form-field-1" placeholder="First Name" />
                </div>
                <div class="input-field-register">
                    <input type="text" class="form-field-1" placeholder="Last Name" />
                </div>
                <div class="input-field-register">
                    <input type="email" class="form-field-1" placeholder="E-mail" />
                </div>
                <p class="email-info">This will be your username as well.</p>
                <div class="input-field-register">
                    <input type="password" class="form-field-1" placeholder="Password" />
                </div>
                <div class="input-field-register">
                    <input type="password" class="form-field-1" placeholder="Confirm your password" />
                </div>
                <div class="input-field-register">
                    <input type="text" class="form-field-1" placeholder="Address" />
                </div>
                <div class="input-field-register">
                    <input type="number" class="form-field-1" placeholder="Telephone Number" />
                </div>
                <div class="info-rules">
                    <input type="checkbox" name="rules" id="rules">
                    <label for="rules">I agree to the terms & conditions of <b>ULX STORE</b>.</label>
                </div>
                <div class="register-button-1">
                    <!-- registration button, an account will be created -->
                    <input type="submit" value="CREATE ACCOUNT" class="register-button" onclick="">
                </div>
            </form>
        </div>
    </section>

    
<?php 
    /* common functions to be used in all pages */

    /* outputs the about us info */
    outputAboutUs();
    /* outputs the footer */
    outputFooter();
   
?>