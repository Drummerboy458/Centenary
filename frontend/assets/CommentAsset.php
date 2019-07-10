<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CommentAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/comment.css',
        'css/comment.min.css',
        'css/comment_form.css',
        'css/comment_style.css',
    ];
    public $js = [
        'jquery.min.js',
        'jquery.qqFace.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
