<?php

use yii\helpers\Html;
?>
<div id="about-page">

    <section class="sec1">
        <div class="container">
            <div class="row">
                <div class="main-head-section"><h2><span>10 Years of</span> Working Experience in Quality Services</h2></div>
                <div class="sec-info col-lg-10">Harmless the rush of trading with 4xtraders.com, which provide a innovative way to invest in forex and commodity market with advice of expert Fx traders </div>

                <div class="quality-services col-lg-10">
                    <div class="row">
                        <div class="col-lg-4 box">
                            <div class="head">Heading Name</div>
                            <div class="img-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/quality-service1.png" alt="Quality Service" class="img-fluid"/>
                            </div>
                            <div class="info">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                            </div>
                        </div>
                        <div class="col-lg-4 box">
                            <div class="head">Heading Name</div>
                            <div class="img-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/quality-service2.png" alt="Quality Service" class="img-fluid"/>
                            </div>
                            <div class="info">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                            </div>
                        </div>
                        <div class="col-lg-4 box">
                            <div class="head">Heading Name</div>
                            <div class="img-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/quality-service3.png" alt="Quality Service" class="img-fluid"/>
                            </div>
                            <div class="info">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec2">
        <div class="container">
            <div class="main-head-section2">
                <h2>What is <strong>4xtradings ?</strong></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>4xtraders.com is a fantastic investment both from an investment perspective and trading perspective. It provides a systematised and innovative investment opportunity for common people and also it have a great community of social traders.4xtraders.com makes my investment experience enjoyable and secure.</p>

                    <p>Past performance is not an indication of future results. This is not an investment advice. Invest at your own risk. No investor protection</p>
                    <a href="#!" class="orng-btn">I'M Ready to Invest</a>
                </div>
                <div class="col-lg-6">
                    <div class="img-div">
                        <img src="<?= Yii::$app->homeUrl; ?>images/Y-4x.jpg" alt="4XTrading" class="img-fluid"/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3">
        <div class="container">
            <div class="our-vision">
                <div class="head">Our Vision & Mission</div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when</p>
            </div>
        </div>
    </section>

    <section id="clients">
        <div class="container">
            <div class="main-head-section2">
                <h2>We accept</h2>
            </div>
            <div class="carousel-controls we-accept-carousel-controls">
                <!--                <div class="direction">
                                    <div class="control d-flex align-items-center justify-content-center prev mt-3 slick-arrow" style=""></div>
                                    <div class="control d-flex align-items-center justify-content-center next mt-3 slick-arrow" style=""></div>
                                </div>-->
                <div class="we-accept-carousel">
                    <div class="one-slide mx-auto">
                        <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                            <div class="story-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/clients/we-accept/1.jpg" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="one-slide mx-auto">
                        <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                            <div class="story-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/clients/we-accept/2.jpg" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="one-slide mx-auto">
                        <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                            <div class="story-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/clients/we-accept/3.jpg" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="one-slide mx-auto">
                        <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                            <div class="story-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/clients/we-accept/4.jpg" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                    <div class="one-slide mx-auto">
                        <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                            <div class="story-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/clients/we-accept/5.jpg" alt="" class="img-fluid"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="head">What is Lorem Ipsum</div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
                <div class="col-lg-3">
                    <?= Html::a('Contact Us', ['/site/contact'], ['class' => 'grey-btn']) ?>
                </div>
            </div>
        </div>
    </section>

</div>
