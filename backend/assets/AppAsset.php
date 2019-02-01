<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css',
        'css/ionicons.min.css',
        'css/AdminLTE.min.css',
        'css/_all-skins.min.css',
        'css/custom.css',
        'https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900',
    ];
    public $js = [
//        'js/jquery.min.js',
        'js/bootstrap.min.js',
        'js/jquery.slimscroll.min.js',
        'js/fastclick.js',
        'js/adminlte.min.js',
        'js/demo.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
