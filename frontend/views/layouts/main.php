<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <link href="<?= Yii::$app->homeUrl; ?>images/favicon.png" rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id     ?>
        <header id="myHeader" class="header main_head"><!--header-->
            <section class="navbar-custom" role="navigation"><!--fixed-top header-->
                <div class="top-contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 sm-txt-rit">
                                <ul class="quick-contact">
                                    <li><a class="mail" href="mailto:support@4xtradings.com"> <span>support@4xtradings.com</span></a></li>
                                    <li><a class="phone" href="tel:+971 566 000 35"> <span>+971 566 000 35</span></a></li>
                                </ul>
                                <div class="top-right">
                                    <ul>
                                        <li>
                                            <?= Html::a('Login', ['/site/login'], ['class' => 'login']) ?>
                                        </li>
                                        <li>
                                            <?= Html::a('Register', ['/site/signup'], ['class' => 'register']) ?>
                                        </li>
                                    </ul>
                                    <ul class="language-top">
                                        <button type="button" data-toggle="dropdown" class="button-lg"> <img src="<?= Yii::$app->homeUrl; ?>images/icons/eng-flag.png" alt="icon" width="18" class="img-box"> <span class="span">ENG</span></button>
                                        <div class="dropdown-menu"> <a href="<?= Yii::$app->homeUrl; ?>images/icons/eng-flag.png"><img src="" alt="icon" width="18" class="img-box"> <span class="span">ARB </span></a> </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo-section">
                                    <h1 class="logo">
                                        <?= Html::a('<img src="' . Yii::$app->homeUrl . 'images/logo.png" alt="4XTradings" title="4XTradings" class="img-fluid">', ['/site/index']) ?>
                                    </h1>
                                </div>
                                <div class="menu-icon">
                                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown2" aria-expanded="false" aria-label="Toggle navigation">
                                        <div class="main-icon-bar"> <i class="fa fa-bars"></i></div>
                                    </button>
                                </div>
                            </div>
                            <div class="col-lg-7 pl0">
                                <div class="main-nav-section">
                                    <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                            <ul class="navbar-nav">
                                                <li class="nav-list <?= $action == 'site/index' ? 'active' : '' ?>"> <?= Html::a('Home', ['/site/index'], ['class' => 'link']) ?></li>
                                                <li class="nav-list <?= $action == 'site/about' ? 'active' : '' ?>"> <?= Html::a('About US', ['/site/about'], ['class' => 'link']) ?></li>
                                                <li class="nav-list <?= $action == 'site/investing-packages' ? 'active' : '' ?>"> <?= Html::a('Investing</a><span class="h-tag">Packs</span>', ['/site/investing-packages'], ['class' => 'link']) ?></li>
                                                <li class="nav-list <?= $action == 'site/faq' ? 'active' : '' ?>"> <?= Html::a('How it works', ['/site/faq'], ['class' => 'link']) ?></li>
                                                <li class="nav-list <?= $action == 'site/news' || $action == 'site/news-details' ? 'active' : '' ?>"> <?= Html::a('News', ['/site/news'], ['class' => 'link']) ?></li>
                                                <li class="nav-list <?= $action == 'site/contact' ? 'active' : '' ?>"> <?= Html::a('Contact us', ['/site/contact'], ['class' => 'link']) ?></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-8 col-12  md-hidden">
                                <div class="advidor-console">
                                    <a href="">Investment Advisor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
        </header>
        <!--header-->
        <div class="topbar">

            <div class="marquee">
                <div class="marquee--inner">
                    <ul id="marquee">
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/btcbz.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">BTCBZ  <span>$10</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/btc.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">BTC  <span>$3627.65</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/eth_logo.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">ETH <span>$121.63</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/eos_1.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">EOS <span>$2.44</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/12-bitcoin-cash-square-crop-small-grn.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">BCH   <span>$126.99</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/litecoin-logo.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">LTC <span>$30.9</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/xrp.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">XRP <span>$0.3276</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/etc_new.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">ETC <span>$4.33</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/mith.jpg" width="25px"> 
                                </div>
                                <div class="client-stock-rate">MITH <span>$0.05333</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/neo.jpg" width="25px"> 
                                </div>
                                <div class="client-stock-rate">NEO <span>$7.66</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/qtum.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">QTUM <span>$2.1</span></div>
                            </div>
                        </li>

                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/btcbz.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">BTCBZ  <span>$10</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/btc.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">BTC  <span>$3627.65</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/eth_logo.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">ETH <span>$121.63</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/eos_1.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">EOS <span>$2.44</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/12-bitcoin-cash-square-crop-small-grn.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">BCH   <span>$126.99</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/litecoin-logo.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">LTC <span>$30.9</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/xrp.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">XRP <span>$0.3276</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/etc_new.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">ETC <span>$4.33</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/mith.jpg" width="25px"> 
                                </div>
                                <div class="client-stock-rate">MITH <span>$0.05333</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/neo.jpg" width="25px"> 
                                </div>
                                <div class="client-stock-rate">NEO <span>$7.66</span></div>
                            </div>
                        </li>
                        <li class="orb">
                            <div class="stock-sensex">
                                <div class="client-logo">
                                    <img src="<?= Yii::$app->homeUrl; ?>images/stock-slide/qtum.png" width="25px"> 
                                </div>
                                <div class="client-stock-rate">QTUM <span>$2.1</span></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--header-->
        <?= $content ?>
        <!--Footer-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="foot-abt">
                            <div class="foot-logo"><img src="<?= Yii::$app->homeUrl; ?>images/foot-logo.png" class="img-fluid"/></div>
                            <span> “Automated Forex Trading platform”</span>
                            <p>Platform for investors expecting higher returns. Explore an ever expanding variety of investment opportunity</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="foot-links">
                            <div class="foot-head"><span>Extra Links</span></div>
                            <ul>
                                <li><?= Html::a('Home page', ['/site/index']) ?></li>
                                <li><?= Html::a('About us', ['/site/about']) ?></li>
                                <li><?= Html::a('Investing (packages)', ['/site/investing-packages']) ?></li>
                                <li><?= Html::a('How it works (FAQ)', ['/site/faq']) ?></li>
                                <li><?= Html::a('News', ['/site/news']) ?></li>
                                <li><?= Html::a('Partner with us', ['/site/partners']) ?></li>
                                <li><?= Html::a('Contact us', ['/site/contact']) ?></li>
                                <li><?= Html::a('Sitemap', ['/site/sitemap']) ?></li>
                                <li><?= Html::a('Terms and Conditions', ['/site/terms-conditions']) ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="foot-address">
                            <div class="foot-head"><span>Contact us</span></div>
                            <div class="address list"> 
                                <i class="icon"></i>
                                <span>OUR OFFICE</span>P.O.Box : 112586  Dubai - U.A.E.</div>
                            <div class="phone list">
                                <i class="icon"></i>
                                <span>PHONE</span>+971 4 267 1752</div>
                            <div class="mail list">
                                <i class="icon"></i>
                                <span>Mail</span>support@4xtradings.com</div>
                        </div>
                        <ul class="social-icon">
                            <li><a class="fab fa-facebook-f" target="_blank" href="#"></a></li>
                            <li><a class="fab fa-twitter" target="_blank" href="#"></a></li>
                            <li><a class="fab fa-linkedin-in" target="_blank" href="#"></a></li>
                            <li><a class="fab fa-google-plus-g" target="_blank" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <p>Copyright © <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script> </span> All Rights Reserved. Designed by <a href="http://epitome.ae" target="_blank">Epitome</a></p>
                </div>
            </div>

        </footer>

        <!--footer--> 
        <a href="#" class="scrollup" >Scroll</a> <!--Scroll--> 
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    $(document).ready(function () {
        $(document).on('submit', '.contact-enquiry', function (e) {
            e.preventDefault();
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                if ($("#recaptcha").next(".validation").length == 0) // only add if not added
                {
                    $("#recaptcha").after("<div class='validation' style='color:#c54040;bottom: 50px;font-weight: 600;position: absolute;font-size: 13px;margin-bottom: 14px;'>Please verify that you are not a robot</div>");
                }
            } else {
                var str = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: '<?= Yii::$app->homeUrl; ?>site/contact-enquiry',
                    data: str,
                    success: function (data)
                    {
                        if (data == 1) {
                            $('.contact-enquiry').before('<div id="email-alert" style="">Your Contact Enquiry Send Successfully</div>');
                        }
                        $('#name').val("");
                        $('#email').val("");
                        $('#phone').val("");
                        $('#company').val("");
                        $('#message').val("");
                        $('#email-alert').delay(1000).fadeOut('slow');
                        $(".validation").remove();
                    }
                });
            }
        });

        $(document).on('submit', '.news-letter', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/news-letter',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.news-letter').append('<div id="email-alert" style="">Your Request Send Successfully</div>');
                    } else if (data == 2) {
                        $('.news-letter').append('<div id="email-alert" style="">Already Send Rrequest</div>');
                    }
                    $('#news-email').val("");
                    $('#email-alert').delay(1000).fadeOut('slow');
                }
            });
        });
    });
</script>
