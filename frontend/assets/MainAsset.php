<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/layout.css',
         //'css/main.css',
        'css/responsive.css',
        'css/lww.css',
    ];
    public $js = [
        'js/lww.js',
        'js/respond.min.js',
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/mainforlayout.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
