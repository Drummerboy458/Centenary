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
        'css/responsive.css',
        // 'css/animate.min.css',
        // 'css/font-awesome.min.css',
         //'css/lightbox.css',
        'css/layout.css',
        'css/lww.css',
        'css/comment.css',
        'css/comment.min.css',
        //'css/comment_form.css',
        'css/comment_style.css',
        // 'css/presets/preset1.css',
        // 'css/responsive.css',
        // 'css/style.css',
    ];
    public $js = [
        'js/lww.js',
        'js/respond.min.js',
        'js/jquery.js',
        'js/bootstrap.min.js',
        'js/mainforlayout.js',
        'js/jquery.min.js',
        'js/jquery.qqFace.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
