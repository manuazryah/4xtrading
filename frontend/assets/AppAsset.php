<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css',
        'https://use.fontawesome.com/releases/v5.5.0/css/all.css',
        'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900',
        'css/font-icons.css',
        'css/colors69bb.css',
        'css/bs-switches.css',
        'https://vjs.zencdn.net/7.3.0/video-js.css',
        'https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.5.0/css/slider-pro.min.css',
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css',
        'css/style.css',
        'css/responsive.css',
    ];
    public $js = [
        'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js',
        '//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js',
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js',
        'https://unpkg.com/popper.js@1.14.6/dist/umd/popper.min.js',
        'https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js',
        'https://cdn.jsdelivr.net/jquery.marquee/1.3.1/jquery.marquee.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/slider-pro/1.5.0/js/jquery.sliderPro.min.js',
        'https://vjs.zencdn.net/7.3.0/video.js',
        'https://www.google.com/recaptcha/api.js',
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
