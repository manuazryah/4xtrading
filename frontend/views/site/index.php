<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = '4xtraders';
}
?>
<section id="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= Yii::$app->homeUrl; ?>images/slider/slider1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h4 class="sub-head">Automated Forex </h4>
                        <h3 class="head">Trading Platform</h3>
                        <p class="info">Looking for an ever expanding variety of investment opportunity?</p>
                        <a href="" class="btn1">Invest Now </a>
                        <span href="" class="intrest-rate">Rate of interest: Up to 16% - 32%</span>
                    </div>
                    <div class="wow-msg">
                        Invest with
                        confidence on
                        4xtraders.com
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= Yii::$app->homeUrl; ?>images/slider/slider1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h4 class="sub-head">Automated Forex </h4>
                        <h3 class="head">Trading Platform</h3>
                        <p class="info">Looking for an ever expanding variety of investment opportunity?</p>
                        <a href="" class="btn1">Invest Now </a>
                        <span href="" class="intrest-rate">Rate of interest: Up to 16% - 32%</span>
                    </div>
                    <div class="wow-msg">
                        Invest with
                        confidence on
                        4xtraders.com
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section id="speciality">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 pad0">
                <p><i class="greencheck"></i> Higher Return on  Investments</p>
            </div>
            <div class="col-lg-3 col-sm-6 pad0">
                <p><i class="greencheck"></i> Instant Payout </p>
            </div>
            <div class="col-lg-3 col-sm-6 pad0">
                <p><i class="greencheck"></i> Expert Traders</p>
            </div>
            <div class="col-lg-3 col-sm-6 pad0">
                <p><i class="greencheck"></i> Secured Investments</p>
            </div>
        </div>
    </div>
</section>

<section id="why-choose">
    <div class="container">
        <div class="main-head-section"><small>Invest and Earn money on the Go</small><h2>Why choose 4xtraders.com</h2></div>
        <p class="discp">Harmless the rush of trading with 4xtraders.com, which provide a innovative way to invest in forex and commodity market with advice of expert Fx traders </p>

        <div class="spec-list">
            <div class="row">
                <div class="col-lg-4 col-md-6 left">
                    <div class="list">
                        <div class="icon"></div>
                        <h4 class="head">Higher Return</h4>
                        <p>Join thousands whoâ€™ve discovered smarter investing by the help of our expert fx traders. Get return on every second, which you can see on your dashboard</p>
                    </div>
                    <div class="list">
                        <div class="icon icon2"></div>
                        <h4 class="head">Instant Payout</h4>
                        <p>Instant payout via Blockchain (Bitcoin)</p>
                    </div>
                    <div class="list">
                        <div class="icon icon3"></div>
                        <h4 class="head">Safe & Secure</h4>
                        <p>4xtraders.com investment  model is based on its clientâ€™s financial success, so when they succeed â€“ we succeed. </p>
                    </div>
                </div>
                <div class="col-md-4 center">
                    <div class="img-box">
                        <img src="<?= Yii::$app->homeUrl; ?>images/icons/Y-choose.jpg" class="img-fluid parallax-window" data-parallax="scroll" data-image-src="images/icons/Y-choose.jpg"/>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 right">
                    <div class="list">
                        <div class="icon icon4"></div>
                        <h4 class="head">Expert Traders</h4>
                        <p>4xtradings.com experts trades over 80+ currency pairs, commodities and stock market</p>
                    </div>
                    <div class="list">
                        <div class="icon icon5"></div>
                        <h4 class="head">24/7 Customer Support</h4>
                        <p>Reach out to us & we will respond as soon as we can. Reach us via Mail support@4xtradings.com</p>
                    </div>
                    <div class="list">
                        <div class="icon icon6"></div>
                        <h4 class="head">Investment Advisor Tool</h4>
                        <p>TheÂ Investment Advisor Â tool will help you take the right investment decisions that are in in line with yourÂ riskÂ taking capacity.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="investment-methods">
    <div class="container">
        <div class="main-head-section"><h2>Select any investment Methods</h2></div>
        <div class="row justify-content-between">
            <div class="col-lg-4 mt-4">
                <div class="heading-block nobottomborder bottommargin-sm">
                    <div class="badge badge-pill badge-default">Investing Packages</div>
                    <h3 class="nott ls0">Connect with millions of investors. <br>Choose Your Best Plan.</h3>
                </div>
                <p>Trading and investing in top stocks. Trade currency pairs, indices and commodities via 4xtraders.com</p>
                <div class="pricing-tenure-switcher" data-container="#pricing-switch">
                    <span class="pts-left">Forex, Commodity</span>
                    <div class="pts-switcher">
                        <div class="switch">
                            <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
                            <label for="switch-toggle-pricing-tenure"></label>
                        </div>
                    </div>
                    <span class="pts-right">Stocks</span>
                    <div class="price-discount"></div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div id="section-pricing" class="page-section nopadding nomargin">
                    <div id="pricing-switch" class="pricing row align-items-end bottommargin-lg clearfix">
                        <div class="col-md-6">
                            <div class="pricing-box">
                                <div class="pricing-title">
                                    <img class="mb-2 nobg noradius" src="<?= Yii::$app->homeUrl; ?>images/icons/man.svg" alt="Pricing Icon" width="50">
                                    <h3>Forex Currency</h3>
                                    <span>Most Popular</span>
                                </div>
                                <div class="pricing-features border-bottom-0">
                                    <ul>
                                        <li><i class="icon-check-circle color mr-2"></i>Minimum Investment xxx</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Daily Return xxxx</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Instant payout</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Referral Income 10 %</li>
                                        <li><i class="icon-check-circle color mr-2"></i>1 year Validity</li>
                                        <li><i class="icon-check-circle color mr-2"></i>24/7 customer support</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Principle included</li>
                                    </ul>
                                </div>
                                <div class="pricing-action">
                                    <div class="pts-switch-content-left"><a href="#" class="button button-large button-rounded btn-block capitalize m-0 ls0">Get Started</a></div>
                                    <div class="pts-switch-content-right"><a href="#" class="button button-large button-rounded btn-block capitalize m-0 ls0">Get Started</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="pricing-box">
                                <div class="pricing-title">
                                    <img class="mb-2 nobg noradius" src="<?= Yii::$app->homeUrl; ?>images/icons/group.svg" alt="Pricing Icon" width="60">
                                    <h3 class="pts-switch-content-left">Commodity pack</h3>
                                    <h3 class="pts-switch-content-right">Stocks</h3>
                                </div>
                                <div class="pricing-features border-bottom-0">
                                    <ul>
                                        <li><i class="icon-check-circle color mr-2"></i>Minimum Investment xxx</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Daily Return xxxx</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Instant payout</li>
                                        <li class="pts-switch-content-left"><i class="icon-check-circle color mr-2"></i>Limitation on request</li>
                                        <li class="pts-switch-content-right color"><i class="icon-check-circle color mr-2"></i>Instant payout</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Referral Income 10 %</li>
                                        <li><i class="icon-check-circle color mr-2"></i>1 year Validity</li>
                                        <li><i class="icon-check-circle color mr-2"></i>24/7 customer support</li>
                                        <li><i class="icon-check-circle color mr-2"></i>Principle included</li>
                                    </ul>
                                </div>
                                <div class="pricing-action">
                                    <div class="pts-switch-content-left"><a href="" class="button button-rounded button-large button-light text-dark bg-white border btn-block nott m-0 ls0">Get Started</a></div>
                                    <div class="pts-switch-content-right"><a href="" class="button button-rounded button-large button-light text-dark bg-white border btn-block nott m-0 ls0">Get Started</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="main-head-section2">
            <div class="badge badge-pill badge-default">About Us</div>
            <h2>How does <strong>4xtradings.com</strong> works and <br>Our Investors Feedback</h2>
            <small>Great platform for investors expecting higher returns</small>
        </div>
        <div class="about-content">
            <div class="row">
                <div class="col-xl-6">
                    <p>
                        <strong>
                            Amazing investment experience with advanced trading systems, expert advisors as well as professional traders makes your investments safe and secure
                        </strong>
                    </p>
                    <p>
                        4xtraders.com is a fantastic investment both from an investment perspective and trading perspective. It provides a systematised and innovative investment opportunity for common people and also it have a great community of social traders.4xtraders.com makes your investment experience enjoyable and secure.
                    </p>
                    <p>
                        Past performance is not an indication of future results. This is not an investment advice. Invest at your own risk. No investor protection
                    </p>
                    <div class="btn-box">
                        <a href="" class="btn1">Iâ€™M Ready to Invest</a>
                        <a href="" class="btn2">Frequently Asked Questions</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <video id="my-video" class="video-js" controls preload="auto" width="512" height="370"
                           poster="<?= Yii::$app->homeUrl; ?>images/my-vid.jpg" data-setup="{}">
                        <source src="<?= Yii::$app->homeUrl; ?>images/my-vid.mp4" type='video/mp4'>
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients">
    <div class="container">
        <div class="main-head-section2">
            <h2>We <strong>trade</strong> on</h2>
        </div>
        <div class="carousel-controls clients-carousel-controls">
            <div class="direction">
                <div class="control d-flex align-items-center justify-content-center prev mt-3 slick-arrow" style=""></div>
                <div class="control d-flex align-items-center justify-content-center next mt-3 slick-arrow" style=""></div>
            </div>
            <div class="client-category">
                <span>89</span>+ Stocks
                <i class="green-point"></i>
            </div>
            <div class="clients-carousel">
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/1.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/2.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/3.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/4.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/5.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-controls clients-carousel-controls2">
            <div class="direction">
                <div class="control d-flex align-items-center justify-content-center prev mt-3 slick-arrow" style=""></div>
                <div class="control d-flex align-items-center justify-content-center next mt-3 slick-arrow" style=""></div>
            </div>
            <div class="client-category">
                <span>50</span>+ Forex pairs
                <i class="green-point"></i>
            </div>
            <div class="clients-carousel2">
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/1.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/2.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/3.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/4.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/forex/4.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-controls clients-carousel-controls3">
            <div class="direction">
                <div class="control d-flex align-items-center justify-content-center prev mt-3 slick-arrow" style=""></div>
                <div class="control d-flex align-items-center justify-content-center next mt-3 slick-arrow" style=""></div>
            </div>
            <div class="client-category">
                <span>6</span>+ Commodities
                <i class="green-point"></i>
            </div>
            <div class="clients-carousel3">
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/1.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/2.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/3.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/1.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
                <div class="one-slide mx-auto">
                    <div class="d-flex flex-direction-column justify-content-center flex-wrap align-items-center">
                        <div class="story-box">
                            <img src="<?= Yii::$app->homeUrl; ?>images/clients/commodities/2.png" alt="" class="img-fluid"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section id="blog">
    <div class="container">
        <div class="main-head-section">
            <div class="badge badge-pill badge-default">Latest Business News</div>
            <h2>Latest Business News</h2>
        </div>
    </div>

    <div class="fullwidth">
        <div class="blog-listing">
            <div class="row">
                <div class="col-lg-5 col-md-5 blog-box">
                    <a href="#!" class="img-box">
                        <div class="blog-meta">Popular</div>
                        <img src="<?= Yii::$app->homeUrl; ?>images/blog/1.jpg" class="img-fluid" alt=""/>
                        <div class="blog-cntnt">
                            <p>Small Businesses Surge against all expectations.</p>
                            <p>Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut, sodales sed.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="row">
                        <div class="col-sm-6 blog-box">
                            <a href="#!" class="img-box">
                                <div class="blog-meta">Latest</div>
                                <img src="<?= Yii::$app->homeUrl; ?>images/blog/2.jpg" class="img-fluid" alt=""/>
                                <div class="blog-cntnt">
                                    <p>We Are News.</p>
                                    <p>Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut, sodales sed.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 blog-box">
                            <a href="#!" class="img-box">
                                <div class="blog-meta">Latest</div>
                                <img src="<?= Yii::$app->homeUrl; ?>images/blog/2.jpg" class="img-fluid" alt=""/>
                                <div class="blog-cntnt">
                                    <p>We Are News.</p>
                                    <p>Donec bibendum dolor at ante. Proin neque dui, pre tium quis fringilla ut, sodales sed.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 blog-box">
                            <a href="#!" class="img-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/blog/3.jpg" class="img-fluid" alt=""/>
                                <div class="blog-cntnt">
                                    <p>Happy Birthday, blue jeans! </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 blog-box">
                            <a href="#!" class="img-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/blog/4.jpg" class="img-fluid" alt=""/>
                                <div class="blog-cntnt">
                                    <p>Happy Birthday, blue jeans! </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 blog-box">
                            <a href="#!" class="img-box">
                                <img src="<?= Yii::$app->homeUrl; ?>images/blog/5.jpg" class="img-fluid" alt=""/>
                                <div class="blog-cntnt">
                                    <p>Happy Birthday, blue jeans! </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
