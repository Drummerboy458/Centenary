<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.min.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/lightbox.css',
        'css/main.css',
        'css/responsive.css',
        'css/presets/preset1.css',
        'css/presets/preset2.css',
        'css/presets/preset3.css',
        'css/presets/preset4.css',
        'css/presets/preset5.css',
        'css/presets/preset6.css',
    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/html5shiv.js',
        'js/jquery.countTo.js',
        'js/jquery.inview.min.js',
        'js/jquery.js',
        'js/lightbox.min.js',
        'js/main.js',
        'js/mousescroll.js',
        'js/respond.min.js',
        'js/smoothscroll.js',
        'js/wow.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
