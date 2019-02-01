<?php

use yii\helpers\Html;
?>

<div id="faq-page">

    <section class="banner">
        <div class="common-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 content-box">
                        <h1><span class="light">Professional</span><br>Email Hosting</h1>
                        <p class="description">Communicate smarter! Create your email address on your domain<br class="hidden-sm hidden-xs">name to add trust and credibility to your email interactions.</p>
                        <a href="#!" id="banner-buy-now">
                            <div class="email-buynow">
                                BUY NOW
                            </div>
                        </a>
                        <p class="email-starting">
                            Starting as low as <strong><span class="WebRupee">&#8377;</span>29/mo</strong> per Email ID
                        </p>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal">What is email hosting?</a>
                        </p>
                    </div>
                    <div class="col-md-5 hidden-xs hidden-sm img-box">
                        <section class="main-slider hidden-xs">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= Yii::$app->homeUrl; ?>images/common-bnr/1.png" alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="buy-domain">
        <div class="container">
            <div class="bg">
                <div class="main-head-section2">
                    <h2><strong>Ask questions, get Answers!</strong></h2>
                </div>
                <div class="row">
                    <form action="" method="post" class="col-lg-8">
                        <div class="price-sec">
                            <div class="price">$18.17</div>
                            <div class="off-price">$1.17.com</div>
                        </div>
                        <input type="email" id="subscribe_email" placeholder="Type the one you want here" required="">
                        <input type="submit" value="Search" class="subscribe-btn">
                        <div class="msg">Buy your domain in less than 2minutes</div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs">
        <div class="container">
            <div class="main-head-section2">
                <h2><strong>Frequently Asked Questions</strong></h2>
            </div>
            <div class="icon-list">
                <div class="item">
                    <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/icons/faq/1.jpg" alt="" class="img-fluid"/></div>
                    <div class="title">Higher Return</div>
                </div>
                <div class="item">
                    <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/icons/faq/2.jpg" alt="" class="img-fluid"/></div>
                    <div class="title">Instant Payout</div>
                </div>
                <div class="item">
                    <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/icons/faq/3.jpg" alt="" class="img-fluid"/></div>
                    <div class="title">Safe & Secure</div>
                </div>
                <div class="item">
                    <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/icons/faq/4.jpg" alt="" class="img-fluid"/></div>
                    <div class="title">Expert Traders</div>
                </div>
                <div class="item">
                    <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/icons/faq/5.jpg" alt="" class="img-fluid"/></div>
                    <div class="title">24/7 Customer Support</div>
                </div>
                <div class="item">
                    <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/icons/faq/6.jpg" alt="" class="img-fluid"/></div>
                    <div class="title">Risk Tolerence Calculator</div>
                </div>
            </div>

            <div id="accordion">
                <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapse1">Its function as a filler or as a tool for comparing the visual impression? </a>
                    </div>
                    <div id="collapse1" class="collapse show " data-parent="#accordion">
                        <div class="sizing">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse2">Its function as a filler or as a tool for comparing the visual impression? </a>
                    </div>
                    <div id="collapse2" class="collapse" data-parent="#accordion">
                        <div class="sizing">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse3">Its function as a filler or as a tool for comparing the visual impression? </a>
                    </div>
                    <div id="collapse3" class="collapse" data-parent="#accordion">
                        <div class="sizing">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#collapse4">Its function as a filler or as a tool for comparing the visual impression? </a>
                    </div>
                    <div id="collapse4" class="collapse" data-parent="#accordion">
                        <div class="sizing">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                        </div>
                    </div>
                </div>
            </div> 

        </div>
    </section>

    <section class="need-hlp">
        <div class="container">
            <p>Need help? <icon class="phone"></icon>Call us at <a href="tel:+197 566 000 35">+197 566 000 35</a>  ( Toll - Free ) or <icon class="mail"></icon>Send Mail  <a href="mailto:support@4xtradings.com">support@4xtradings.com</a></p>
        </div>
    </section>

</div>