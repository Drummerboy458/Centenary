<?php

namespace backend\assets;

use yii\web\AssetBundle;

class EchartsAsset extends AssetBundle
{
	public $sourcePath = '@bower/echarts/build/dist';
    public $js = [
		'echarts.js',
    ];
}