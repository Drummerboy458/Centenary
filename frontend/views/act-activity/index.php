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
       
        <div class="row"> <!--两列-->
            <div class="col-md-8" id="container">  <!--活动页-->
                <img src="/images/100.png" style="width: 5%; height: 5%;">
                <?=Html::tag('h1',Html::encode($this->title),['class' => 'item_header'] )?>
                <br>
                <hr class="style-one">
                <?= ListView::widget([
                    'summary'=>'', 
                    'dataProvider' => $dataProvider,
                    'itemView' => 'data',
                ]) ?>
            </div>    
            <div class="col-md-4" >  <!--右侧筛选-->
                <div id='filters'>
                    <h4><i class="fa fa-angle-right"></i> 日期筛选</h4>
                        <div class="date" data-filter="201810">
                            <div class="date-month"> 10 <span>月</span></div>
                            <div class="date-year"> 2018 </div>
                        </div>
                        <div class="date" data-filter="201811">
                            <div class="date-month"> 11 <span>月</span></div>
                            <div class="date-year"> 2018 </div>
                        </div>
                        <div class="date" data-filter="201812">
                            <div class="date-month"> 12 <span>月</span></div>
                            <div class="date-year"> 2018 </div>
                        </div>
                        <div class="date" data-filter="201901">
                            <div class="date-month"> 01 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201902">
                            <div class="date-month"> 02 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201903">
                            <div class="date-month"> 03 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201904">
                            <div class="date-month"> 04 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201905">
                            <div class="date-month"> 05 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201906">
                            <div class="date-month"> 06 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date date-active" data-filter="201907">
                            <div class="date-month"> 07 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201908">
                            <div class="date-month"> 08 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201909">
                            <div class="date-month"> 09 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date" data-filter="201910">
                            <div class="date-month"> 10 <span>月</span></div>
                            <div class="date-year"> 2019 </div>
                        </div>
                        <div class="date date-active date-1017" data-filter="20191017">
                            <div class="date-month"> 百年校庆</div>
                            <div class="date-year"> 2019.10.17 </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </body>
</html>