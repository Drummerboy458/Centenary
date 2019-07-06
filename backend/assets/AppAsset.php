<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/animate.css',
        'css/font-awesome.min.css.css',
        'css/main.css',
        'css/main.min.css',
    ];
    public $js = [
        'js/application.js',
        'js/html5shiv.js',
        'js/jquery-1.10.2.min.js',
        'js/modernizr-2.6.2.min.js',
        'js/respond.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
