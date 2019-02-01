<?php

use yii\helpers\Html;
?>
<div id="packages-page">

    <section class="banner">
        <div class="common-banner2 col-xs-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7">
                                <h1>| INTRODUCING BIGROCK INSTANT</h1>
                                <h2>Take your domain live in 2 mins</h2>
                                <p>
                                    <strong>BigRock Instant</strong> gives you a quick, 1-page live site that allows you to start promoting your brand instantly.
                                </p>
                                <div class="domain-search">
                                    <p>Get BigRock Instant at just
                                        <strong> ₹299</strong>
                                    </p>
                                    <div class="domain-search-box">
                                        <form id="DomainSearch" name="" method="post" action="">
                                            <div class="domain-select-wrapper">
                                                <div class="br-dca-wrapper">
                                                    <input type="text" placeholder="type your domain name here" name="txtDomainName" class="domains-input" id="field_domains-input" maxlength="65" onkeydown="remove_error_msg();">
                                                    <button type="button" class="domain-submit" id="go_btn" onclick="return check_domain_name();">SEARCH</button>
                                                </div>

                                            </div>

                                        </form>
                                    </div>

                                    <p class="login-link">Already own a domain?
                                        <a href="login.php">Login</a>
                                    </p>
                                </div>

                            </div>
                            <div class="col-md-5">
                                <div class="image-box">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/bg/common-banner2-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="short-features">
        <ul>
            <li>No coding</li>
            <li>Updates Instantly</li>
            <li>Easy-to-use Dashboard</li>
            <li>Mobile Ready</li>
            <li>Links to Facebook/Twitter</li>
        </ul>
    </section>

    <section class="investment-packages">
        <div class="container">
            <div class="main-head-section"><small>Lorem Ipsum is simply dummy text </small><h2>Investment Packages</h2></div>
            <div class="package-listing">
                <div class="row">
                    <div class="col-md-4 package-box">
                        <ul>
                            <div class="package-head">Forex Currency</div>
                            <li>Referral Income 10 %</li>
                            <li>1 Year Validity</li>
                            <li>24/7 customer support</li>
                            <li>Principle included</li>
                            <li>Minimum  investment <span>100$</span></li>
                            <li>Daily Return</li>
                            <li>Instant payout</li>
                            <li>
                                <select class="form-control" name="package">
                                    <option value="" selected="">100$, xxx$,xxxx$ </option>
                                    <option value="">200$, xxx$,xxxx$ </option>
                                    <option value="">300$, xxx$,xxxx$ </option>
                                    <option value="">400$, xxx$,xxxx$ </option>
                                </select>
                            </li>
                            <li>
                                <button class="selct-plan">Select Plan</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 package-box popular">
                        <div class="package-rebon"></div>
                        <ul>
                            <div class="package-head">Stocks</div>
                            <li>Referral Income 10 %</li>
                            <li>1 Year Validity</li>
                            <li>24/7 customer support</li>
                            <li>Principle included</li>
                            <li>Minimum  investment <span>100$</span></li>
                            <li>Daily Return</li>
                            <li>Instant payout</li>
                            <li>
                                <select class="form-control" name="package">
                                    <option value="" selected="">100$, xxx$,xxxx$ </option>
                                    <option value="">200$, xxx$,xxxx$ </option>
                                    <option value="">300$, xxx$,xxxx$ </option>
                                    <option value="">400$, xxx$,xxxx$ </option>
                                </select>
                            </li>
                            <li>
                                <button class="selct-plan">Select Plan</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 package-box">
                        <ul>
                            <div class="package-head">Commodity pack</div>
                            <li>Referral Income 10 %</li>
                            <li>1 Year Validity</li>
                            <li>24/7 customer support</li>
                            <li>Principle included</li>
                            <li>Minimum  investment <span>100$</span></li>
                            <li>Daily Return</li>
                            <li>Instant payout</li>
                            <li>
                                <select class="form-control" name="package">
                                    <option value="" selected="">100$, xxx$,xxxx$ </option>
                                    <option value="">200$, xxx$,xxxx$ </option>
                                    <option value="">300$, xxx$,xxxx$ </option>
                                    <option value="">400$, xxx$,xxxx$ </option>
                                </select>
                            </li>
                            <li>
                                <button class="selct-plan">Select Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-choose">
        <div class="container">
            <div class="main-head-section2">
                <h2><strong>4xtradings.com</strong> Dummy text dummy text dummy</h2>
                <small>Dummy text is text that is used in the publishing industry or by web designers </small>
            </div>
            <div class="box-listing">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="list">
                            <div class="icon"></div>
                            <h4 class="head">Instant Payout</h4>
                            <p>Join thousands who’ve discovered smarter investing by the help of our expert </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="list">
                            <div class="icon icon2"></div>
                            <h4 class="head">Risk Tolerence Calculator</h4>
                            <p>Join thousands who’ve discovered smarter investing by the help of our expert </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="list">
                            <div class="icon icon3"></div>
                            <h4 class="head">Live Profit Streaming</h4>
                            <p>Join thousands who’ve discovered smarter investing by the help of our expert </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="list">
                            <div class="icon icon4"></div>
                            <h4 class="head">Advanced Dashboard</h4>
                            <p>Join thousands who’ve discovered smarter investing by the help of our expert </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="list">
                            <div class="icon icon5"></div>
                            <h4 class="head">24/7 Support</h4>
                            <p>Join thousands who’ve discovered smarter investing by the help of our expert </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="list">
                            <div class="icon icon6"></div>
                            <h4 class="head">Safety & Security of fund</h4>
                            <p>Join thousands who’ve discovered smarter investing by the help of our expert </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="forex-price">
        <div class="container">
            <div class="main-head-section"><h2>Live forex price? <span>which we are recently trading! </span><a href="#!">Learn More</a></h2></div>
            <tag>Switch to india hosting</tag>
            <div class="price-list">
                <div class="row">
                    <div class="col-lg-4 spacing">
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/1.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-5.63%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/2.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-0.32%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/6.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-0.32%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 spacing">
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/1.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-5.63%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/2.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-0.32%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/5.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-0.32%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 spacing">
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/1.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-5.63%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/3.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-0.32%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="icon"><img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/4.png" alt="" class="img-fluid"></div>
                            <div class="price">
                                <div class="live-price">-0.32%</div>
                                <div class="og-price">(-12.50)</div>
                            </div>
                        </div>
                    </div>
                </div>
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

</div>