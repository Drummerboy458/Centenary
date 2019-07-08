<?php

use yii\helpers\Html;
use frontend\assets\MessageAsset;
use yii\widgets\LinkPager;

MessageAsset::register($this);
/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = '100|为母校送祝福';
?>
<div>
<div style="padding:0 10% 0 10%;">
        <br>
        <br>
        <ul class="layui-timeline">

        <?php
        foreach ($messages as $message) {
            echo "<li class=\"layui-timeline-item\">
                <i class=\"layui-icon layui-timeline-axis\" style=\"color:#800080;\">&#xe63f;</i>
                <div class=\"layui-timeline-content layui-text\">
                <h3 class=\"layui-timeline-title\" style=\"color:#800080;\">", $message['identity'],' ',$message['author'], ' ：',
                "</h3>
                <p>",
                $message['content']
                ,"</p>
                </div>
            </li>";
        }
        ?>

          
        </ul>

        <?php
            echo LinkPager::widget([
                'pagination' => $pages,
            ])
        ?>


    </div>
    </div>