<?php
    /* common functions to be used in all pages */
    /*Include the PHP functions to be used on the page */
    include('PHP/common.php'); 

    outputHeader("ULX | SIGN IN");

    outputBannerNavigation("");
    /* common function to display mini nav-bar on all pages */
    outputOverview();

    outputInformation();
    
?>

<!-- input-fields so as to be able to log in-->
    <section id="sign-in">
        <div class="container-signin">
            <div class="sign-in-info">
                <h2 class="login-title">LOG IN</h2>
                <div class="signin">
                    <div class="input-field">
                        <input type="text" class="form-field" placeholder="e-mail" />
                    </div>
                    <div class="input-field">
                        <input type="password" class="form-field" placeholder="password" />
                    </div>
                    <div class="info-sign-up">
                        <h4 class="title-sub-heading-info-log">
                            By clicking here, you will be able to shop.
                        </h4>
                    </div>
                    <form action="index.php" class="cta">
                        <button href="#" class="sign-in-page-button">LOG IN</button>
                    </form>

                </div>
            </div>

            <div class="sign-up-info">
                <h2 class="login-title">REGISTER</h2>
                <p class="register-info">
                    If you still don't have a <b>ULX</b> account, use this option to <br /> access the registration
                    form.
                    <br /> <br />
                    By giving us your details, purchasing in <b>ULX Store </b> will <br /> be faster and an enjoyable
                    experience.
                </p>
                <!-- redirected to the registration page-->
                <form action="register.php" class="cta">
                    <button href="#" class="sign-in-page-button2">CREATE ACCOUNT</button>
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