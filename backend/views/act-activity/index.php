<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use yii\helpers\HtmlPurifier;
use frontend\assets\MainAsset;



frontend\assets\MainAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ActActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '活动预览';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>   
    <div class="act-activity-index">
         <h3><?= Html::encode($this->title) ?></h1>
        <p>
        <?= Html::a('发布', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
        <?php
            echo "<div style = \" background-color:rgb(247,247,247); border-radius: 30px; \">
                <p style = \"color:#800080; padding:5px; \"> 学术活动： ",$totalCount1,"个 </p>
                <p style = \"color:#800080; padding:5px; \"> 纪念活动：   " ,$totalCount2,"个</p>
                <p style = \"color:#800080; padding:5px; \"> 发展活动：" ,$totalCount3,"个</p>
                <p style = \"color:#800080; padding:5px; \"> 文体活动： " ,$totalCount4, "个</p>
                <p style = \"color:#800080; padding:5px; \"> 校友活动：" ,$totalCount5, "个</p>
                <p style = \"color:#800080; padding:5px; \"> 目前总计：" ,$totalCount1+$totalCount2+$totalCount3+$totalCount4+$totalCount5, "个</p>
            </div>
            ";
        ?>
        <hr class="style-one">
        <?= ListView::widget([
            'summary'=>'', 
            'dataProvider' => $dataProvider,
            'itemView' => 'activity',
        ]) ?>
    </div>    
    </body>
</html>