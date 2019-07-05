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
        // 'css/bootstrap.min.css',
        // 'css/animate.min.css',
        // 'css/font-awesome.min.css',
         //'css/lightbox.css',
         'css/layout.css',
        // 'css/presets/preset1.css',
        // 'css/responsive.css',
        // 'css/style.css',
    ];
    public $js = [

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
