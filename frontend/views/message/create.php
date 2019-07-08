<?php

use yii\helpers\Html;
use frontend\assets\MessageAsset;


MessageAsset::register($this);
/* @var $this yii\web\View */
/* @var $model frontend\models\Message */

$this->title = '100|为母校送祝福';
?>
<div class="row">
    <div class="col-md-6">
        <div class="message-create">

            <br><br>
            <h2>为母校送祝福</h2>
            <br>
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            
        </div>
    </div>

    <div class="col-md-6">
        <br>
        <br>
        <ul class="layui-timeline">
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[0]['identity'],' ',$messages[0]['author'], ' ：' ?></h3>
                <p>
                <?php echo $messages[0]['content']?>
                </p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[1]['identity'],' ',$messages[1]['author'], ' ：' ?></h3>
                <p><?php echo $messages[1]['content']?></p>
                </div>
            </li>
            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[2]['identity'],' ',$messages[2]['author'], ' ：' ?></h3>
                <p>
                <?php echo $messages[2]['content']?>
                </p>
                </div>
            </li>

            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <h3 class="layui-timeline-title" style="color:#800080;">@<?php echo $messages[3]['identity'],' ',$messages[3]['author'], ' ：' ?></h3>
                <p>
                <?php echo $messages[3]['content']?>
                </p>
                </div>
            </li>

            <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis" style="color:#800080;background-color:#800080;">&#xe63f;</i>
                <div class="layui-timeline-content layui-text">
                <div class="layui-timeline-title"><a href=<?php echo Yii::$app->urlManager->createUrl('message/index'); ?> target="_blank" style="color:#800080;bold;font-size:16px;"><b>更多...</b></a></div>
                </div>
            </li>
        </ul>

        


    </div>
</div>