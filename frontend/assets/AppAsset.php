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
        'css/bootstrap.min.css',
        'css/animate.min.css',
        'css/font-awesome.min.css',
        'css/lightbox.css',
        'css/main.css',
        'css/presets/preset1.css',
        'css/responsive.css',
        'css/style.css',
        'layui/css/layui.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/jquery.inview.min.js',
        'js/wow.min.js',
        'js/mousescroll.js',
        'js/smoothscroll.js',
        'js/jquery.countTo.js',
        'js/lightbox.min.js',
        'js/html5shiv.js',
        'js/main.js',
        'js/respond.min.js',
        'layui/layui.all.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
