<?php

use yii\helpers\Html;
?>

<div id="login-page">
    <div class="sec1">
        <div class="container">
            <div class="page-head">
                <div class="main-head-section"><h2>User <span>login</span> Page</h2></div>
                <div class="sec-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
            </div>

            <div class="form-div">
                <div class="form-head"><div class="logo"><img src="<?= Yii::$app->homeUrl; ?>images/logo.png" class="img-fluid" alt="logo"/></div></div>
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-6 left-box">
                            <div class="q">New to 4xtrading ?</div>
                            <div class="a">Join today and take advantage of the benefits we provide</div>
                            <div class="msg">Create an account in 10 seconds</div>
                            <a href="register.php" class="orng-btn">Create  an Account</a>
                        </div>
                        <div class="col-md-6 right-box">
                            <div class="q">Existing User ?</div>
                            <div class="a">Please sign in with your credentials below to continue.</div>
                            <form action="" method="post" class="login-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" placeholder="Username or Email" class="form-control" id="user-name" name="email" required="">
                                            <span class="icon user"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="password" placeholder="Password" class="form-control" id="password" name="password" required="">
                                            <span class="icon password"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group no-margin">
                                            <a href="#!" class="forgot">Forgotten password?</a>

                                            <div class="remember">
                                                <input type="checkbox" checked="" id="remember-me">
                                                <label for="remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="orng-btn">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="need-hlp">
        <div class="container">
            <p>Need help? <icon class="phone"></icon>Call us at <a href="tel:+197 566 000 35">+197 566 000 35</a>  ( Toll - Free ) or <icon class="mail"></icon>Send Mail  <a href="mailto:support@4xtradings.com">support@4xtradings.com</a></p>
        </div>
    </section>

</div>